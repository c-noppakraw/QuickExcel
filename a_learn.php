<html lang="Th-th">
<head>
    <meta charset="utf-8">
    <title>QuickExcel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <style>
    .box {
      margin-top: 3.2% ;
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
            <a class="dropdown-toggle" data-toggle="dropdown">แบบทดสอบ
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
<div class="box container col-sm-12">
    <h1 class="thai">แบบทดสอบ <a style="color: #F5F5F5;">หลังเรียน</a></h1>
</div>
<?php
//เฉลยข้อที่ถูก -- ไม่จำกัดจำนวนข้อ
$correctAns=array("3","1","2","4","4","1");
?>
<div class="col-sm-3"></div>
<div class="box col-sm-6 eng thai">
            <form method="POST" action="check_a_learn.php">
              <div class="radio">
                <h3 style="color:red;">ข้อที่ 1</h3>
                <h4><a style="color:#259e87;"><strong> Excel</strong></a> เป็นโปรแกรมที่เกี่ยวข้องกับอะไร</h4>
                <label><h4><input type="radio" value="1" name="question1"> จดบันทัก</h4></label><br>
                <label><h4><input type="radio" value="2" name="question1"> เอกสารนำเสนอใน</h4></label><br>
                <label><h4><input type="radio" value="3" name="question1"> ตาราง และการคำนวณ</h4></label><br>
                <label><h4><input type="radio" value="4" name="question1"> วาดภาพ</h4></label><br>
              </div><hr>
              <div class="radio">
                <h3 style="color:red;">ข้อที่ 2</h3>
                <h4> ในการสร้างสูตร <a style="color:#259e87;"><strong>Excel</strong></a> ต้องทำอะไรเป็นอันดับแรก</h4>
                <label><h4><input type="radio" value="1" name="question2"> เครื่องหมายเท่ากับ =</h4></label><br>
                <label><h4><input type="radio" value="2" name="question2"> วงเว็บ ()</h4></label><br>
                <label><h4><input type="radio" value="3" name="question2"> ปีกกา {}</h4></label><br>
                <label><h4><input type="radio" value="4" name="question2"> ไม่จำเป็นต้องมี</h4></label><br>
              </div><hr>
              <div class="radio">
                <h3 style="color:red;">ข้อที่ 3</h3>
                <h4>หากเราต้องการจะคัดลอกสูตร ไม่ให้สูตรคลาดเคลื่อน ทำได้หรือไม่<h4>
                <label><h4><input type="radio" value="1" name="question3"> ได้ ทึบที่สูตรและคลิกขวาเลือกคัดลอก</h4></label><br>
                <label><h4><input type="radio" value="2" name="question3"> ได้ เลือกที่ช่องที่ต้องการคัดลอก และกด คัดลอก ในกลุ่ม คลิปบอร์ด</h4></label><br>
                <label><h4><input type="radio" value="3" name="question3"> ได้ กด ctrl + c</h4></label><br>
                <label><h4><input type="radio" value="4" name="question3"> ไม่ได้</h4></label><br>
              </div><hr>
              <div class="radio">
                <h3 style="color:red;">ข้อที่ 4<h3>
                <h4>หากเราต้องการให้ช่อง A1 + A2 ต้องเขียนสูตรอย่างไร</h4>
                <label><h4><input type="radio" value="1" name="question4"> 1 + 2</h4></label><br>
                <label><h4><input type="radio" value="2" name="question4"> = (A1) + (A2)</h4></label><br>
                <label><h4><input type="radio" value="3" name="question4"> A1 + A2</h4></label><br>
                <label><h4><input type="radio" value="4" name="question4"> =A1 + A2</h4></label><br>
              </div><hr>
              <div class="radio">
                <h3 style="color:red;">ข้อที่ 5</h3>
                <h4>การคำนวณสูตรในเซลล์ จะต้องขึ้นต้นด้วยเครื่องหมายใดเสมอ</h4>
                <label><h4><input type="radio" value="1" name="question5"> - </h4></label><br>
                <label><h4><input type="radio" value="2" name="question5"> % </h4></label><br>
                <label><h4><input type="radio" value="3" name="question5"> : </h4></label><br>
                <label><h4><input type="radio" value="4" name="question5"> = </h4></label><br>
              </div><hr>
              <div class="radio">
                <h3 style="color:red;">ข้อที่ 6</h3>
                <h4>วิธีที่ง่ายที่สุดที่เพิ่มผลรวมสูตรในเวิร์คชีทของคุณคืออะไร</h4>
                <label><h4><input type="radio" value="1" name="question6"> ผลรวมอัตโนมัติ </h4></label><br>
                <label><h4><input type="radio" value="2" name="question6"> แทรกฟังก์ชั่น </h4></label><br>
                <label><h4><input type="radio" value="3" name="question6"> ฟังก์ชั่นเพิ่มเติม </h4></label><br>
                <label><h4><input type="radio" value="4" name="question6"> แบบตรรกะ </h4></label><br>
              </div><hr>
              <?php
                foreach($correctAns as $value){
                echo '<input type="hidden" name="result[]" value="'. $value. '">';
              }
              ?>
              <div class="box text-right">
                <input type="reset" value="ยกเลิก" class="btn btn-default" onclick="window.location='home.php' ">
                <input type="submit" value="ส่งข้อมูล" class="btn btn-success" name="ok">
              </div>
            </from>
</div>
<div class="col-sm-3"></div>
<div class="box col-sm-12 eng thai" style="color:#F5F5F5; background-color:#177764;">
  <h3 class="text-center">Quick Excel</h3>
</div>

</body>
</html>
