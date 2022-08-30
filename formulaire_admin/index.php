<?php
//on demarre une session
session_start() ;
//ensuite on affiche le contenu de la variable session
?>
<html lang="fr">
  <head>
    <link rel="icon" href=".Imprevisible-main/html/logo a.jpg" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      defer
      src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"
      integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script defer src="article.js"></script>
    <link href="style.css" rel="stylesheet" />
    <title>Administration imprevisible</title>
  </head>
  <body>
    <nav>
      <h2>Administration imprevisible</h2>
      <a href="index.html">Articles</a>
      <a href="exclus.html">Exclus</a>
    </nav>
    <h1>Gestion des articles</h1>
    <h2>Ajouter un nouvelle article</h2>
    <form id="form">
      <p>Titre</p>
      <input type="text" id="title" />
      <p>Content</p>
      <textarea id="content" cols="30" rows="10"></textarea>
      <p>Url</p>
      <input type="text" id="url" />
      <p>Date</p>
      <input type="text" id="date" />
      <button type="submit">Enregistrer</button>
    </form>
    <h2>Mes articles</h2>
    <div class="content-articles"></div>
  </body>
</html>
