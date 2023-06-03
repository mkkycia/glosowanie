<HTML>
  <HEAD>
  </HEAD>
<BODY>

<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	header("Location: index.php");
	exit();
}
if (isset($_SESSION["glosowal"]) && $_SESSION["glosowal"] === true){
	header("Location: wyniki.php");
	exit();
}


include "db_conn.php";
function validate($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
$nazwa = $_POST['nazwa'];
//echo $nazwa;
if (empty($nazwa)){
	header("Location: home.php");
	exit();
}
$sql = "SELECT * FROM glosy WHERE nazwa='$nazwa'";
$result = $conn->query($sql);
if ($result->rowCount() === 1) {
	$ile = 0;
	foreach ($result as $row){
		$ile = $row['liczba_glosow'];
	}
	$uname = $_SESSION['username'];
	//echo $uname;
	$sql = "update loginy set zaglosowal = 1 where username='$uname'";
	$conn->query($sql);
	$ile += 1;
	//echo $ile;
	$sql = "update glosy set liczba_glosow='$ile' where nazwa='$nazwa'";
	$conn->query($sql);
	//header("Location: wyniki.php");
	//exit();
}else{
    header("Location: home.php?error=nie ma takiego nauczyciela, upewnij sie ze wybrales go z listy podpowiadajacej");
	exit();
}
?>

</BODY>
</HTML>
