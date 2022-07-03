<?php
$hname='localhost';
$uname='angel';
$pass='lcKEOOoTbHwiRed';
$db='angel';

$con= mysqli_connect($hname,$uname,$pass,$db);

if($con->connect_error){
echo "Error connecting database";
}

?>
<head>
<title>Booked</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style1.css">

</head>

<div id="menu6" class="tab-pane fade">
<center><h3>Booked Property</h3></center>
<div class="container-fluid" id="main-content">
<div class="row">
<div class="col-lg-10 ms-auto p-4 overflow-hidden">

<div class="card-body">
<div class="text-end mb-4">
<div class="table-responsive">
<table class="table table-hover border text-center" >
<tr class="header">
<th scope="col">Booked By</th>
<th scope="col">Booker Email</th>
<th scope="col">Booked Date</th>
<th scope="col">Booked Time</th>
<th scope="col">Property Street</th>
<th scope="col">Property District</th>
<th scope="col">Property City</th>
<th scope="col">Property Price</th>
<th scope="col">Property Picture</th>
</tr>

<?php
include("../config/config.php");
$u_email= $_SESSION['SESSION_EMAIL'];

$sql3="SELECT * from users where email='$u_email'";
$result3=mysqli_query($con,$sql3);

if(mysqli_num_rows($result3)>0)
{
while($rowss=mysqli_fetch_assoc($result3)){
$owner_id=$rowss['id'];

$sql2="SELECT * from property where id='$owner_id'";
$result2=mysqli_query($con,$sql2);

if(mysqli_num_rows($result2)>0)
{
while($ro=mysqli_fetch_assoc($result2)){
$property_id=$ro['property_id'];

$sql="SELECT * from booking where property_id='$property_id'";
$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0)
{
while($rows=mysqli_fetch_assoc($result)){

?>
<tr>

<?php
$tenant_id=$rows['tenant_id'];
$property_id=$rows['property_id'];
$sql1="SELECT * from tenant where tenant_id='$tenant_id'";
$result1=mysqli_query($con,$sql1);

if(mysqli_num_rows($result1)>0)
{
while($row=mysqli_fetch_assoc($result1)){

?>
<td><?php echo $row['full_name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $rows['date']; ?></td>
<td><?php echo $rows['time']; ?></td>



<td><?php echo $ro['district']; ?></td>
<td><?php echo $ro['street']; ?></td>
<td><?php echo $ro['city']; ?></td>
<td><?php echo $ro['price']; ?>e</td>
<td><img src="images/<?= $ro['picture'] ?>" class="w-100 d-block" style="width: 100px;height: 100px;" /></td>
</tr>
<?php }}}}}}}} ?>
</table>
</div>
</div>