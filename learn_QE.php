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
  <div class="col-sm-6 box thai eng ">
    <div class="box">
        <h1>Quick Excel <a style="color: red;">คืออะไร ?</a></h1><hr>
    </div>
    <div class="text-center">
      <img class="text-center" src="https://www.mx7.com/i/bea/Hnby4i.png" alt="bg" width="460" height="345">
    </div>
    <div class="box">
      <h4 class="text-center"><strong style="font-size: 26px; color: #259e87;">Quick Excel</strong> คือ เว็บไซต์ที่จะช่วยคุณในการสอนพื้นฐาน การใช้โปรแกรม</h4>
      <h4>Microsoft Excel ตั้งแต่เวอร์ชั่น 2007 ขั้นไป โดยเนื้อหา และข้อมูลต่าง ๆ จะนำมาจาก</h4>
      <h4>เว็บ <a style="color: red ;" href="https://support.office.com/th-th"> support.office.com</a> สามารถกดเข้าไปเรียนรู้เพิ่มเติมได้ที่ลิงค์เลยครับ</h4>
    </div>
    <div class="box">
      <h4 class="text-center">โดยเนื้อหาภายในเว็บจะเกี่ยวกับการใช้งานต่าง ๆ ใน Microsoft office</h4>
      <h4>เช่น <strong style="color: #255d9e;">Microsoft Word</strong>, <strong style="color:#ed4141;">Microsoft PowerPoint</strong>, <strong style="color:#259e87;">Microsoft Excel</strong> ซึ่งเป็นโปรแกรม</h4>
      <h4>ที่นิยมใช้กันทั่วไป ในการทำงานเอกสารต่าง ๆ ซึ่งในเว็บนี้ เราจะสอนการใช้งานพื้นฐาน</h4>
      <h4><strong style="color:#259e87;">Microsoft Excel</strong> เป็นหลัก</h4>
    </div>
  </div>
  <div class="col-sm-3 box thai text-right"></div>
  <div class="box col-sm-12 eng thai" style="color:#F5F5F5; background-color:#177764;">
    <h3 class="text-center">Quick Excel</h3>
  </div>

</body>
</html>
