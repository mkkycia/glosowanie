<HTML>
  <HEAD>
  </HEAD>
<BODY>
<?php
    session_start();
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("Location: test.php");
        exit();
	}
	echo $_POST['nazwa']
?>

</BODY>
</HTML>
