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
<h3 class="mb-4 text-danger">PROPERTY</h3>

<div class="card border-0 shadow-sm mb-4">
<div class="card-body">
<div class="text-end mb-4">
<div class="table-responsive">
<table class="table table-hover border text-center" style="min-width: 1300px;">
<thead class="sticky-top">
<tr class="bg-danger text-light">
<th scope="col">Id</th>
<th scope="col">Picture</th>
<th scope="col">City</th>
<th scope="col">District</th>
<th scope="col">Contact</th>
<th scope="col">Type</th>
<th scope="col">Price</th>
<th scope="col">Total rooms</th>
<th scope="col">Bedroom</th>
<th scope="col">Living room</th>
<th scope="col">Kitchen</th>
<th scope="col">Bathroom</th>
<th scope="col">Booked</th>
<th scope="col">Description</th>
<th scope="col">Id</th>
<th scope="col">Action</th>
<th scope="col">Status</th>



</tr>
</thead>
<tbody>

<?php
$query="select * from add_property where status='deny' order by property_id asc";
$result=mysqli_query($con,$query);
while ($row = mysqli_fetch_array($result)){



echo<<<query
<tr>
<td>$row[property_id]</td>
<td>$row[picture]</td>
<td>$row[city]</td>
<td>$row[district]</td>
<td>$row[contact]</td>
<td>$row[property_type]</td>
<td>$row[price]</td>
<td>$row[total_rooms]</td>
<td>$row[bedroom]</td>
<td>$row[living_room]</td>
<td>$row[kitchen]</td>
<td>$row[bathroom]</td>
<td>$row[booked]</td>
<td>$row[description]</td>
<td>$row[id]</td>
<td>$row[status]</td>




<td>
<form action="userap.php" method="POST">
<input type="hidden" name="id" value="$row[property_id];?>"/>
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
/*
if (isset($_POST['approval'])){
$id=$_POST['id'];
$select="update add_property set status='approved' where property_id='$id'";
$result=mysqli_query($con,$select);
echo '<script  type="text/javascript">';
echo 'alert("Approved!")';
echo 'window.location.href="property.php"';
echo '</script>';}*/
if (isset($_POST['deny'])){
$id=$_POST['id'];
$select="delete from add_property where property_id='$id'";
$result=mysqli_query($con,$select);
echo '<script  type="text/javascript">';
echo 'alert("Rejected!")';
echo 'window.location.href="property.php"';
echo '</script>';}
?>
<?php require('inc/script.php');?>
</body>
</html>
