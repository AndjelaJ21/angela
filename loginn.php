<?php
include "logininc/links.php";
session_start();
if (isset($_SESSION['SESSION_EMAIL'])) {
header("Location: index.php");
die();
}

include 'adm/inc/db_config.php';
$hname='localhost';
$uname='angel';
$pass='lcKEOOoTbHwiRed';
$db='angel';

$conn= mysqli_connect($hname,$uname,$pass,$db);$msg = "";

if (isset($_GET['verification'])) {
if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE code='{$_GET['verification']}'")) > 0) {
$query = mysqli_query($conn, "UPDATE users SET code='' WHERE code='{$_GET['verification']}'");

if ($query) {
$msg = "<div class='alert alert-success'>Account verification has been successfully completed.</div>";
}
} else {
header("Location: index.php");
}
}

if (isset($_POST['submit'])) {
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, md5($_POST['password']));

$sql = "SELECT * FROM users WHERE email='{$email}' AND password='{$password}'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($sql);
$status=$row['status'];
$check=mysqli_num_rows($sql);

if ($check==1) {
$_SESSION['status'] = $row['status'];
$_SESSION['email'] = $row['email'];
$_SESSION['password'] = $row['password'];
if ($status = 'approved') {
echo '<script  type="text/javascript">';
echo 'alert("Approved!")';
echo 'window.location.href="index.php"';
echo '</script>';

}
elseif ($status='pending'){
echo '<script  type="text/javascript">';
echo 'alert("Pending!")';
echo 'window.location.href="loginn.php"';
echo '</script>';}
else{ echo "inccorect";}


}
//$id=$row['id'];
if (mysqli_num_rows($result)===1) {
$row = mysqli_fetch_assoc($result);
if ($result == 1){
$_SESSION['logged_in']=true;
$_SESSION['SESSION_EMAIL'] = $email;
//    $_SESSION['id']=$id;

header('location:index.php');
}

if (empty($row['code'])) {
header("Location: index.php");
} else {
$msg = "<div class='alert alert-info'>First verify your account and try again.</div>";
}
} else {
$msg = "<div class='alert alert-danger'>Email or password do not match.</div>";
}
}
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
<title>Login Form-owner</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8" />
<meta name="keywords"
content="Login Form" />
<!-- //Meta tag Keywords -->

<link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

<!--/Style-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--//Style-CSS -->

<script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

</head>

<body>

<!-- form section start -->
<section class="w3l-mockup-form">
<div class="container">
<!-- /form -->
<div class="workinghny-form-grid">
<div class="main-mockup">
<div class="alert-close">
    <span class="fa fa-close"> </span>
    <a href="index.php"></a>
</div>
<div class="w3l_form align-self">
    <div class="left_grid_info">
        <a href="tnlg.php"> <img src="images/tenant.webp" alt=""></a>
        <h3>Login as tenant</h3>
    </div>
</div>
<div class="content-wthree">
    <h2>Login Now</h2>
    <?php echo $msg; ?>
    <form action="" method="post">
        <input type="email" class="email" name="email" placeholder="Enter Your Email" required>
        <input type="password" class="password" name="password" placeholder="Enter Your Password" style="margin-bottom: 2px;" required>
        <p><a href="forgot-password.php" style="margin-bottom: 15px; display: block; text-align: right;">Forgot Password?</a></p>
        <button name="submit" name="submit" class="btn" type="submit">Login</button>
    </form>
    <div class="social-icons">
        <p>Create Account! <a href="registration.php">Register</a>.</p>
    </div>
</div>
</div>
</div>
<!-- //form -->
</div>
</section>
<!-- //form section start -->

<script src="js/jquery.min.js"></script>
<script>
$(document).ready(function (c) {
$('.alert-close').on('click', function (c) {
$('.main-mockup').fadeOut('slow', function (c) {
$('.main-mockup').remove();
});

});

});
</script>

</body>

</html>