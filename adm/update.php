<?php
$hname='localhost';
$uname='angel';
$pass='lcKEOOoTbHwiRed';
$db='angel';


$con= mysqli_connect($hname,$uname,$pass,$db); ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport"
content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Settings</title>
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
<h3 class="mb-4 text-danger">ADD</h3>
<div class="card border-0 shadow-sm mb-4">
<div class="card-body">
<div class="text-end mb-4">
<div class="table-responsive">
<table class="table table-hover border text-center" style="min-width: 1300px;">
<thead class="sticky-top">
<tr class="bg-danger text-light">
<th scope="col">Id</th>
<th scope="col">Picture</th>
<th scope="col">Picture1</th>
<th scope="col">Picture2</th>
<th scope="col">Picture3</th>
<th scope="col">City</th>
<th scope="col">District</th>
<th scope="col">Street</th>
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
<th scope="col">Status</th>

</tr>
</thead>
<tbody>

<?php
$query="select * from property order by property_id asc";
$result=mysqli_query($con,$query);
while ($row = mysqli_fetch_array($result)){



echo<<<query
<tr>
<td>$row[property_id]</td>
<td>$row[picture]</td>
<td>$row[picture1]</td>
<td>$row[picture2]</td>
<td>$row[picture3]</td>
<td>$row[city]</td>
<td>$row[district]</td>
<td>$row[street]</td>
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


</tr>
query;
}
?>
</tbody>
</table>

</div>
</div>

<form action="upd.php" method="post" class="border-0 mb-4">
<div class="mb-3">
<label for="picture" class="form-label">Property ID</label>
<input type="text" name="pid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="insert number here when u want to update or delete property">
</div>
<div class="mb-3">
<label for="picture" class="form-label">Picture</label>
<input type="text" name="picture" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
<div class="mb-3">
<label for="picture" class="form-label">Picture1</label>
<input type="text" name="picture1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
<div class="mb-3">
<label for="picture" class="form-label">Picture2</label>
<input type="text" name="picture2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
<div class="mb-3">
<label for="picture" class="form-label">Picture3</label>
<input type="text" name="picture3" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
<div class="mb-3">
<label for="city" class="form-label">City</label>
<input type="text"  name="city" class="form-control" id="exampleInputPassword1">

<div class="mb-3">
<label for="district" class="form-label">District</label>
<input type="text" name="district" class="form-control" id="exampleInputPassword1">
</div>
<div class="mb-3">
<label for="district" class="form-label">Street</label>
<input type="text" name="street" class="form-control" id="exampleInputPassword1">
</div>
<div class="mb-3">
<label for="contact" class="form-label">Contact</label>
<input type="number" name="contact" class="form-control" id="exampleInputPassword1">
</div>
<div class="mb-3">
<label for="type" class="form-label">Type</label>
<input type="text" name="type" class="form-control" id="exampleInputPassword1">
</div>
<div class="mb-3">
<label for="price" class="form-label">Price</label>
<input type="number" name="price" class="form-control" id="exampleInputPassword1">
</div>
<div class="mb-3">
<label for="total_rooms" class="form-label">Total rooms</label>
<input type="number" name="total_rooms" class="form-control" id="exampleInputPassword1">
</div>
<div class="mb-3">
<label for="bedroom" class="form-label">Bedroom</label>
<input type="number" name="bedroom" class="form-control" id="exampleInputPassword1">
</div>
<div class="mb-3">
<label for="living_room" class="form-label">Living room</label>
<input type="number" name="living_room" class="form-control" id="exampleInputPassword1">
</div>
<div class="mb-3">
<label for="kitchen" class="form-label">Kitchen</label>
<input type="number"  name="kitchen" class="form-control" id="exampleInputPassword1">
</div>
<div class="mb-3">
<label for="bathroom" class="form-label">Bathroom</label>
<input type="number"  name="bathroom" class="form-control" id="exampleInputPassword1">
</div>
<div class="mb-3">
<label for="description" class="form-label">Description</label>
<input type="text" name="description" class="form-control" id="exampleInputPassword1">
</div>
<div class="mb-3">
<label for="id" class="form-label">Id</label>
<input type="text" name="id" class="form-control" id="exampleInputPassword1">
</div>
<button type="submit"  name="update" class="btn btn-primary">Update</button>
<button type="submit"  name="delete" class="btn btn-primary">Delete</button>


</form>

</div>
</div>
</div>
<?php /*
if (isset($_POST['submit'])) {
$hname = 'localhost';
$uname = 'root';
$pass = 'root';
$db = 'real_estate';

$picture = $_POST['picture'];
$city = $_POST['city'];
$district = $_POST['district'];
$contact = $_POST['contact'];
$type = $_POST['type'];
$price = $_POST['price'];
$total_rooms = $_POST['total_rooms'];
$bedroom = $_POST['bedroom'];
$living_room = $_POST['living_room'];
$kitchen = $_POST['kitchen'];
$bathroom = $_POST['bathroom'];
$description = $_POST['description'];
$id = $_POST['id'];

$con = mysqli_connect($hname, $uname, $pass, $db);

if ($con->connect_error) {
echo "Error connecting database";
}
$query = "INSERT INTO property( picture, city, district, contact, property_type, price, total_rooms, bedroom, living_room, kitchen, bathroom, description, id) VALUES ('$picture','$city','$district','$contact','$type','$price','$total_rooms','$bedroom','$living_room','$kitchen','$bathroom','$description','$id')";

$run = mysqli_query($con, $query);
if ($run) {
echo "success";
} else {
echo "not";
}
mysqli_free_result($run);
mysqli_close($con);
}*/
?>
<?php require ('inc/script.php');?>
</body>
</html>
<?php
