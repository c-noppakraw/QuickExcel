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
        <h1>การย้ายหรือคัดลอก <a style="color: #0087c9;">สูตร</a></h1><hr>
    </div>
    <div class="box">
      <h4 class="text-center"><strong style="font-size: 26px; color: #0087c9;">คุณ</strong> ควรจะทราบว่าจะเกิดอะไรขึ้นกับการอ้างอิงเซลล์ได้บ้าง ไม่ว่าจะเป็นแบบสัมบูรณ์</h4>
      <h4>หรือแบบสัมพัทธ์ เมื่อคุณย้ายสูตรด้วยการตัดและวาง หรือคัดลอกสูตรด้วยการคัดลอกและวาง</h4>
    </div>
    <div class="box">
      <h4><strong style="color:red;">ข้อควรระวัง</strong></h4>
    </div>
    <div class="box">
      <h4 class="text-center"><strong>-</strong> เมื่อคุณย้ายสูตร การอ้างอิงเซลล์ภายในสูตรจะไม่เปลี่ยน ไม่ว่าคุณจะใช้การ</h4>
      <h4>อ้างอิงเซลล์ชนิดใดก็ตาม</h4>
    </div>
    <div class="box">
      <h4 class="text-center"><strong>-</strong> เมื่อคุณคัดลอกสูตร การอ้างอิงเซลล์อาจเปลี่ยนได้ตามชนิดของการอ้างอิง</h4>
      <h4>เซลล์ที่คุณใช้</h4>
    </div>
    <div class="box">
      <h3><strong style="color:#259e87;">การคัดลอก และย้ายสูตร</strong></h3>
    </div>
    <div class="box">
      <h4>1.  เลือกเซลล์ที่มีสูตรที่คุณต้องการย้าย</h4>
    </div>
    <div class="box">
      <h4>2. บนแท็บ หน้าแรก ในกลุ่ม คลิปบอร์ด ให้คลิก ตัด หรือ คะดลอก</h4>
      <h4>คุณสามารถย้ายสูตรได้เช่นกันด้วยการลากเส้นขอบของเซลล์ที่ถูกเลือกไปทางซ้ายด้านบนของพื้นที่</h4>
      <h4>ของส่วนที่คัดลอก ข้อมูลที่มีอยู่แล้วใด ๆ จะถูกแทนที่</h4>
    </div>
    <div class="box">
      <h4>3. ให้เลือกให้เลือกทำอย่างใดอย่างหนึ่งต่อไปนี้</h4>
      <h4>- เมื่อต้องการวางสูตรและการจัดรูปแบบใดๆ บนแท็บ หน้าแรก ในกลุ่ม คลิปบอร์ด ให้คลิก วาง</h4>
      <h4>- เมื่อต้องการวางเฉพาะสูตรเท่านั้น บนแท็บ หน้าแรก ในกลุ่ม คลิปบอร์ด ให้คลิก วาง แล้วคลิก</h4>
      <h4>วางแบบพิเศษ แล้วคลิก สูตร</h4>
    </div>
    <div class="box eng thai">
      <h4 style="color:red;">วิดีโอตัวอย่าง</h4>
      <iframe width="854" height="480" src="https://www.youtube.com/embed/D4jd_vYY4Z4" frameborder="0" allowfullscreen></iframe>
      <h4>ขอบคุณวิดีโอจาก</h4>
      <h4 style="color:red;"><strong>Cradit<strong><a href="https://www.youtube.com/watch?v=D4jd_vYY4Z4"> Duangporn Toy</a></h4>
    </div>
    </div>
  </div>
  <div class="col-sm-3 box thai text-right"></div>
  <div class="box col-sm-12 eng thai" style="color:#F5F5F5; background-color:#177764;">
    <h3 class="text-center">Quick Excel</h3>
  </div>

</body>
</html>
