let exclus = [];
const contentExclusHTML = document.querySelector(".content-exclus");
const form = document.querySelector("#form");
let exclusSelected = null;
const getExclus = () => {
  axios.get("https://api-imprevisible.herokuapp.com/api/exclus").then((res) => {
    exclus = res.data;
    displayExclus();
  });
};

const displayExclus = () => {
  contentExclusHTML.innerHTML = exclus
    .map((element) => {
      return `
            <article>
                <h3>${element.title}</h3>
                <p>${element.content}</p>
                <img src="${element.imageUrl}">
                <p>promo : ${element.promo}</p>
                <p>${element.price} €</p>
                <a href="${element.urls[0]}">amazon</a>
                <a href="${element.urls[1]}">fnac</a>
                <a href="${element.urls[2]}">micromania</a>
                <button onClick="removeExclus('${element._id}')"
                   class="remove"
                >Supprimer</button>
                <button onClick="editExclus('${element._id}')"
                   class="update"
                >Modifier</button>
            </article>
        `;
    })
    .join("");
};

const removeExclus = (exclus_id) => {
  if (window.confirm("Etes vous sur de vouloir supprimer cette exclus ?")) {
    axios
      .delete(`https://api-imprevisible.herokuapp.com/api/exclus/${exclus_id}`)
      .then(() => {
        exclus = exclus.filter((element) => {
          return element._id !== exclus_id;
        });
        displayExclus();
      });
  }
  return;
};

/**
 * @param {string} exclus_id
 */
const editExclus = (exclus_id) => {
  exclusSelected = exclus.find((element) => element._id === exclus_id);
  document.getElementById("title").value = exclusSelected.title;
  document.getElementById("content").value = exclusSelected.content;
  document.getElementById("imageUrl").value = exclusSelected.imageUrl;
  document.getElementById("promo").value = exclusSelected.promo;
  document.getElementById("price").value = exclusSelected.price;
  document.getElementById("amazon").value = exclusSelected.urls[0];
  document.getElementById("fnac").value = exclusSelected.urls[1];
  document.getElementById("micromania").value = exclusSelected.urls[2];
  window.location.href = "#form";
};

const save = () => {
  const title = document.getElementById("title").value;
  const content = document.getElementById("content").value;
  const imageUrl = document.getElementById("imageUrl").value;
  const promo = document.getElementById("promo").value;
  const price = parseInt(document.getElementById("price").value);
  const amazon = document.getElementById("amazon").value;
  const fnac = document.getElementById("fnac").value;
  const micromania = document.getElementById("micromania").value;

  if (exclusSelected === null) {
    axios
      .post("https://api-imprevisible.herokuapp.com/api/exclus", {
        title,
        content,
        promo,
        imageUrl,
        price,
        urls: [amazon, fnac, micromania],
      })
      .then((res) => {
        exclus.push(res.data.exclus);
        form.reset();
        displayExclus();
      })
      .catch((error) => {
        console.log(error);
      });
  } else {
    exclusSelected.title = title;
    exclusSelected.content = content;
    exclusSelected.imageUrl = imageUrl;
    exclusSelected.price = price;
    exclusSelected.promo = promo;
    exclusSelected.urls[0] = amazon;
    exclusSelected.urls[1] = fnac;
    exclusSelected.urls[2] = micromania;

    axios
      .put(
        "https://api-imprevisible.herokuapp.com/api/exclus/" +
          exclusSelected._id,
        exclusSelected
      )
      .then((res) => {
        const index = exclus.findIndex(
          (exclus_existed) => exclus_existed._id === exclusSelected._id
        );
        console.log(index);
        exclus[index] = exclusSelected;
        exclusSelected = null;
        form.reset();
        displayExclus();
      })
      .catch((error) => {
        console.log(error);
      });
  }
};

form.addEventListener("submit", (e) => {
  e.preventDefault();
  save();
});

getExclus();
