<?php

if(isset($_POST['btnlogin'])){
  require 'dbh.inc.php';
  $mailid = $_POST['loginuname'];
  $pass = $_POST['loginpassword'];
  if (empty($mailid) || empty($pass)) {
    header("location: /Betcrypto/sigi/login.php?login=emptyfields");
    exit();
  }
  else {
    $sql = "SELECT * FROM gamblers WHERE gamblerName=? OR gamblerEmail=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("location: /Betcrypto/sigi/login.php?login=errorsqllogin");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "ss", $mailid, $mailid);
      mysqli_stmt_execute($stmt);
      $res = mysqli_stmt_get_result($stmt);

      if ($row = mysqli_fetch_assoc($res)) {
        $pwck = password_verify($pass, $row['GamblerPwd']);
        if ($pwck == false) {
          header("location: /Betcrypto/sigi/login.php?login=wrongpassword");
          exit();
        }
        else if($pwck == true){
          session_start();
          $_SESSION['userId'] = $row['idGamblers'];
          $_SESSION['UId'] = $row['gamblerName'];
          header("location: /Betcrypto/sigi/index.php?login=success");
          exit();
        }
        else {
          header("location: /Betcrypto/sigi/login.php?login=wrongpassword");
          exit();
        }
      }
      else{
        header("location: /Betcrypto/sigi/login.php?login=nouser");
        exit();
      }
    }

  }
}
else {
  header('location: /Betcrypto/sigi/login.php?login=mustbeloggedin');
  exit();
}
