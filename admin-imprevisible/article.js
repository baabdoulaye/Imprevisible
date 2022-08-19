let articles = [];
const contentArticlesHTML = document.querySelector(".content-articles");
const form = document.querySelector("#form");
let articleSelected = null;
const getArticles = () => {
  axios
    .get("https://api-imprevisible.herokuapp.com/api/articles")
    .then((res) => {
      articles = res.data;
      displayArticles();
    });
};

const displayArticles = () => {
  contentArticlesHTML.innerHTML = articles
    .map((article) => {
      return `
            <article>
                <h3>${article.title}</h3>
                <p>${article.content}</p>
                <p>${article.date}</p>
                <a href="${article.url}">${article.url}</a>
                <button onClick="removeArticle('${article._id}')"
                   class="remove"
                >Supprimer</button>
                <button onClick="editArticle('${article._id}')"
                   class="update"
                >Modifier</button>
            </article>
        `;
    })
    .join("");
};

const removeArticle = (article_id) => {
  if (window.confirm("Etes vous sur de vouloir supprimer cette article ?")) {
    axios
      .delete(
        `https://api-imprevisible.herokuapp.com/api/articles/${article_id}`
      )
      .then(() => {
        articles = articles.filter((article) => {
          return article._id !== article_id;
        });
        displayArticles();
      });
  }
  return;
};

const editArticle = (article_id) => {
  articleSelected = articles.find((article) => article._id === article_id);
  document.getElementById("title").value = articleSelected.title;
  document.getElementById("content").value = articleSelected.content;
  document.getElementById("url").value = articleSelected.url;
  document.getElementById("date").value = articleSelected.date;
  window.location.href = "#form";
};

const save = () => {
  const title = document.getElementById("title").value;
  const content = document.getElementById("content").value;
  const url = document.getElementById("url").value;
  const date = document.getElementById("date").value;

  if (articleSelected === null) {
    axios
      .post("https://api-imprevisible.herokuapp.com/api/articles", {
        title,
        content,
        url,
        date,
      })
      .then((res) => {
        articles.push(res.data.article);
        form.reset();
        displayArticles();
      })
      .catch((error) => {
        console.log(error);
      });
  } else {
    articleSelected.title = title;
    articleSelected.content = content;
    articleSelected.url = url;
    articleSelected.date = date;
    axios
      .put(
        "https://api-imprevisible.herokuapp.com/api/articles/" +
          articleSelected._id,
        articleSelected
      )
      .then(() => {
        const index = articles.findIndex(
          (article_existed) => article_existed._id === articleSelected._id
        );
        console.log(index);
        articles[index] = articleSelected;
        articleSelected = null;
        form.reset();
        displayArticles();
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

getArticles();
