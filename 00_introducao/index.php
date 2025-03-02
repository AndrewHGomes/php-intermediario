<?php
include_once 'intro.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Introdução</title>
</head>

<body>
  <header>
    <h1>Introdução</h1>
  </header>
  <hr>
  <main>
    <section>
      <h2>Echo</h2>

      <p>Nome: <?= $nome ?></p>
      <p>Sobrenome: <?= $sobrenome ?></p>
      <p>Nome completo <?= "$nome $sobrenome" ?></p>

      <p>Comando Echo: <?= $comandoEcho ?></p>
    </section>
    <hr>
    <section>
      <h2>Print</h2>

      <p>Idade: <?php print $idade ?> anos</p>
      <p>Profissão: <?php print $profissao ?></p>
      <p>Nome completo: <?php print "$nome $sobrenome" ?></p>

      <p>Comando Print: <?php print $comandoPrint ?></p>
    </section>
  </main>
</body>

</html>