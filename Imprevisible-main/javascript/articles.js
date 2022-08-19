axios.get("https://api-imprevisible.herokuapp.com/api/articles").then((res) => {
  document.querySelector(".content-articles").innerHTML = res.data
    .map((article) => {
      return `
        <p id="h23">
            <strong>${article.date} <br><br>${article.title}</strong>
        </p>
        <p id="h24">
            ${article.content}
            <br>
            <a href="${article.url}" target="_blank">${article.url}</a>
        </p>
        `;
    })
    .join("");
});
