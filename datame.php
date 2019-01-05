<html lang="Th-th">
<head>
    <meta charset="utf-8">
    <title>QuickExcel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
    .container {
      background-color: #F5F5F5;
    }
    h3 {
      background-color: #09ab40;
      color: white;
      padding: 14px 25px;
      text-decoration: none;
      display: inline-block;
    }
    </style>
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand eng" href="#myPage">QuickExcel</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right thai">
          <li><a href="home.php">หน้าแรก</a></li>
          <li><a href="learn.php">บทเรียน</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">แบบทดสอบ
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="b_learn.php">แบบทดสอบก่อนเรียน</a></li>
              <li><a href="a_learn.php">แบบทดสอบหลังเรียน</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_COOKIE["Username"];?>
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="datame.php">ข้อมูลส่วนตัว</a></li>
              <li><a href="loginQE.php">ออกจากระบบ</a></li>
            </ul>
          </li>
          <li><a href="callme.php">ติดต่อเรา</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <?php
    require 'cont.php';
    $get =  $_COOKIE["Username"] ;

    $getdata = "SELECT * FROM customer WHERE Username='$get' ";
    $getquery = mysqli_query($connector,$getdata);
  ?>


  <div class="col-sm-2"></div>
  <div class="container box col-sm-8 thai eng">
    <h3>ข้อมูลส่วนตัว</h3>
  <div class="box">
  <table class="table table-striped">
    <thead>
    <?php
      echo  "<tr>";
      echo "<th>Uername</th>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>E-mail</th>
            <th>เพศ</th>
            <th>คะแนนก่อนเรียน</th>
            <th>คะแนนหลังเรียน</th>"
    ?>
    </thead>
    <tbody>
    <?php
        while ($recond = mysqli_fetch_array($getquery)) {
          echo "<tr>";
          echo "<td>" .$recond["Username"]. "</td>";
          echo "<td>" .$recond["Firstname"]. "</td>";
          echo "<td>" .$recond["Lastname"]. "</td>";
          echo "<td>" .$recond["Email"]. "</td>";
          echo "<td>" .$recond["Sex"]. "</td>";
          echo "<td>" .$recond["BL"]. "</td>";
          echo "<td>" .$recond["AL"]. "</td>";
          echo "</tr>";
        }
    ?>
    </tbody>
  </table>
  <div class="box thai text-right">
    <a href="reg_edit.php" style="color:#000000;"><h4><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไขข้อมูล</h4></a>
  </div>
</div>
</div>
<div class="col-sm-2"></div>

</body>
</html>
