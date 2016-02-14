<?php

require '../vendor/autoload.php';
require '../ParsedownExtended.php';

$text = file_get_contents("baseimage/baseimage.md");

$parsedown = new ParsedownExtended();
$parsedown->setBaseImagePath("baseimage/");
$markdown = $parsedown->text($text);
echo $markdown;

?>