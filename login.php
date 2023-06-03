<HTML>
  <HEAD>
  </HEAD>
<BODY>

<?php
session_start();
include "db_conn.php";
if (isset($_POST['uname']) && isset($_POST['password'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    ///https://www.ukodowani.pl/2020/04/php-szyfrowanie-hasa.html
    /// strona powyżej to jest ta strona, z której wziąłem to. Zapewne to co dodałem nie działa ale nie chce mi się tego sprawdzać teraz.
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);
    if (empty($uname)) {
        header("Location: index.php?error=User Name is required");
        exit();
    }else if(empty($pass)){
        header("Location: index.php?error=Password is required");
        exit();
    }else{
        //echo "cos";
        //echo $uname;
        //echo " ";
        //echo $pass;
        $sql = "SELECT * FROM loginy WHERE username='$uname'";
        $result = $conn->query($sql);
        if ($result->rowCount() === 1) {
            foreach ($result as $row){
                if ($row['username'] === $uname && password_verify($pass, $row['password'])) {
                    echo "Logged in!";
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $row['username'];
                    //$_SESSION['id'] = $row['id'];
					//echo "sukces";

					if ($row['zaglosowal'] == 1){
						header("Location: wyniki.php?message=To konto juz oddalo glos");
						exit();
					}else{
                    	header("Location: home.php");
						exit();
					}
                }else{
					//header("Location: index.php?error=" . $row['password'] . " " . $pass . " " . $_POST['password']);
                    header("Location: index.php?error=Incorect User name or password");
                    exit();
                }
            }
        }else{
            //echo "porazka";
            header("Location: index.php?error=Incorect User name or password");
            exit();
        }
    }
}else{
    header("Location: index.php");
    exit();
}
?>

</BODY>
</HTML>
