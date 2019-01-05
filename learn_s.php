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
        <h1>การสร้างสูตร <a style="color: #e98c00;">อย่างง่าย</a></h1><hr>
    </div>
    <div class="box">
      <h4 class="text-center"><strong style="font-size: 26px; color: #e98c00;">คุณ</strong> สามารถสร้างสูตรอย่างง่ายเพื่อบวก ลบ คูณ หรือหารค่าในเวิร์กชีต</h4>
      <h4>ของคุณได้ สูตรอย่างง่ายจะเริ่มต้นด้วยเครื่องหมายเท่ากับ (=), เสมอ แล้วตามด้วยค่าคงที่</h4>
      <h4>ที่เป็นค่าตัวเลขและตัวดำเนินการการคำนวณ เช่น ครื่องหมายบวก (+), เครื่องหมายลบ (-),</h4>
      <h4>เครื่องหมายดอกจัน (*) หรือเครื่องหมายทับ (/)</h4>
    </div>
    <div class="box">
      <h4 class="text-center">เช่น เมื่อคุณใส่สูตร =5+2*3 <strong style="color:#259e87;">Excel</strong> จะคูณตัวเลขสองตัวสุดท้าย และบวกตัวเลขแรก</h4>
      <h4>กับผลลัพธ์ ตามลำดับมาตรฐานของการดำเนินการทางคณิตศาสตร์ ต้องทำการคูณก่อนการบวก</h4>
    </div>
    <div class="box">
      <h4><strong style="color:red;">วิธีทำ</strong></h4>
      <h4><strong>1.</strong> บนเวิร์กชีต ให้คลิกเซลล์ที่คุณต้องการจะใส่สูตร</h4>
      <h4><strong>2.</strong> พิมพ์ = (เครื่องหมายเท่ากับ) แล้วตามด้วยค่าคงที่ และตัวดำเนินการที่คุณต้องการใช้ในการ</h4>
      <h4>คำนวณ</h4>
      <h4><strong>3.</strong> กด Enter</h4>
    </div>
    <div class="box eng thai">
      <h4 style="color:red;">วิดีโอตัวอย่าง</h4>
      <iframe width="854" height="480" src="https://www.youtube.com/embed/2OJvLmIT9ck" frameborder="0" allowfullscreen></iframe>
      <h4>ขอบคุณวิดีโอจาก</h4>
      <h4 style="color:red;"><strong>Cradit<strong><a href="https://www.youtube.com/watch?v=2OJvLmIT9ck"> ทองจุล ขันขาว</a></h4>
    </div>
  </div>
  <div class="col-sm-3"></div>
  <div class="box col-sm-12 eng thai" style="color:#F5F5F5; background-color:#177764;">
    <h3 class="text-center">Quick Excel</h3>
  </div>

</body>
</html>
