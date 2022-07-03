<?php
$hname='localhost';
$uname='root';
$pass='root';
$db='real_estate';

$con= mysqli_connect($hname,$uname,$pass,$db);
session_start();
isset($_SESSION['SESSION_EMAIL']);
include "../config/config.php";


$u_email=$_SESSION['SESSION_EMAIL'];
$owner_id=$_GET['id'];
$tenant_id=$_GET['tenant_id'];



?>