
<!--
<?php
$dbc = false;

function connectDB(){
	global $dbc;
	$dbc = new mysqli ("localhost", root, "",  "webSDU");
	$dbc->query("SET NAMES 'utf-8'");
}


function closeDB(){
	global $dbc;
	$dbc->close();

}


	function getNews($limit, $id){
	global $dbc;
	connectDB();
	if($id)
		$where = "WHERE `id` = ".$id;
	$result = $dbc->query("SELECT * FROM `news` $where ORDER BY `id` LIMIT $limit");
	closeDB();

	if(!$id)
		return resultToArray($result);
	else
		return $result->fetch_assoc();
	}

	function getBanner($limit, $id){
	global $dbc;
	connectDB();
	if($id)
		$where = "WHERE `id` = ".$id;
	$result = $dbc->query("SELECT * FROM `banner` $where ORDER BY `id` LIMIT $limit");
	closeDB();

	if(!$id)
		return resultToArray($result);
	else
		return $result->fetch_assoc();
	}

	function getCompany($limit, $id_cat){
	global $dbc;
	connectDB();
	if($id_cat)
		$where = "WHERE `id_cat` = ".$id_cat;
	$result = $dbc->query("SELECT * FROM `news` $where ORDER BY `id` LIMIT $limit");
	closeDB();

	
	return resultToArray($result);
	
	}
	function resultToArray($result){
	$array = array();
	while (($row = $result->fetch_assoc())!=false)
		$array[] = $row;
	return $array;
	}
	
?>
-->