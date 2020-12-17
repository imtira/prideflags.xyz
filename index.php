<?php
require __DIR__ . '/vendor/autoload.php';

// Sometimes redundant, but for code sanitisation. Only parameters passed through this function
// should be used in the template.
function build_header() {
  include($_SERVER['DOCUMENT_ROOT'].'/templates/header.php');
}

function build_footer() {
  include($_SERVER['DOCUMENT_ROOT'].'/templates/footer.php');
}

if (isset($_GET["flag"])) {
  include('templates/flag.php');
} else {
  include('templates/home.php');
}