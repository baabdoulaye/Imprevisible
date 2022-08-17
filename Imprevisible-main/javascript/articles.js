axios.get("http://localhost:3001/api/articles").then((res) => {
    document.querySelector('.content-articles').innerHTML = res.data.map((article) => {
        return `
        <p id="h23">
            <strong>${article.date} <br><br>${article.title}</strong>
        </p>
        <p id="h24">
            ${article.content}
            <br>
            <a href="${article.url}" target="_blank">insomniac.games/marvels-spider-man-2</a>
        </p>
        `
    }).join("")
})