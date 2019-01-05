<?php
require 'cont.php';
$get =  $_COOKIE["Username"] ;

$correctAns = $_POST["result"];  // $correctAns เป็น Array ประกอบด้วย คำตอบที่ถูก ที่ส่งมาจากตัวข้อสอบ
$numOfQstns = sizeof($correctAns);
$score = 0;
// รับคำตอบ
for ($i=1; $i<=$numOfQstns; $i++)
   {
      $stAns[$i-1] = trim($_POST["question" . $i]);
   }
// ตรวจคำตอบ
for ($i=0; $i<=($numOfQstns-1); $i++){
  $correct = $correctAns[$i];
  $stAnswer = $stAns[$i];
    if($stAnswer == $correct) {
      $score++;
    };
  };
    $strSQL = "UPDATE customer SET BL='$score' WHERE Username='$get' " ;
    $objQuery = mysqli_query($connector, $strSQL);
    mysqli_close($connector);

    if($objQuery){
  	echo "<script type='text/javascript'>";
  	echo "alert('คะแนนที่คุณทำได้คือ $score คะแนน');";
  	echo "window.location = 'learn.php'; ";
  	echo "</script>";
  	}
?>
