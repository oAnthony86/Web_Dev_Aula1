<?php


class TR {
	private $classes;
    private $content;
    
	public function __construct($vClasses, array $vContent) {
		$this->classes = $vClasses;
		$this->content = $vContent;
	}

	function addContent($vContent) {
		$this->content[] = $vContent;
	}

	public function __toString() {
		$tr = "<tr";
		if (!is_null($this->classes) && !empty($this->classes)) {
			$tr .= " class='" . $this->classes . "'";
		}
		$tr .= ">";

		foreach ($this->content as $obj) {
			$tr .= $obj;
		}

		$tr .= "</tr>";

		return $tr;
	}
}