<html>
<head>
</head>
<body>

<form action="wyniki.php" method="post">
    <input type="radio" name="sortowanie" Value=0>
    <label>alfabetycznie</label><br>
    <input type="radio" name="sortowanie" Value=1>
	<label>po glosach</label><br>
	<input type="number" name="limit" value=100>
	<label>limit</label><br>
	<input type="radio" name="czy0" Value=0>
	<label>pokazuj z zeroma glosami</label><br>
	<input type="radio" name="czy0" Value=1>
    <label>nie pokazuj z zeroma glosami</label><br>
	<button type="submit" style="font-family: Arial">Aktualizuj</button><br>
</form>

<?php
	session_start();
	include "db_conn.php";
	include "wypisz.php";	
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("Location: index.php");
        exit();
    }
	//echo "jestes zalogowany jako " . $_SESSION["username"] . "<br>";
	//$sortowanie = $_POST['sortowanie'];
	if (!isset($_POST['sortowanie'])){
		$sortowanie = 1;
	}else{
		$sortowanie = $_POST['sortowanie'];
	}
	if (!isset($_POST['limit'])){
        $limit = 100;
	}else{
        $limit = $_POST['limit'];
	}
	if (!isset($_POST['czy0'])){
        $czy0 = 1;
    }else{
        $czy0 = $_POST['czy0'];
    }
	//echo $limit . "<br>" . $sortowanie . "<br>";
	wypisz($sortowanie, $limit, $czy0);

	//$sql = "select * from glosy";
	//$result = $conn->query($sql);
	//foreach ($result as $row){
	//	echo $row['nazwa'] . " " . $row['liczba_glosow'] . "<br>";
	//}

?>

</body>
</html>
