<?php

abstract class MyDataObject
{
	protected $fields;
	
	function __construct()
	{
		$this->detectFields();
	}

	public function detectFields()
	{
		$query = "SELECT * FROM `".$this->tablename."`";
		$res = mysql_query($query);


		$res = mysql_fetch_assoc($res);
		var_dump($res);
		foreach($res AS $k => $v)
		{
			$this->fields[$k] = $v;
		}
		
		$fields = $this->fields;
		
		return $fields;
	}
	
}

?>