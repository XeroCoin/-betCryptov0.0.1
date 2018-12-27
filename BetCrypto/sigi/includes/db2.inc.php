<?php


$servName = "localhost";
$dBUser = "root";
$dBPass = "";
$dBName = "recordbets";


$conn = mysqli_connect($servName, $dBUser, $dBPass, $dBName);

if(!$conn){
  die("connection failed:".mysqli_connect_error());
}
