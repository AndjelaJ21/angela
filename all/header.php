<?php
require ('adm/inc/db_config.php');
require ('adm/inc/essentials.php');

session_start();
$contact_q="select * from contact where id=?";
$values=[1];
$contact_r=mysqli_fetch_assoc(select($contact_q,$values,'i'));
?>



<nav id="nav-bar" class="navbar navbar-expand-lg navbar-light bg-light px-lg-3 py-lg-2 shadow-sm sticky-top">
<div class="container-fluid">
<a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">AJ</a>
<button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
<li class="nav-item">
<a class="nav-link me-2" href="index.php">Home</a>
</li>
<li class="nav-item">
<a class="nav-link me-2" href="apt.php">Apartments</a>
</li>
<li class="nav-item">
<a class="nav-link me-2" href="facilities.php">Facilities</a>
</li>
<li class="nav-item">
<a class="nav-link me-2" href="contact.php">Contact</a>
</li>
<li class="nav-item me-2">
<a class="nav-link" href="about.php">About</a>
</li>
</ul>
    <div class="d-flex">
        <?php
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true) {

            echo<<<data
          <div class="btn-group">
          <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
            $_SESSION[SESSION_EMAIL]
         </button>
         <ul class="dropdown-menu dropdown-menu-lg-end">
         <li><a class="dropdown-item" href="newss.php" >Action</a></li>
         <li><a class="dropdown-item" href="setu.php" >Profile</a></li>
         <li><a class="dropdown-item" href="logout.php">Logout</a></li>
      </ul>
     </div>
data;
        }
        else if (isset($_SESSION['logged_on']) && $_SESSION['logged_on']==true) {
            echo<<<data
          <div class="btn-group">
          <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
            $_SESSION[SESSION_EMAIL]
         </button>
         <ul class="dropdown-menu dropdown-menu-lg-end">
         <li><a class="dropdown-item" href="booked-property.php">Action</a></li>
         <li><a class="dropdown-item" href="setu.php" >Profile</a></li>
         <li><a class="dropdown-item" href="logout.php">Logout</a></li>
      </ul>
     </div>
data;
        }
        else{
            echo<<<data
<div class="d-flex">
    <a href="loginn.php" class="btn btn-outline-dark shadow-none me-lg-3 me-2">Login</a
</div>
    <div class="d-flex">
        <a href="registration.php" class="btn btn-outline-dark shadow-none me-lg-3 me-2">Registration</a
    </div>
data;

        }
        ?>

</div>
</div>
</div>
</nav>


