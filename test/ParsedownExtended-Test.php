<?php

require '../vendor/autoload.php';
require '../ParsedownExtended.php';

$text = file_get_contents("file.md");

$ToC = new ParsedownExtended();
$markdown = $ToC->text($text);


echo $ToC->tableOfContentsList();

echo "<pre>";
print_r($ToC->tableOfContents());
echo "</pre>";

echo $markdown;

?>