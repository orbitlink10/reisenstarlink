<?php
require 'vendor/autoload.php';
require 'bootstrap/load_env_fallback.php';
$app = require 'bootstrap/app.php';
$view = $app->make('view')->make('admin.pages.create')->render();
echo "rendered";
?>
