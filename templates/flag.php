<?php
use Yosymfony\Toml\Toml;

$flag = Toml::ParseFile($_SERVER['DOCUMENT_ROOT']."/flags/".$_GET['flag'].".toml");

function build_body() {
  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css" rel="stylesheet">
  <link href="/css/shared.css" rel="stylesheet">
  <title>prideflags.xyz's flag emporium!! | <?= $_GET['flag'] ?></title>
</head>
<body>
  <?php build_header(); ?>
  <br>
  <div class="container">
      <?php build_body(); ?>
  </div>

  <?php build_footer(); ?>
</body>
</html>