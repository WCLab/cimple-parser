<?php

class Parser{

	private function _parse($view,$data){
		$vars = array();
		
		foreach($data as $key=>$value){
			$vars[] = '{'.$key.'}';
		}

		return str_replace($vars, $data, $view);
	}

	public function parse($file,$data,$return=false){
		$view = file_get_contents("./views/$file.php");
		$html = $this->_parse($view,$data);
		if($return)
			return $html;
		else
			echo $html;
	}

}
