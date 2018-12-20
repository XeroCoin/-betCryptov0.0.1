<?php


$servName = "localhost";
$dBUser = "root";
$dBPass = "";
$dBName = "loginsystem";
$db2name = "recordbet";

$conn = mysqli_connect($servName, $dBUser, $dBPass, $dBName);
$conrec = mysqli_connect($servName,$dBUser, $dBPass, $db2name);
if(!$conn || !$conrec){
  die("connection failed:".mysqli_connect_error());
}
