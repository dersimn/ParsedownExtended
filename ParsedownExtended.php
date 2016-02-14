<?php

class ParsedownExtended extends ParsedownExtra
{
	const version = '0.1';
	private $baseImagePath = "";
	protected $ToC = array();

	public function setBaseImagePath($path) {
		$this->baseImagePath = $path;
	}

	protected function extractHeaderInformation($Block)
	{
		return array(
				"text" => $Block["element"]["text"],
				"level" => substr($Block["element"]["name"], 1)
			);
	}

	public function tableOfContents()
	{
		return $this->ToC;
	}

	public function tableOfContentsList()
	{
		$tmp = "<ul>";
		$lastLevel = "1";

		foreach ($this->ToC as $line) {
			if ($line["level"]-$lastLevel > 0) {
				$tmp .= "<ul>";
			}
			if ($line["level"]-$lastLevel < 0) {
				for ($i=0; $i < -1*($line["level"]-$lastLevel); $i++) { 
					$tmp .= "</ul></li>";
				}
			}

			$tmp .= "<li>".$line["text"];
			
			if ($line["level"]-$lastLevel == 0) {
				$tmp .= "</li>";
			}

			$lastLevel = $line["level"];
		}

		$tmp .= "</ul>";
		return $tmp;
	}

	# Function overrides

	protected function blockHeader($Line)
	{
		$Block = parent::blockHeader($Line);

		if ($Block != null) {
			$this->ToC[] = $this->extractHeaderInformation($Block);
		} 

		return $Block;
	}

	protected function blockSetextHeader($Line, array $Block = null)
	{
		$Block = parent::blockSetextHeader($Line, $Block);

		if ($Block != null) {
			$this->ToC[] = $this->extractHeaderInformation($Block);
		} 

		return $Block;
	}

	protected function inlineImage($Excerpt)
	{
		$Image = parent::inlineImage($Excerpt);

		$Image['element']['attributes']['src'] = $this->baseImagePath . $Image['element']['attributes']['src'];

		return $Image;
	}
}

?>