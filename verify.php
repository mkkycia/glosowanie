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
    $uname = validate($_POST['uname']);
    $pass = validate(password_hash($_POST['password'], PASSWORD_DEFAULT));
    if (empty($uname)) {
        header("Location: rejestracja.php?error=User Name is required");
        exit();
    }else if(empty($pass)){
        header("Location: rejestracja.php?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM loginy WHERE username='$uname'";
        $result = $conn->query($sql);
		if ($result->rowCount() === 0) {
			$sql = "insert into loginy (username, password, zaglosowal) values ('$uname', '$pass', 0)";
			$conn->query($sql);
			header("Location: index.php?message=Account registered succesfully");
			exit();
        }else{
            header("Location: rejestracja.php?error=This User name already exists");
            exit();
        }
    }
}else{
    header("Location: rejestracja.php?error=Username and password required");
    exit();
}
?>

</BODY>
</HTML>

