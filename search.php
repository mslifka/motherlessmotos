<?php

$q = $_GET['term'];

mysql_connect("localhost","root","");
mysql_select_db("motherlessmotos");

$query=mysql_query("SELECT DISTINCT make FROM motos WHERE make LIKE '$q%'");


$data = array();

while($row = mysql_fetch_array($query)){

	$data[]=array('value'=>$row['make']);
} 

echo json_encode($data);


?>