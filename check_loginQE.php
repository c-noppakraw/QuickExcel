<?php
    require 'cont.php';

    $username = $_POST["txtUsername"];
    $password = $_POST["txtPassword"];

    $checklogin = "SELECT COUNT(*) FROM customer WHERE Username='$username' AND Password='$password';";
    $query = mysqli_query($connector, $checklogin);

    while ($recond = mysqli_fetch_array($query)) {
      if ($recond[0] == 1) {
        ob_start();
        setcookie("Username",$username,time()+3600);
        ob_end_flush();
        header ("Location: home.php");
      }
      else {
        echo "<script type='text/javascript'>";
      	echo "alert('Username หรือ password ไม่ถูกต้อง กรุณาลองใหม่อีกครั้ง');";
        echo "window.location = 'loginQE.php'; ";
      	echo "</script>";
      }
    }

?>
