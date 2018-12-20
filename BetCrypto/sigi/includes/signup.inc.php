<?php
	if(isset($_POST['btn'])){

		require 'dbh.inc.php';

		$userName = $_POST['uname'];
		$mail = $_POST['email'];
		$pwd = $_POST['password'];
		$repeatPwd = $_POST['repeatpassword'];

		if(empty($userName) || empty($mail) || empty($pwd) || empty($repeatPwd)){
			header('location: /Betcrypto/sigi/register.php?return=emptyfields&name='.$userName."&email=".$mail);
			exit();
		}
		elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $userName)) {
			header('location: /Betcrypto/sigi/register.php?return=invalidmailandID');
			exit();

		}
		elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
			header('location: /Betcrypto/sigi/register.php?return=invalidemail&name='.$userName);
			exit();
		}
		elseif (!preg_match("/^[a-zA-Z0-9]*$/", $userName)) {
			header('location: /Betcrypto/sigi/register.php?return=userinvalid&mail='.$mail);
			exit();
		}
		elseif ($pwd !== $repeatPwd) {
			header('location: /Betcrypto/sigi/register.php?return=checkpassword&name='.$userName."&email=".$mail);
			exit();
		}
		else {

			$sql = "SELECT gamblerName FROM gamblers WHERE gamblerName=? ";
			$stmt = mysqli_stmt_init($conn);



				if(!mysqli_stmt_prepare($stmt, $sql)){

					header('location: /Betcrypto/sigi/register.php?return=sqlreturn');
					exit();
				}
				else {
					mysqli_stmt_bind_param($stmt,  "s", $userName);
					mysqli_stmt_execute($stmt);
					mysqli_stmt_store_result($stmt);

					$resultchk = mysqli_stmt_num_rows($stmt);

					if($resultchk > 0){
						header('location: /Betcrypto/sigi/register.php?return=userTaken');
						exit();
					}
          else{
          $res = "SELECT * FROM gamblers WHERE gamblerEmail=?";
          $stmt = mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt, $res)){
    					header('location: /Betcrypto/sigi/register.php?return=sqlreturn');
  					exit();
  				}
          else{
          mysqli_stmt_bind_param($stmt,  "s", $mail);
					mysqli_stmt_execute($stmt);
					mysqli_stmt_store_result($stmt);
          $numrow = mysqli_stmt_num_rows($stmt);
          if ($numrow > 0) {
            header('location: /Betcrypto/sigi/register.php?return=emailTaken');
						exit();
          }
           else{
						$sql = "INSERT INTO gamblers (gamblerName, gamblerEmail, GamblerPwd) VALUES (?, ?, ?)";
						$stmt = mysqli_stmt_init($conn);
						if(!mysqli_stmt_prepare($stmt, $sql)){

							header('location: /Betcrypto/sigi/register.php?return=sqlreturn');
							exit();
						}
						else {
							$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
							mysqli_stmt_bind_param($stmt, "sss", $userName, $mail, $hashedPwd);
							mysqli_stmt_execute($stmt);
							header('location: /Betcrypto/sigi/register.php?return=Success!');
							exit();
						}
					}

				}

			}
      mysqli_stmt_close($stmt);
      mysqli_close($conn);
    }
	}
}
