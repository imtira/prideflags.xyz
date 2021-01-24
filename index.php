<?php
require __DIR__ . '/vendor/autoload.php';
use Yosymfony\Toml\Toml;

$flags = array_map(function($f) {
  $data = Toml::ParseFile($_SERVER['DOCUMENT_ROOT']."/flags/$f");
  $data['url'] = basename($f, '.toml');
  return $data;
}, array_slice(scandir($_SERVER['DOCUMENT_ROOT'].'/flags/'), 2));

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