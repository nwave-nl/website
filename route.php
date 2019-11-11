<?php
class Route {
	private $_uri = [];
	private $_method = [];
	public function add($uri, $method = null) {
		$this->_uri[] = '/' . trim($uri, '/');
		if($method != null) {
			$this->_method[] = $method;
		}
	}
	public function submit() {
		$found = false;
		$uriGetParam = isset($_GET['uri']) ? '/' . $_GET['uri'] : '/';
		foreach ($this->_uri as $key => $value) {
			if (preg_match("#^$value$#", $uriGetParam)) {
				$found = true;
				$useMethod = $this->_method[$key];
				new $useMethod();
			}
		}
		if(!$found) {
			new NotFound();
		}
	}
}
?>
