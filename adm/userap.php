<?php
$hname='localhost';
$uname='angel';
$pass='lcKEOOoTbHwiRed';
$db='angel';

$con= mysqli_connect($hname,$uname,$pass,$db);
require ('inc/essentials.php');
adminLogin();
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport"
content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<title>Admin Panel</title>
<?php require ('inc/links.php'); ?>
</head>
<body class="bg-light">
<?php require ('inc/header.php');?>
<div class="container-fluid" id="main-content">
<div class="row">
<div class="col-lg-10 ms-auto p-4 overflow-hidden">
<h3 class="mb-4 text-danger">USERS</h3>

<div class="card border-0 shadow-sm mb-4">
<div class="card-body">
<div class="text-end mb-4">
<div class="table-responsive">
<table class="table table-hover border text-center" style="min-width: 1300px;">
<thead class="sticky-top">
<tr class="bg-danger text-light">
<th scope="col">Id</th>
<th scope="col">Username</th>
<th scope="col">Email</th>
<th scope="col">Action</th>


<?php
$query="select * from users where status='pending' order by id asc";
$result=mysqli_query($con,$query);
while ($row = mysqli_fetch_array($result)){



echo<<<query
<tr>
<td>$row[id]</td>
<td>$row[name]</td>
<td>$row[email]</td>
<td>
<form action="userap.php" method="POST">
<input type="hidden" name="id" value="$row[id];?>"/>
<input type="submit" name="approval" value="Approval"/>
<input type="submit" name="deny" value="Deny"/>

</form>
</td>


</tr>
query;
}
?>
</tbody>
</table>





<?php

?>

</div>
</div>
<?php
if (isset($_POST['approval'])){
$id=$_POST['id'];
$select="update users set status='approved' where id='$id'";
$result=mysqli_query($con,$select);
echo '<script  type="text/javascript">';
echo 'alert("Approved!")';
echo 'window.location.href="userap.php"';
echo '</script>';}
if (isset($_POST['deny'])){
$id=$_POST['id'];
$select="delete from users where id='$id'";
$result=mysqli_query($con,$select);
echo '<script  type="text/javascript">';
echo 'alert("Rejected!")';
echo 'window.location.href="userap.php"';
echo '</script>';}
?>
<?php require('inc/script.php');?>
</body>
</html>
