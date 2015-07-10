<?php

class ParsedownExtended extends ParsedownExtra
{
	protected $ToC = array();

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

		foreach ($this->ToC as $i) {
			$tmp .= "<li>".$i["text"];
			if ($i["level"]-$lastLevel > 0) {
				$tmp .= "<ul>";
			} else if ($i["level"]-$lastLevel < 0) {
				$tmp .= "</ul></li>";
			} else {
				$tmp .= "</li>";
			}

			$lastLevel = $i["level"];
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

}

?>