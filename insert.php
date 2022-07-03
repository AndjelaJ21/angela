<?php
$hname='localhost';
$uname='root';
$pass='root';
$db='real_estate';

$con= mysqli_connect($hname,$uname,$pass,$db);

if($con->connect_error){
    echo "Error connecting database";
}

if (isset($_POST['submit'])){
  //  $_SESSION['id']=$_GET['id'];
    //echo "welc $_SESSION[id]";
  //if (!empty($_POST['picture']) && !empty($_POST['city']) && !empty($_POST['district'])&& !empty($_POST['contact'])&& !empty($_POST['type'])&& !empty($_POST['price'])&& !empty($_POST['total_rooms'])&& !empty($_POST['bedroom'])&& !empty($_POST['living_room'])&& !empty($_POST['kitchen'])&& !empty($_POST['bathroom'])&& !empty($_POST['description'])&& !empty($_POST['id'])) {
        $picture = $_POST['picture'];
    $picture1 = $_POST['picture1'];
    $picture2 = $_POST['picture2'];
    $picture3 = $_POST['picture3'];
    $city = $_POST['city'];
        $district = $_POST['district'];
    $street = $_POST['street'];
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


        $query = "INSERT INTO property( picture,picture1,picture2,picture3, city, district,street, contact, property_type, price, total_rooms, bedroom, living_room, kitchen, bathroom, description, id) VALUES ('{$picture}','{$picture1}','{$picture2}','{$picture3}','{$city}','{$district}','{$street}','{$contact}','{$type}','{$price}','{$total_rooms}','{$bedroom}','{$living_room}','{$kitchen}','{$bathroom}','{$description}','{$id}')";

        $run = mysqli_query($con, $query) or die(mysqli_error());
        if ($run) {
            echo '<script  type="text/javascript">';
            echo 'alert("Approved!")';
            echo 'window.location.href="roomies.php"';
            echo '</script>';

}
        else {
            echo 'alert("Rejected!")';
            echo 'window.location.href="roomies.php"';
        }
    }
    else {
        echo "all fields required";
    }

/*
if (isset($_POST['update'])){
    //if (!empty($_POST['picture']) && !empty($_POST['city']) && !empty($_POST['district'])&& !empty($_POST['contact'])&& !empty($_POST['type'])&& !empty($_POST['price'])&& !empty($_POST['total_rooms'])&& !empty($_POST['bedroom'])&& !empty($_POST['living_room'])&& !empty($_POST['kitchen'])&& !empty($_POST['bathroom'])&& !empty($_POST['description'])&& !empty($_POST['id'])) {
    $picture = $_POST['picture'];
    $picture1 = $_POST['picture1'];
    $picture2 = $_POST['picture2'];
    $picture3 = $_POST['picture3'];
    $city = $_POST['city'];
    $district = $_POST['district'];
    $street = $_POST['street'];
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


    $query = "UPDATE property set picture='$picture',picture1='$picture1',picture2='$picture2',picture3='$picture3', city='$city', district='$district',street='$street', contact='$contact', property_type='$type', price='$price', total_rooms='$total_rooms', bedroom='$bedroom', living_room='$living_room', kitchen='$kitchen', bathroom='$bathroom', description='$description', id='$id')";

    $run = mysqli_query($con, $query) or die(mysqli_error());
    if ($run) {
        echo "success";
    } else {
        echo "not";
    }
}
else {
    echo "all fields required";
}*/

