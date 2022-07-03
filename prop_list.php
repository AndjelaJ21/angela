<?php
$hname='localhost';
$uname='root';
$pass='root';
$db='real_estate';

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


<div class="col-lg-4 col-md-4 px-6">
    <div class="card mb-4 border-0 shadow">
<?php
        $sql2="SELECT * FROM property where property_id='$property_id'";
        $query2=mysqli_query($con,$sql2);

        if(mysqli_num_rows($query2)>0)
        {
        $row=mysqli_fetch_assoc($query2);
        $photo=$row['picture'];
        echo  '<img class="picture" src="images/'.$photo.'">'; }?>

        <h4><b><?php echo $rows['property_type']; ?></b></h4>
        <p><?php echo $rows['city'].', '.$rows['district'] ?></p>
        <p><?php echo '<a href="view_propertyy.php?property_id='.$rows['property_id'].'"  class="btn btn-lg btn-primary btn-block" >View Property </a><br>'; ?></p><br>

        </div>
    </div>
<?php
}
}
?>