<?
/*
 * Version: 1.0, 31.05.2012
 * by Adam Wysocki, goldpaid777@gmail.com
 *
 * Copyright (c) 2014 Adam Wysocki
 *
 *	This is core connector class
 *
*/

class once extends core{
	// Get user info, project settings, editting permitions and open files
	function get_once_json(){
		$obj['response']=$this->data['id'].". ".$this->data['text'];

		//you can add aditional status if u want
		if(true){
			$obj['status']='ok';
		}else{
			$obj['error']='project not found';
		}

		echo json_encode($obj);
	}
	// Get user info, project settings, editting permitions and open files
	function get_once_text(){
		echo 'Hello world response';
	}
}
?>