<?php /*

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));

    $sql = "SELECT * FROM users WHERE email='{$email}' AND password='{$password}'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        if (empty($row['code'])) {
            $_SESSION['SESSION_EMAIL'] = $email;
            header("Location: index.php");
        } else {
            $msg = "<div class='alert alert-info'>First verify your account and try again.</div>";
        }
    } else {
        $msg = "<div class='alert alert-danger'>Email or password do not match.</div>";
    }
}*/

$hname = 'localhost';
$uname = 'root';
$pass = 'root';
$db = 'real_estate';

$con = mysqli_connect($hname, $uname, $pass, $db);
?>

    </div>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport"
content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>angel</title>
<?php require('all/links.php');?>
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
<?php
?>

<div class="bg-light">
<?php require('all/header.php');?>
<!-- Carousel -->
<div class="container-fluid px-lg-4 mt-4">
<!-- Swiper -->
<div class="swiper swiper-container">
<div class="swiper-wrapper">
<div class="swiper-slide">
<img src="images/1.jpg" class="w-100 d-block" />
</div>
<div class="swiper-slide">
<img src="images/2.jpg" class="w-100 d-block" />
</div>
<div class="swiper-slide">
<img src="images/3.jpg" class="w-100 d-block" />
</div>
<div class="swiper-slide">
<img src="images/4.JPG" class="w-100 d-block" />
</div>
</div>
</div>
</div>

<!-- check availability form-->
<!--
<div class="container availability-form">
<div class="row">
<div class="col-lg-12 bg-white shadow p-4 rounded">
<h5 class="mb-4">Check Booking Availability</h5>
<form>
<div class="row align-items-end">
<div class="col-lg-3 mb-3">
<label class="form-label" style="font-weight: 500;">Check-in</label>
<input type="date" class="form-control shadow-none">
</div>
<div class="col-lg-3 mb-3">
<label class="form-label" style="font-weight: 500;">Check-out</label>
<input type="date" class="form-control shadow-none">
</div>
<div class="col-lg-3 mb-3">
<label class="form-label" style="font-weight: 500;">Adult</label>
<select class="form-select shadow-none">
<option value="1">One</option>
<option value="2">Two</option>
<option value="3">Three</option>
</select>
</div>
<div class="col-lg-2 mb-3">
<label class="form-label" style="font-weight: 500;">Children</label>
<select class="form-select shadow-none">
<option value="1">One</option>
<option value="2">Two</option>
<option value="3">Three</option>
</select>
</div>
<div class="col-lg-2 mb-lg mt-3">
<button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
</div>
</div>
</form>
</div>
</div>
</div>-->
<!-- Apartments -->
<h2 class="mt-5 pt-4 b-4 text-center fw-bold h-font">APARTMENTS</h2>
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-6 my-3">
<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
<img src="product-photo/a.jpg" width="80px" height="250px" class="card-img-top">
<div class="card-body">
<h5>Apartment Milijana</h5>
<h6 class="mb-4">47e per night</h6>
<div class="features mb-4">
<h6 class="mb-1">Features</h6>
<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
3 Rooms
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
<div class="facilities mb-4">
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
<div class="rating mb-4">
<h6 class="mb-1">Rating</h6>
<span class="badge rounded-pill bg-light">
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
</span>
</div>
<!--
<div class="d-flex justify-content-evenly mb-2">
    <a href="#" class="btn btn-sm text-white bg-primary shadow-none">Book Now</a>
<a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
</div>-->
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 my-3">
<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
<img src="product-photo/b.jpg" width="80px" height="250px" class="card-img-top">
<div class="card-body">
<h5>Apartment Elizabeth</h5>
<h6 class="mb-4">40e per night</h6>
<div class="features mb-4">
<h6 class="mb-1">Features</h6>
<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
4 Rooms
</span>
<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
2 Bathroom
</span>
<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
1 Balcony
</span>
<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
1 Kitchen
</span>
</div>
<div class="facilities mb-4">
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
<div class="rating mb-4">
<h6 class="mb-1">Rating</h6>
<span class="badge rounded-pill bg-light">
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
</span>
</div>
<div class="d-flex justify-content-evenly mb-2">
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 my-3">
<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
<img src="product-photo/c.jpg" width="80px" height="250px" class="card-img-top">
<div class="card-body">
<h5>Apartment Lily</h5>
<h6 class="mb-4">22e per night</h6>
<div class="features mb-4">
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
<div class="facilities mb-4">
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
<div class="rating mb-4">
<h6 class="mb-1">Rating</h6>
<span class="badge rounded-pill bg-light">
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-half text-warning"></i>
</span>
</div>

</div>
</div>
</div>

<div class="col-lg-12 text-center mt-5">
<a href="apt.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Apartments >>></a>
</div>
</div>
</div>
<!-- Facilities -->
<h2 class="mt-5 pt-4 b-4 text-center fw-bold h-font">OUR FACILITIES</h2>
<div class="container">
<div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
<img src="facilities/IMG_43553.svg" width="80px">
<h5 class="mt-3">WiFi</h5>
</div>
<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
<img src="facilities/IMG_41622.svg" width="80px">
<h5 class="mt-3">TV</h5>
</div>
<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
<img src="facilities/IMG_49949.svg"" width="80px">
<h5 class="mt-3">AC</h5>
</div>
<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
<img src="facilities/IMG_96423.svg" width="80px">
<h5 class="mt-3">Heat</h5>
</div>
<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
<img src="facilities/1619095.png" width="80px">
<h5 class="mt-3">Elements</h5>
</div>
</div>
<div class="col-lg-12 text-center mt-5">
<a href="facilities.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
</div>
</div>
<!-- Reach us -->


<h2 class="mt-5 pt-4 b-4 text-center fw-bold h-font">REACH US</h2>

<div class="container">
<div class="row">
<div class="col-lg-12 col-md-2 text-center bg-white rounded shadow py-4 my-3">
<div class="bg-white p-4 rounded mb-4">
<h5>Call us</h5>
<a href="tel: +<?php echo  $contact_r['pn1'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark">
<i class="bi bi-telephone-fill"></i> +<?php echo  $contact_r['pn1'] ?></a>
</div>

<div class="bg-white p-4 rounded mb-4">
<h5>Follow us</h5>
    <?php
    if ($contact_r['tw']!=''){
        echo<<<data
<a href="$contact_r[tw]" class="d-inline-block mb-3">
<span class="badge bg-light text-dark fs-6 p-2">
<i class="bi bi-twitter me-1"></i> Twitter
</span>
</a>
<br>
data;
    }
    ?>

    <?php
    echo<<<data
<a href="$contact_r[fb]" class="d-inline-block mb-3">
<span class="badge bg-light text-dark fs-6 p-2">
<i class="bi bi-facebook me-1"></i>Facebook
</span>
    </a><br>
data;

    ?>
   <?php
   echo<<<data
 <a href="$contact_r[insta]" class="d-inline-block">
<span class="badge bg-light text-dark fs-6 p-2">
<i class="bi bi-instagram me-1"?></i>Instagram
</span>
    </a>
data;

   ?>
</div>


</div>
</div>
</div>



<!--Footer-->
<?php require('all/footer.php');?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script>
var swiper = new Swiper(".swiper-container", {
spaceBetween: 30,
effect: "fade",
loop:true,
autoplay:{delay:3500, disableOnInteraction:false,}
});
</script>
</body>
</html>
<?php
