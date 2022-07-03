<?php

$hname='localhost';
$uname='root';
$pass='root';
$db='real_estate';

//$con= mysqli_connect($hname,$uname,$pass,$db);
$con=mysqli_connect($hname,$uname,$pass,$db);

if(isset($_POST['review'])){
	review();
}


function review(){
	global $con;
	$property_id=$_GET['property_id'];
$comment=$_POST['comment'];
$rating=$_POST['rating'];

$sql= "INSERT INTO revieww(comment,rating,property_id,status) VALUES('$comment','$rating','$property_id','no')";
$query=mysqli_query($con,$sql);
if(!empty($query)){
	?>

<style>
.alert {
  padding: 20px;
  background-color: #DC143C;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
<script>
	window.setTimeout(function() {
    $(".alert").fadeTo(1000, 0).slideUp(500, function(){
        $(this).remove();
    });
}, 2000);
</script>
<div class="container">
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Your review has been recorded.</strong>
</div></div>


<?php
}

}

 ?>