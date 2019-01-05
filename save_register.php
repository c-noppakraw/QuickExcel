<?php
	require 'cont.php';

	if(trim($_POST["txtUsername"]) == "")
	{
		echo "<script type='text/javascript'>";
		echo "alert('กรุณากรอก Username ให้ครบถ้วน');";
		echo "</script>";
	}

  if(trim($_POST["txtFirstname"]) == "")
	{
		echo "<script type='text/javascript'>";
		echo "alert('กรุณากรอก ชื่อ ให้ครบถ้วน');";
		echo "</script>";
	}

  if(trim($_POST["txtLastname"]) == "")
	{
		echo "<script type='text/javascript'>";
		echo "alert('กรุณากรอก นามสกุล ให้ครบถ้วน');";
		echo "</script>";
	}

	if(trim($_POST["txtPassword"]) == "")
	{
		echo "<script type='text/javascript'>";
		echo "alert('กรุณากรอกกำหนด Password');";
		echo "</script>";
	}

	if($_POST["txtPassword"] != $_POST["txtConPassword"])
	{
		echo "<script type='text/javascript'>";
		echo "alert('Password ไม่ตรงกัน');";
		echo "</script>";
	}

	if(trim($_POST["txtEmail"]) == "")
	{
		echo "<script type='text/javascript'>";
		echo "alert('กรุณากรอก E-mail');";
		echo "window.location = 'register.php'; ";
		echo "</script>";
		exit();
	}

		$strSQL = "INSERT INTO customer (Username,Password,Firstname,Lastname,Email,Sex) 
		VALUES (
				'".$_POST["txtUsername"]."',
				'".$_POST["txtPassword"]."',
				'".$_POST["txtFirstname"]."',
				'".$_POST["txtLastname"]."',
				'".$_POST["txtEmail"]."',
				'".$_POST["ddlSex"]."'
				)";
		$objQuery = mysqli_query($connector, $strSQL);

		header ("Location: reg_com.php");

?>
