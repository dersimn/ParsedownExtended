<?php

require '../vendor/autoload.php';
require '../ParsedownExtended.php';

if(isset($_GET["file"])) {
	$file = $_GET["file"];
} else {
	$file = "file.md";
}
$text = file_get_contents($file);

$ToC = new ParsedownExtended();
$markdown = $ToC->text($text);


echo $ToC->tableOfContentsList();

echo "<pre>";
print_r($ToC->tableOfContents());
echo "</pre>";

echo $markdown;

?>