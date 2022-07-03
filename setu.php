    <?php
    require ('adm/inc/essentials.php');
    $hname='localhost';
    $uname='root';
    $pass='root';
    $db='real_estate';

    $con= mysqli_connect($hname,$uname,$pass,$db);
    session_start(); ?>
    <!doctype html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Settings</title>
    <?php require('logininc/links.php');?>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    </head>
    <body class="bg-light">
    <?php require('logininc/header.php');?>
    <div class="container-fluid" id="main-content">
    <div class="row">
    <div class="col-lg-10 ms-auto p-4 overflow-hidden">
        <?php if(isset($_SESSION['logged_in'])&& $_SESSION['logged_in']==true){?>

        <form action="setu.php" method="post" class="border-0 mb-4">
            <div class="mb-3">
                <label for="id" class="form-label">Id</label>
                <input type="number" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <input type="submit"  class="btn btn-danger" name="edit">

        </form>
<?php
if(isset($_POST['edit']))
{
    $id=$_SESSION['id'];
   // $name=$_POST['name'];
   // $email=$_POST['email'];
    $select= "select * from users where id='$id'";
    $sql = mysqli_query($con,$select);
   $row = mysqli_fetch_assoc($sql);
    $res= $row['id'];
    if($res === $id)
    {

        $update = "update users set name='$_POST[name]',email='$_POST[email]' where id='$_POST[id]'";
        $sql2=mysqli_query($con,$update);
        if($sql2)
        {
            /*Successful*/
            header('location:setu.php');
        }
        else
        {
            /*sorry your profile is not update*/
            header('location:setu.php');
        }
    }
    else
    {
        /*sorry your id is not match*/
        header('location:setu.php');
    }
}
?>

    <?php } ?>
    <?php
    if (isset($_SESSION['logged_on']) && $_SESSION['logged_on']==true) {
    ?>
        <form action="setu.php" method="post" class="border-0 mb-4">
            <div class="mb-3">
                <label for="id" class="form-label">Id</label>
                <input type="number" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <input type="submit"  class="btn btn-danger" name="edit">

        </form>
        <?php

        if(isset($_POST['edit']))
        {
            $id=$_SESSION['id'];
            // $name=$_POST['name'];
            // $email=$_POST['email'];
            $select= "select * from tenant where tenant_id='$id'";
            $sql = mysqli_query($con,$select);
            $row = mysqli_fetch_assoc($sql);
            $res= $row['id'];
            if($res === $id)
            {

                $update = "update tenant set full_name='$_POST[name]',email='$_POST[email]' where tenant_id='$_POST[id]'";
                $sql2=mysqli_query($con,$update);
                if($sql2)
                {
                    /*Successful*/
echo 'succes';               }
                else
                {
                    /*sorry your profile is not update*/
                    header('location:setu.php');
                }
            }
            else
            {
                /*sorry your id is not match*/
                header('location:setu.php');
            }
        }
        ?>

    <?php } ?>

    </div>
    </div>
    </div>
    <?php require ('logininc/script.php');?>
    </body>
    </html>
    <?php
