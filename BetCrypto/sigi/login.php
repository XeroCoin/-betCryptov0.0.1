<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<title>Log in</title>
  <style>
#myform {
	margin:0 auto;
	width:500px;
	padding:14px;
}

label {
	width: 10em;
	float: left;
	margin-right: 0.5em;
	display: block;
	vertical-align: middle;
}
.submit {
	float:right;
}

fieldset {
	background:##D3D3D3 none repeat scroll 0 0;
	border:2px solid ##D3D3D3;
	width: 450px;
}

legend {
	color: #000;
	background: ##D3D3D3;
	border: 1px solid ##D3D3D3;
	padding: 2px 6px
}
.elements {
	padding:10px;
}
p {
	border-bottom:1px solid ##D3D3D3;
	color:#666666;
	font-size:12px;
	margin-bottom:20px;
	padding-bottom:10px;
}
span {
	color:#666666;
	font-size:12px;
	margin-bottom:1px;

}
.btn{
  padding: 4px 12px;
  margin-bottom: 0;
  font-size: 14px;
  line-height: 20px;
  color: #333333;
  text-align: center;
  text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
  vertical-align: middle;
  cursor: pointer;
  background-color: #f5f5f5;
  border: 1px solid ##D3D3D3;

}

.btn:hover{
  color: #333333;
  background-color: #e6e6e6;
}
.error{
  color: red;
  font-size: 20px;
  font-weight: bold;
  text-align: center;
}
.success{
  color: green;
  font-size: 20px;
  font-weight: bold;
  text-align: center;
}

</style>
</head>
<body>

<div id="header">
 Log In Page
</div>
<a href="register.php">Sign Up</a>
<form id="myform" type="post" action="../sigi/includes/login.inc.php" method="post">
  <fieldset>
    <legend>Log In  </legend>
    <p>Please fill in your username and password:</p>
    <div class="elements">
      <label for="name">Username :</label>
      <input  required="required" type="text"  value="" name="loginuname"  size="20"  />
    </div>
	 <div class="elements">
      <label for="password">Password :</label>
      <input required="required" type="text" value="" name="loginpassword"/>
    </div>


    <div class="submit">
       <input type="submit" id="btnlogin" name="btnlogin" class="btn" value="Submit" />
    </div>
  </fieldset>
</form>




<?php


  if (!isset($_GET['login'])) {
    exit();

  }
  else {
    $signCheck = $_GET['login'];

    if ($signCheck == "emptyfields") {
      echo "<p class='error'>You did not fill in all of the required fields!</p>";
      exit();
    }

    elseif ($signCheck == "wrongpassword") {
      echo "<p class='error'>That is the incorrect password</p>";
      exit();
    }
    elseif ($signCheck == "errorsqllogin") {
      echo "<p class='error'>Cannot connect, please try again later.</p>";
      exit();
    }
    elseif ($signCheck == "nouser") {
      echo "<p class='error'>This user does not exist!</p>";
      exit();
    }
    }
 ?>
</body>


</html>
