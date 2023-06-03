<?php
//include "db_conn.php";
function wypisz($posortowane, $ile, $czy_zero){
	global $conn;
	$sql = "select * from glosy";
	if ($czy_zero){
		$sql .= " where liczba_glosow > 0";
	}
	if ($posortowane){
		$sql .= " order by liczba_glosow desc";
	}
	$sql .= " limit " . $ile;
	$result = $conn->query($sql);
	foreach ($result as $row){
		echo $row['nazwa'] . " " . $row['liczba_glosow'] . "<br>";
	}
}
?>
