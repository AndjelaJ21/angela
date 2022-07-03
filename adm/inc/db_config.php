<?php
$hname='localhost';
$uname='angel';
$pass='lcKEOOoTbHwiRed';
$db='angel';

//$con= mysqli_connect($hname,$uname,$pass,$db);
$con=mysqli_connect($hname,$uname,$pass,$db);

if(!$con)
{
die("error".mysqli_connect_error());
}

function filt($data){
foreach ( $data as $key => $value) {

$value=trim($value);
$value=stripslashes($value);
$value=strip_tags($value);
$value=htmlspecialchars($value);

$data[$key]= $value;
}
return $data;
}

function select($sql,$values,$datatypes)
{
$con=$GLOBALS['con'];
if($stmt=mysqli_prepare($con,$sql)){
mysqli_stmt_bind_param($stmt,$datatypes,...$values);
if(mysqli_stmt_execute($stmt)){
$res=mysqli_stmt_get_result($stmt);
mysqli_stmt_close($stmt);
return $res;
}
else{
mysqli_stmt_close($stmt);
die("Error select execute");
}
}
else{
die("Error select prepare");
}
}

function update($sql,$values,$datatypes)
{
$con=$GLOBALS['con'];
if($stmt=mysqli_prepare($con,$sql)){
mysqli_stmt_bind_param($stmt,$datatypes,...$values);
if(mysqli_stmt_execute($stmt)){
$res=mysqli_stmt_affected_rows($stmt);
mysqli_stmt_close($stmt);
return $res;
}
else{
mysqli_stmt_close($stmt);
die("Error update execute");
}
}
else{
die("Error update prepare");
}
}

function insert($sql,$values,$datatypes)
{
$con=$GLOBALS['con'];
if($stmt=mysqli_prepare($con,$sql)){
mysqli_stmt_bind_param($stmt,$datatypes,...$values);
if(mysqli_stmt_execute($stmt)){
$res=mysqli_stmt_affected_rows($stmt);
mysqli_stmt_close($stmt);
return $res;
}
else{
mysqli_stmt_close($stmt);
die("Error insert execute");
}
}
else{
die("Error insert prepare");
}
}


?>

