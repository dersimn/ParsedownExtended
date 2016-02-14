<?php

require '../vendor/autoload.php';
require '../ParsedownExtended.php';

if(isset($_GET["file"])) {
	$file = $_GET["file"];
} else {
	$file = "file.md";
}
$text = file_get_contents($file);

echo "<pre>"; // better formatting of debug messages
$ToC = new ParsedownExtended();
$markdown = $ToC->text($text);
echo "</pre>";

echo $ToC->tableOfContentsList();

echo "<pre>";
print_r($ToC->tableOfContents());
echo "</pre>";

echo $markdown;

?>