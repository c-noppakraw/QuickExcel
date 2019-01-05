<html lang="Th-th">
<head>
    <meta charset="utf-8">
    <title>QuickExcel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
    h3 {
      background-color: #259e87;
      color: white;
      padding: 14px 25px;
      text-decoration: none;
      display: inline-block;
    }
    </style>
</head>
<body>

  <?php
    require 'cont.php';

    $User = $_COOKIE["Username"];

    $sql = "SELECT * FROM customer WHERE Username='$User' ";
    $result = mysqli_query($connector, $sql);
    $row = mysqli_fetch_array($result);
    extract($row);
   ?>

  <div class="box col-sm-3"></div>
  <div class="box col-sm-6 thai eng">
    <h3>แก้ไขข้อมูล</h3>
    <div class="box thai eng">
    <form class="form-horizontal" action="check_reg_edit.php" method="post">
      <d iv class="form-group">
        <label for="txtID" class="col-sm-2 control-label">ID :</label>
        <div class="col-sm-10">
          <input class="form-control" name="txtID" value="<?php echo $ID; ?>" type="text" disabled>
        </div>
      </div>
      <div class="form-group">
        <label for="txtID" class="col-sm-2 control-label">ชื่อ :</label>
        <div class="col-sm-10">
          <input class="form-control" id="Firstname" name="Firstname" value="<?php echo $Firstname; ?>" type="text">
        </div>
      </div>
      <div class="form-group">
        <label for="txtID" class="col-sm-2 control-label">นามสกุล :</label>
        <div class="col-sm-10">
          <input class="form-control" id="Lastname" name="Lastname" value="<?php echo $Lastname; ?>" type="text">
        </div>
      </div>
      <div class="form-group">
        <label for="txtID" class="col-sm-2 control-label">E - mail :</label>
        <div class="col-sm-10">
          <input class="form-control" id="Email" name="Email" value="<?php echo $Email; ?>" type="text">
        </div>
      </div>
      <div class="form-group">
        <label for="txtID" class="col-sm-2 control-label">Password :</label>
        <div class="col-sm-10">
          <input class="form-control" id="Password" name="Password" value="<?php echo $Password; ?>" type="text">
        </div>
      </div>
      <div class="form-group">
        <label for="txtID" class="col-sm-2 control-label">ใส่ Password อีกครั้ง :</label>
        <div class="col-sm-10">
          <input class="form-control" name="Password"  type="text">
        </div>
      </div>
      <div class="form-group">
        <label for="txtID" class="col-sm-2 control-label">เพศ :</label>
        <div class="col-sm-10">
          <input class="form-control" id="Sex" name="Sex" value="<?php echo $Sex; ?>" type="text">
        </div>
      </div>
      <div class="box text-right">
        <input type="button" value=" ยกเลิก " class="btn btn-default" onclick="window.location='datame.php' "/>
        <input type="submit" class="btn btn-success" name="Update" id="Update" value="Update" />
      </div>
    </form>


</body>
</html>
