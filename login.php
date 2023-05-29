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
        $sql = "SELECT * FROM loginy WHERE username='$uname' AND password='$pass'";
        $result = $conn->query($sql);
        if ($result->rowCount() === 1) {
            foreach ($result as $row){
                if ($row['username'] === $uname && $row['password'] === $pass) {
                    echo "Logged in!";
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['id'] = $row['id'];
                    //echo "sukces";
                    header("Location: home.php");
                    exit();
                }else{
                    //echo "nie";
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
