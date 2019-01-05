<html lang="Th-th">
<head>
    <meta charset="utf-8">
    <title>QuickExcel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <style>
    h2 {
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

  <div class="col-sm-3"></div>
  <div class="col-sm-6 box">
      <h2 class="thai">เกี่ยวกับเว็บ</h2>
      <div class="page-header box thai eng">
          <a href="learn_QE.php"><h3 style="color: #000000 ;">Quick Excel คืออะไร ?</h3></a>
      </div>
      <div class="page-header box thai eng">
          <a href="learn_E.php"><h3 style="color: #000000 ;">ภาพรวมของสูตรใน Excel</h3></a>
      </div>
      <h2 class="thai" style="background-color: #ffa100;">บทเรียน</h2>
      <div class="page-header box thai eng">
          <a href="learn_s.php"><h3 style="color: #000000 ;">การสร้างสูตรอย่างง่าย</h3></a>
      </div>
      <div class="page-header box thai eng">
          <a href="learn_C.php"><h3 style="color: #000000 ;">การย้ายหรือคัดลอกสูตร</h3></a>
      </div>
      <div class="page-header box thai eng">
          <a href="learn_cal.php"><h3 style="color: #000000 ;">การใช้ Excel เป็นเครื่องคิดเลข</h3></a>
      </div>
      <div class="page-header box thai eng">
          <a href="learn_sum.php"><h3 style="color: #000000 ;">การใช้งานฟังก์ชั่น SUM</h3></a>
      </div>
  </div>
  <div class="col-sm-3"></div>
  <div class="box col-sm-12 eng thai" style="color:#F5F5F5; background-color:#177764;">
    <h3 class="text-center">Quick Excel</h3>
  </div>


</body>
</html>
