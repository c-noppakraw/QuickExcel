<html lang="Th-th">
<head>
    <meta charset="utf-8">
    <title>QuickExcel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
<style>
  body {
    background-image: url("https://www.mx7.com/i/bea/Hnby4i.png");
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;
    background-size: 100%;
  }
</style>
</head>
<body>

  <div class="jumbotron col-sm-12">
    <h1 class="eng">Quick Excel</h1>
    <p class="thai" style="color: #F5F5F5;">เว็บไซต์ที่จะทำให้คุณรู้ว่า <strong class="eng">Excel</strong> ง่ายกว่าที่คุณคิด</p>
  </div>
  <div class="col-sm-7"></div>
  <div class="col-sm-4">
    <p class="thai" style="font-size: 28px; text-align: center;">เข้าสู่ระบบ</p>
    <form action="check_loginQE.php" method="post">
      <div class="form-group">
        <label for="txtUsername">User Name:</label>
        <input name="txtUsername" type="text" class="form-control eng" id="txtUsername" placeholder="Enter user name">
      </div>
      <div class="form-group">
        <label for="txtPassword">Password:</label>
        <input name="txtPassword" type="password" class="form-control eng" id="txtPassword" placeholder="Enter password">
      </div>
      <div class="checkbox eng">
      <label><input type="checkbox" name="remember"> Remember me</label>
      </div>
          <button type="submit" class="btn btn-success thai">เข้าสู่ระบบ</button>
     </form>
     <p class="thai text-center" style="font-size: 18px;">หากยังไม่ได้ลงทะเบียน สามารถกดที่ลิงค์
        <a href="register.php" style="font-size: 18px ; color: red ;">ลงทะเบียน</a> ที่นี้
     </p>
  </div>
  <div class="col-sm-1"></div>

</body>
</html>
