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
        <h1>ภาพรวมของสูตรใน <a style="color:#259e87;">Excel</a></h1><hr>
    </div>
    <div class="text-center">
      <img class="text-center" src="https://www.mx7.com/i/ba9/zm3gzI.PNG" alt="E_1" width="460" height="345">
    </div>
    <div class="box">
      <h4 class="text-center"><strong style="font-size:26px; color:#259e87;">Microsoft Excel</strong> นั้นสามารถทำอะไรได้มากกว่าการสร้างตาราง กรอกข้อมูล</h4>
      <h4>รายรับ - รายจ่าย แต่มันยังเป็นเครื่องมือในการช่วยคำนวณ ค่าต่าง ๆ ที่คุณต้องการได้อีกด้วย</h4>
      <h4>คุณยังสามารถคำนวณการชำระเงินกู้ หาผลลัพธ์ทางคณิตศาสตร์ หรือแก้ไขปัญหาทางวิศวกรรม</h4>
      <h4>หรือค้นหากรณีสมมติที่ดีที่สุดโดยยึดตามตัวแปรที่คุณใส่ไว้ได้</h4>
    </div>
    <div class="box">
      <h4 class="text-center"><strong style="color:#259e87;">Excel</strong> ทำสิ่งเหล่านี้โดยใช้สูตรในเซลล์ สูตรจะดำเนินการการคำนวณหรือการดำเนินการ</h4>
      <h4>อื่น ๆ บนข้อมูลในเวิร์กชีตของคุณ สูตรจะเริ่มต้นด้วยเครื่องหมายเท่ากับ (=) เสมอ ซึ่งอาจตาม</h4>
      <h4>ด้วยตัวเลข ตัวดำเนินการทางคณิตศาสตร์ (เช่น เครื่องหมาย + หรือ - สำหรับการบวกหรือ</h4>
      <h4>การลบ) และ ฟังก์ชัน <strong style="color:#259e87;">Excel</strong> ที่มีอยู่ภายใน ซึ่งช่วยเพิ่มประสิทธิภาพของสูตร</h4>
    </div>
    <div class="box thai">
      <h4><strong style="color: red;">ตัวอย่าง</strong></h4>
    </div>
    <div class="box thai">
      <h4>สูตรต่อไปนี้จะคูณ 2 ด้วย 3 เข้ากับผลลัพธ์ที่ได้ก็จะได้คำตอบเท่ากับ 6</h4>
    </div>
    <div class="text-center">
      <img class="text-center" src="https://www.mx7.com/i/1fb/M8sQMt.PNG" alt="E_2" width="400" height="250">
    </div>
    <div class="box thai">
      <h4>บวกค่าในเซลล์ A1, A2 และ A3</h4>
    </div>
    <div class="text-center">
      <img class="text-center" src="https://www.mx7.com/i/b6c/PwF576.PNG" alt="E_3" width="400" height="250">
    </div>
  </div>
  <div class="col-sm-3"></div>
  <div class="box col-sm-12 eng thai" style="color:#F5F5F5; background-color:#177764;">
    <h3 class="text-center">Quick Excel</h3>
  </div>


</body>
</html>
