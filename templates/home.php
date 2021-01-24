<?php
function build_body($flags) {
  foreach($flags as $flag) {
    if(in_array('lgbt', $flag['tags'])) {
      include($_SERVER['DOCUMENT_ROOT'].'/templates/home/flag_element.php');
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css" rel="stylesheet">
  <link href="/css/shared.css" rel="stylesheet">
  <link href="/css/index.css" rel="stylesheet">
  <title>prideflags.xyz's flag emporium!!</title>
</head>
<body>
  <?php build_header(); ?>
  <br>
  <div class="container">
    <div class="columns">
      <?php build_body($flags); ?>
    </div>
  </div>

  <?php build_footer(); ?>
</body>
</html>