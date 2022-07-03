<?php
$hname='localhost';
$uname='angel';
$pass='lcKEOOoTbHwiRed';
$db='angel';

$con= mysqli_connect($hname,$uname,$pass,$db);
?>
<?php

$sql="SELECT * FROM property";
$query=mysqli_query($con,$sql);

if(mysqli_num_rows($query)>0)
{
while ($rows=mysqli_fetch_assoc($query)) {
$property_id=$rows['property_id'];

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport"
content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>angelaa</title>
<?php require('all/links.php');?>
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
<div class="bg-light">
<?php require('all/header.php');?>
<!-- Carousel -->
<div class="my-5 px-4">
<h2 class="fw-bold h-font text-center">OUR APARTMENTS</h2>
<div class="h-line bg-dark"></div>
</div>
<div class="container">
<div class="row">
<form method="POST" action="search.php">
<input class="form-control" type="text" placeholder="Enter location to search house." name="search_property" aria-label="Search">
</form><br>
<!--      <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
<nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
<div class="container-fluid flex-lg-column align-items-stretch">
<h4 class="mt-2">FILTERS</h4>
<button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filter" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filter">
<div class="border">
<div class="border bg-light p-3 rounded mb-3">
<h5 class="mb-3" style="font-size: 18px">CHECK</h5>
<label class="form-label">Check-in</label>
<input type="date" class="form-control shadow-none mb-3">
<label class="form-label">Check-out</label>
<input type="date" class="form-control shadow-none">
</div>
<div class="border bg-light p-3 rounded mb-3">
<h5 class="mb-3" style="font-size: 18px">FACILITIES</h5>
<div class="mb-2">
<input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
<label class="form-check-label" for="f1">Facility one</label>
</div>
<div class="mb-2">
<input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
<label class="form-check-label" for="f2">Facility two</label>
</div>
<div class="mb-2">
<input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
<label class="form-check-label" for="f3">Facility three</label>
</div>


<div class="border bg-light p-3 rounded mb-3">
<h5 class="mb-3" style="font-size: 18px">GUESTS</h5>
<div class="d-flex">
<div class="me-3">
<label class="form-label">Adult</label>
<input type="number" class="form-control shadow-none">
</div>
<div class="">
<label class="form-label">Children</label>
<input type="number" class="form-control shadow-none">
</div>
</div>
</div>

</div>
</div>
</div>
</nav>
</div></div>-->

<!--
<div class="col-lg-12 col-md-12 px-4">
<div class="card mb-4 border-0 shadow">
<div class="row g-0 p-3 align-items-center">
<div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
<img src="images/<?//= $rows['image'] ?>" class="img-fluid rounded">
</div>
<div class="col-md-5 px-lg-3 px-md-3 px-0">
<h5 class="mb-3"><//?=$rows['property_type']?></h5>
<div class="features mb-3">
<h6 class="mb-1">Features</h6>
<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
<?//=$rows['total_rooms'];?></span>
<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
<?//=$rows['bathroom'];?></span>
<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
1 Balcony
</span>
<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
1 Kitchen
</span>
</div>
<div class="facilities mb-3">
<h6 class="mb-1">Facilities</h6>
<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
WiFi
</span>
<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
TV
</span>
<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
AC
</span>

</div>

</div>
<div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
<h6 class="mb-4">21e per night</h6>
<a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none mb-2">Book Now</a>
<a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
</div>
</div>
</div>
<div class="card mb-4 border-0 shadow">
<div class="row g-0 p-3 align-items-center">
<div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
<img src="apartments/a1.jpg" class="img-fluid rounded">
</div>
<div class="col-md-5 px-lg-3 px-md-3 px-0">
<h5 class="mb-3">Name</h5>
<div class="features mb-3">
<h6 class="mb-1">Features</h6>
<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
2 Rooms
</span>
<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
1 Bathroom
</span>
<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
1 Balcony
</span>
<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
1 Kitchen
</span>
</div>
<div class="facilities mb-3">
<h6 class="mb-1">Facilities</h6>
<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
WiFi
</span>
<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
TV
</span>
<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
AC
</span>

</div>

</div>
<div class="col-md-2 text-center">
<h6 class="mb-4">21e per night</h6>
<a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none mb-2">Book Now</a>
<a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
</div>
</div>
</div>
<div class="card mb-4 border-0 shadow">
<div class="row g-0 p-3 align-items-center">
<div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
<img src="apartments/a1.jpg" class="img-fluid rounded">
</div>
<div class="col-md-5 px-lg-3 px-md-3 px-0">
<h5 class="mb-3">Name</h5>
<div class="features mb-3">
<h6 class="mb-1">Features</h6>
<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
2 Rooms
</span>
<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
1 Bathroom
</span>
<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
1 Balcony
</span>
<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
1 Kitchen
</span>
</div>
<div class="facilities mb-3">
<h6 class="mb-1">Facilities</h6>
<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
WiFi
</span>
<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
TV
</span>
<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
AC
</span>

</div>

</div>
<div class="col-md-2 text-center">
<h6 class="mb-4">21e per night</h6>
<a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none mb-2">Book Now</a>
<a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
</div>
</div>
</div>
</div> -->
<?php include ("prop_list.php"); ?>
</div>
</div>
</div>
<!--Footer-->
<?php require('all/footer.php');?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<?php
}}
?>
</body>
</html>
