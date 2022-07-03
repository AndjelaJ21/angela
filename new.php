<?php
$hname='localhost';
$uname='angel';
$pass='lcKEOOoTbHwiRed';
$con='angel';

$db= mysqli_connect($hname,$uname,$pass,$con);

if($db->connect_error){
echo "Error connecting database";
}

?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

<div class="container-fluid">
<div class="tab-content">
<div id="home" class="tab-pane fade in active">
<center><h3>Owner Profile</h3></center>
<div class="container">
<?php
include("../config/config.php");
$u_email= $_SESSION['SESSION_EMAIL'];

$sql="SELECT * from users where email='$u_email'";
$result=mysqli_query($db,$sql);

if(mysqli_num_rows($result)>0)
{
while($rows=mysqli_fetch_assoc($result)){

?>




<div id="menu4" class="tab-pane fade">
<div class="container">
<center><h3>See Messages</h3></center>
<?php
if (isset($_POST['owner_id'])) {
$owner_id = $_GET['owner_id'];
$sql1 = "SELECT * FROM chat where owner_id='$owner_id'";

$query1 = mysqli_query($db, $sql1);

if(mysqli_num_rows($query1)>0)
{
while($row= mysqli_fetch_assoc($query1)){

$tenant_id=$row['tenant_id'];
$sql2="SELECT * FROM tenant where tenant_id='$tenant_id' ";

$query2 = mysqli_query($db,$sql2);

if(mysqli_num_rows($query2)>0)
{
while ($rows= mysqli_fetch_assoc($query2)){

?>


<link rel="stylesheet" type="text/css" href="css/message-style.css">

<div class="tab">
<button class="tablinks" id="defaultOpen" onmouseover="openCity(event, '<?php echo $rows["full_name"]; ?>')"><?php echo $rows["full_name"]; ?></button>
</div>

<div id="<?php echo $rows["full_name"]; ?>" class="tabcontent">
<?php
$sql3="SELECT * FROM chat where tenant_id='$tenant_id' AND owner_id='$owner_id' ";

$query3 = mysqli_query($db,$sql3);

if(mysqli_num_rows($query3)>0)
{
while($ro= mysqli_fetch_assoc($query3)){
echo $ro["message"]."<br>";
}}
?>
</div>

<div class="clearfix"></div>


<?php
//echo '<a href="send-message.php?owner_id='.$owner_id.'&tenant_id='.$tenant_id.'">'.$rows["full_name"].'</a>';
}}}}
}}}?>
</div>
</div>




