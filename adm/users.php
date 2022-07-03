<?php
$hname='localhost';
$uname='angel';
$pass='lcKEOOoTbHwiRed';
$db='angel';

$con= mysqli_connect($hname,$uname,$pass,$db);
require ('inc/essentials.php');
require ('inc/db_config.php');
adminLogin();

if (isset($_GET['seen']))
{
$frm_data=filt($_GET);
if ($frm_data['seen']=='all'){
$q="UPDATE user_q SET seen=?";
$values=[1];
if (update($q,$values,'i')){
alert('success','Marked all as read!');
}
else {
alert('error', 'Ooops!');
}
}
else{
$q="UPDATE user_q SET seen=? WHERE id=?";
$values=[1,$frm_data['seen']];
if (update($q,$values,'ii')){
alert('success','Marked as read!');
}
else{
alert('error','Ooops!');
}
}
}

if (isset($_GET['del']))
{


$frm_data=filt($_GET);
if ($frm_data['del']=='all'){
$q="DELETE FROM user_q";
if (mysqli_query($con,$q))
{
alert('success','All deleted!');
}
else{
alert('error','Ooops!');
}
}
else{
$q="DELETE FROM user_q WHERE id=?";
$values=[$frm_data['del']];
if (delete($q,$values,'i'))
{
alert('success','Deleted!');
}
else{
alert('error','Ooops!');
}
}
}

?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
<meta charset="UTF-8">
<meta name="viewport"
content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Rooms</title>
<?php require('inc/links.php');?>
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body class="bg-light">
<?php require('inc/header.php');?>
<div class="container-fluid" id="main-content">
<div class="row">
<div class="col-lg-10 ms-auto p-4 overflow-hidden">
<h3 class="mb-4 text-danger">USERS</h3>


<div class="card border-0 shadow-sm mb-4">
<div class="card-body">
<div class="text-end mb-4">
<!--<button type="button" class="btn btn-danger shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#add-room">
<i class="bi bi-plus-square"></i> Add
</button>-->
</div>

<div class="table-responsive">
<table class="table table-hover border text-center" style="min-width: 1300px;">
<thead class="sticky-top">
<tr class="bg-danger text-light">
<th scope="col">#</th>
<th scope="col">Name</th>
<th scope="col">Email</th>
<th scope="col">Code</th>
<th scope="col">Verified</th>
<th scope="col">Status</th>
<th scope="col">Action</th>




</tr>
</thead>
<tbody id="users-data">

</tbody>
</table>
</div>

</div>
</div>
</div>
</div>
</div>


<!-- Modal -->

<?php require ('inc/script.php');?>
<script src="scripts/users.js"></script>
</body>
</html>
<?php
