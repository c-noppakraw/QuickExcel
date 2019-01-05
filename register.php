<html lang="Th-th">
<head>
    <meta charset="utf-8">
    <title>QuickExcel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container col-sm-12">
      <h1 class="thai">ลงทะเบียนเพื่อเข้าใช้ <a style="color: #F5F5F5;">เว็บไซต์</a></h1>
    </div>

    <div class="col-sm-4"></div>
    <div class="col-sm-4 box eng thai">
      <form action="save_register.php" method="post">
        <div class="form-group">
          <label for="txtUsername">User Name : <strong style="color: red;">*</strong></label>
          <p style="color: red;"><strong>* อักษรตัวแรกกรุณาใช้ตัวพิมพ์ใหญ่<strong></p>
          <input name="txtUsername" type="text" class="form-control eng" id="txtUsername" placeholder="Enter user name">
        </div>
        <div class="form-group">
          <label for="txtFirstname">ชื่อ : <strong style="color: red;">*</strong></label>
          <input name="txtFirstname" type="text" class="form-control eng" id="txtFirstname" placeholder="Enter first name">
        </div>
        <div class="form-group">
          <label for="txtLastname">นามสกุล : <strong style="color: red;">*</strong></label>
          <input name="txtLastname" type="text" class="form-control eng" id="txtLastname" placeholder="Enter last name">
        </div>
        <div class="form-group">
          <label for="txtEmail">E-mail : <strong style="color: red;">*</strong></label></label>
          <input name="txtEmail" type="Email" class="form-control eng" id="txtEmail" placeholder="Enter e-mail">
        </div>
        <div class="form-group">
          <label for="txtPassword">Password : <strong style="color: red;">*</strong></label></label>
          <input name="txtPassword" type="password" class="form-control eng" id="txtPassword" placeholder="Enter password">
        </div>
        <div class="form-group">
          <label for="txtConPassword">Confirm Password : <strong style="color: red;">*</strong></label></label>
          <input name="txtConPassword" type="Password" class="form-control eng" id="txtConPassword" placeholder="Enter password again">
        </div>
        <div class="form-group">
        <label for="ddlSex">เพศ : <strong style="color: red;">*</strong></label></label>
          <select name="ddlSex" type"Sex" class="form-control eng thai" id="ddlSex">
            <option value="ชาย">เพศชาย</option>
            <option value="หญิง">เพศหญิง</option>
          </select>
        </div>
            <button type="submit" class="btn btn-success">ลงทะเบียน</button>
       </form>
            <p class="box thai" style="font-size: 18px;"><strong><a style="color: red;">*</a> กรุณากรอก<a style="color: red;">
              ข้อมูล</a> ให้ครบถ้วน</strong></p>
            <p class="thai" style="font-size: 18px;"><a href="loginQE.php"><< ย้อนกลับ</a></p>
    </div>
    <div class="col-sm-4"></div>
    <div class="box col-sm-12 eng thai" style="color:#F5F5F5; background-color:#177764;">
      <h3 class="text-center">Quick Excel</h3>
    </div>

</body>
</html>
