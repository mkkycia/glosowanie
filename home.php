<HTML>
    <HEAD>
<link href="https://www.ukodowani.pl/favicon.ico" rel="icon" type="image/x-icon">

    </HEAD>

<BODY>
    <?php
        session_start();
        if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
            header("Location: test.php");
            exit();
		}
		echo "jestes zalogowany jako " . $_SESSION["username"];
        echo "cos zedytowalem"
    ?>
</BODY>
</HTML>
