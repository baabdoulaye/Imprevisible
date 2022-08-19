axios.get("https://api-imprevisible.herokuapp.com/api/exclus").then((res) => {
  document.querySelector(".content-exclus").innerHTML = res.data
    .map((exclus) => {
      return `
            <section id="section2">
                <h3 id="h3_articles">${exclus.title}</h3>
                <div id="divkena">
                    <img id="kena" src="./html/${exclus.imageUrl}" alt="" />
                </div>
                <p id="description_jeu_article">
                    ${exclus.content}
                    <br />
                    <br />
                    Retrouvez l'ensemble des jeux chez nos partenaires et n'oubliez surtout
                    pas notre code promo : ${exclus.promo}
                </p>
                <div id="divpegi12">
                    <p id="prix">${exclus.price}€</p>
                </div>
                <div class="classbouton">
                    <a
                    href="${exclus.urls[0]}"
                    target="_blank"
                    ><button class="bn632-hover1 bn20">Amazon</button></a
                    >
                    <a
                    href="${exclus.urls[1]}"
                    target="_blank"
                    ><button class="bn632-hover2 bn20">Fnac</button></a
                    >
                    <a
                    href="${exclus.urls[2]}"
                    target="_blank"
                    ><button class="bn632-hover3 bn20">Micromania</button></a
                    >
                </div>
            </section>
            <br/>
            <br/>
            <br/>
        `;
    })
    .join("");
});
