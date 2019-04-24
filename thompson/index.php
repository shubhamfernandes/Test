<?php
class Test 
{

	public $fname;
	public $lname;
	public function __construct($first, $last) 
	{
		$this -> fname = $first;
		$this -> lname = $last;
	}

	public function echoData() 
	{
		//ucfirst-all starting character will be capatilized, strrev-reverses a string
		echo ucfirst(strrev($this->fname)).' ';     
 		echo $this->lname.'<br>'; 
	}
}

$xmldata = simplexml_load_file("data.xml") or die("Failed to load");
/*echo "<pre>";
print_r($xmldata);
/*echo $xmldata->person[0]->firstName . "<\n>";
echo $xmldata->person[1]->firstName;*/ 
foreach($xmldata->children() as $person) 
{ 
	$blackHouse = new Test($person->firstName,$person->surname);
	$blackHouse -> echoData();
}

?>