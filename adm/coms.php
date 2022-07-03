<?php
$hname='localhost';
$uname='root';
$pass='root';
$db='real_estate';

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
<td>Id</td>
<td>Comment</td>
<td>Rating</td>
<td>Property ID</td>
<td>Status</td>
<td>Action</td>
</tr>
</thead>
    <tbody>



<?php
$query="select * from revieww where status='no' order by review_id asc";
$result=mysqli_query($con,$query);
while ($row = mysqli_fetch_array($result)){

    echo<<<query
<tr>
<td>$row[review_id]</td>
<td>$row[comment]</td>
<td>$row[rating]</td>
<td>$row[property_id]</td>
<td>$row[status]</td>


  

<td>
<form action="coms.php" method="POST">
<input type="hidden" name="id" value="$row[review_id];?>"/>
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
$select="update revieww set status='yes' where review_id='$id'";
$result=mysqli_query($con,$select);
echo '<script  type="text/javascript">';
echo 'alert("Approved!")';
echo 'window.location.href="coms.php"';
echo '</script>';}
if (isset($_POST['deny'])){
$id=$_POST['id'];
$select="delete from revieww where review_id='$id'";
$result=mysqli_query($con,$select);
echo '<script  type="text/javascript">';
echo 'alert("Rejected!")';
echo 'window.location.href="coms.php"';
echo '</script>';}
?>
<?php require('inc/script.php');?>
</body>
</html>
