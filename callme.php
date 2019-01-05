<html lang="Th-th">
<head>
    <meta charset="utf-8">
    <title>QuickExcel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
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
              <li><a href="#">แบบทดสอบก่อนเรียน</a></li>
              <li><a href="#">แบบทดสอบหลังเรียน</a></li>
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

  <div class="jumbotron col-sm-12">
    <h1 class="thai">ช่องทาง<a style="color:#ffffff;">ติดต่อ</a>กับเรา</h1>
  </div>
  <div class="col-sm-3"></div>
  <div class="box col-sm-6 thai eng">
    <h3><i class="fa fa-envelope-o" aria-hidden="true" style="font-size:30px;"></i>  : c.noppakraw@kkumail.com</h3>
    <h3><i class="fa fa-mobile" aria-hidden="true" style="font-size:30px;"></i>  : 090 - 1916 - 905</h3><hr>
    <h3><i class="fa fa-envelope-o" aria-hidden="true" style="font-size:30px;"></i>  : s.salinla@kkumail.com</h3>
    <h3><i class="fa fa-mobile" aria-hidden="true" style="font-size:30px;"></i>  : 096 - 7359 - 535</h3><hr>
    <h3><i class="fa fa-address-book-o" aria-hidden="true" style="font-size:30px;"></i>  : 234/126 หมู่ 12 ชุมชนบ้านเอื้ออาทร ซอย มิตรภาพ 10 ต.โพธิ์ชัย</h3>
    <h3>อ.เมือง จ.หนองคาย 43000</h3>
  </div>
  <div class="col-sm-3"></div>
  <div class="box col-sm-12 eng thai" style="color:#F5F5F5; background-color:#177764;">
    <h3 class="text-center">Quick Excel</h3>
  </div>


</body>
</html>
