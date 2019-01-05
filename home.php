<html lang="Th-th">
<head>
    <meta charset="utf-8">
    <title>QuickExcel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <style>
    .carousel-inner img {
        width: 100%; /* Set width to 100% */
        margin: auto;
    }
    .carousel-caption h3 {
        color: #fff !important;
    }
    @media (max-width: 600px) {
    .carousel-caption {
        display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
      }
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

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active thai eng">
        <img src="https://www.mx7.com/i/b79/DtO9mW.png" width="1200" height="700">
        <div class="carousel-caption">
          <h3>แนะนำเกี่ยวกับเว็บ</h3>
          <p>เว็บนี้เกิดขึ้นได้อย่างไร เนื้อหาและข้อมูลส่วนใหญ่นำมาจากไหน</p>
        </div>
      </div>

      <div class="item thai">
        <img src="https://www.mx7.com/i/b19/KN9sHT.png" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3>ภาพรวมของสูตร Excel</h3>
          <p>เกริ่นนำภาพรวมของสูตรใน Excel ว่าทำอะไรได้บ้าง</p>
        </div>
      </div>

      <div class="item">
        <img src="https://www.mx7.com/i/17a/swvRmj.png" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <h3>การสร้างสูตรอย่างง่าย</h3>
          <p>พื้นฐานการสร้างสูตรด้วยตัวเอง</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

</body>
</html>
