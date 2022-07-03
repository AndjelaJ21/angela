<?php
include "adm/inc/db_config.php";
$hname='localhost';
$uname='root';
$pass='root';
$db='real_estate';

$con= mysqli_connect($hname,$uname,$pass,$db);
?>
<?php require ("logininc/links.php"); ?>


<div class="container-fluid bg-danger text-light p-3 d-flex align-items-center justify-content-between sticky-top">
    <a href="index.php" style="text-decoration: none"><h3 class="mb-0 h-font">USER PANEL</h3></a>
<?php
if (isset($_SESSION['logged_in'])&& $_SESSION['logged_in']==true){
echo "
<div class='user'>
$_SESSION[SESSION_EMAIL] - <a href='logout.php'class='btn btn-light btn-sm text-danger'>LOGOUT</a>

</div>
";
}
        else if (isset($_SESSION['logged_on']) && $_SESSION['logged_on']==true) {
            echo "
<div class='user'>
$_SESSION[SESSION_EMAIL] - <a href='logout.php'class='btn btn-light btn-sm text-danger'>LOGOUT</a>

</div>
";}
else{
echo "
<div class='sing-in-up'>
<button type='button'>LOGIN</button>
<button type='button'>REGISTER</button>

";
}
?>
</div>

<div class="col-lg-2 bg-danger border-top border-3 border-secondary" id="dashboard-menu">
<nav class="navbar navbar-expand-lg navbar-dark">
<div class="container-fluid flex-lg-column align-items-stretch">
<h4 class="mt-2 text-light">USER PANEL</h4>

<button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#adminDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="adminDropdown">
<ul class="nav nav-pills flex-column">
<li class="nav-item">
<a class="nav-link text-white" href="roomies.php">Dashboard</a>
</li>
    <?php if(isset($_SESSION['logged_in'])&& $_SESSION['logged_in']==true){?>

    <li class="nav-item">
<a class="nav-link text-white" href="new.php">UserQ</a>
</li>
    <?php } ?>
<li class="nav-item">
<a class="nav-link text-white" href="setu.php">Settings</a>
</li>




</ul>

</div>
</div>

</nav>

</div>
<?php /*
if (isset($_SESSION['logged_in'])&& $_SESSION['logged_in']==true){
echo "<h1 style='text-align: center'>WELCOME - $_SESSION[SESSION_EMAIL]</h1>";
}
*/
?>
