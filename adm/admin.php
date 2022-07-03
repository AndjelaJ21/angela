<?php
require ("inc/essentials.php");
require ("inc/db_config.php");
session_start();
if((isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true)){
redirect('dashboard.php');
}

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport"
content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Admin Login Panel</title>
<?php require('inc/links.php'); ?>

</head>
<body class="bg-light">
<div class="login-form text-center rounded bg-white shadow overflow-hidden">
<form method="POST">
<h4 class="bg-danger text-white py-3">ADMIN LOGIN PANEL</h4>
<div class="p-4">
<div class="mb-3">
<input name="admin_name" required type="text" class="form-control shadow-none text-center" placeholder="Admin Name">
</div>
<div class="mb-4">
<input name="admin_pass" required type="password" class="form-control shadow-none text-center" placeholder="Password">
</div>
<button name="login" type="submit" class="btn btn-danger">LOGIN</button>
</div>
<div class="extra">
<a href="#">Forgot Password</a>
</div>
</form>
</div>
<?php
if(isset($_POST['login'])){
$frm_data=filt($_POST);
$options=[
'cost'=>11
];
$query= "SELECT * FROM admin_c WHERE admin_name=? AND admin_pass=?";
$values=[$frm_data['admin_name'],$frm_data['admin_pass']];
$res=select($query,$values,"ss");
if($res->num_rows==1){
$row=mysqli_fetch_assoc($res);
$_SESSION['adminLogin']=true;
$_SESSION['adminId']=$row['id'];
redirect('set.php');
}
else{
alert("error",'login failed');


}
//print_r($frm_data);
}
?>
</body>
</html>
