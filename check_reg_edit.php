<?php
  require 'cont.php';

  $get =  $_COOKIE["Username"] ;

  $Firstname = $_REQUEST["Firstname"];
	$Lastname = $_REQUEST["Lastname"];
	$Email = $_REQUEST["Email"];
	$Password = $_REQUEST["Password"];
	$Sex = $_REQUEST["Sex"];

  $sql = "UPDATE customer SET Firstname='$Firstname' ,
                              Lastname='$Lastname' ,
                              Email='$Email' ,
                              Password='$Password' ,
                              Sex='$Sex' WHERE Username='$get' " ;

  $result = mysqli_query($connector, $sql);
  mysqli_close($connector);

  if($result){
	echo "<script type='text/javascript'>";
	echo "alert('แก้ไขข้อมูลสำเร็จ');";
	echo "window.location = 'datame.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('ไม่สามารถแก้ไขข้อมูลได้ กรุณาลองใหม่อีกครั้ง');";
  echo "window.location = 'datame.php'; ";
	echo "</script>";
}

 ?>
