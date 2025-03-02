<?php
include_once 'blocosNoHtml.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Renderizando blocos no HTML</title>
</head>

<body>
  <header>
    <h1>Renderizando blocos no HTML</h1>
  </header>
  <hr>
  <main>
    <section>
      <h2>Somente com PHP</h2>

      <?php

      for ($i = 0; $i <= 3; $i++) {
        echo "<p>Loop = $i</p>";
      }

      echo "<br/>";

      echo "<ul>";
      foreach ($nomes as $key => $nome) {
        echo "<li>" . $key + 1 . "º nome: " . $nome . "</li>";
      }
      echo "</ul>";

      echo "<br/>";


      ?>
    </section>
    <hr>
    <section>
      <h2>PHP + HTML</h2>

      <?php for ($i = 3; $i >= 0; $i--) : ?>
        <p><?= $i + 1 ?>ª volta</p>
      <?php endfor; ?>

      <br />

      <ul>
        <?php foreach ($nomes as $key => $nome) : ?>
          <li><?= $key + 1 . 'º nome: ' . $nome ?></li>
        <?php endforeach; ?>
      </ul>
    </section>
  </main>
</body>

</html>