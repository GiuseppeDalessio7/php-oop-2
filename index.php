<?php
$debug = true; // cambiate in true e false in base se volete o meno vedere gli errori
if ($debug == true) {
    ini_set('display_errors', 1); // imposta il file php.ini a mostrare gli errori
    error_reporting(E_ALL); // imposta il livello di errori da mostrare E_ALL tutti
}

require __DIR__ . "/layout.php";
require __DIR__ . "/Article.php";
require __DIR__ . "/Animals/Dog.php";
require __DIR__ . "/Animals/Cat.php";
require __DIR__ . "/Product/Food.php";
require __DIR__ . "/Product/Toy.php";
require __DIR__ . "/Product/Kennel.php";
