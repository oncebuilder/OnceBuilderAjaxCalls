<?
set_time_limit(60); 

// This is core of builder, many methods will be executed by ajax calling once.php with parm	
class core{
	public $data;

	// Initialize varibles
	function core(){

	}
	// Set data function
	function set_data($t){
		foreach($t as $key => $value){
			$this->data[$key]=$value;
		}
	}
	// Convert resource to array JSON friendly
	function res2obj($wynik,$type=''){
		$rows=array();
		while($wiersz = mysql_fetch_assoc($wynik)){
			if($type!='') $wiersz['type']=$type;
			$rows[] = $wiersz;
		}
		return $rows;
	}
}
?>