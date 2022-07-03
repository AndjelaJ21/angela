<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport"
content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>angelc</title>
<?php require('all/links.php');?>
</head>
<body>
<div class="bg-light">
<?php require('all/header.php');?>
<!-- Carousel -->
<div class="my-5 px-4">
<h2 class="fw-bold h-font text-center">CONTACT US</h2>
<div class="h-line bg-dark"></div>
</div>
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-6 mb-5 px-4">
<div class="bg-white rounded shadow p-4">
<h5>Address</h5>
<a href="<?php echo  $contact_r['gmap'] ?>" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
<i class="bi bi-geo-alt-fill"></i> <?php echo  $contact_r['address'] ?>
</a>
<h5 class="mt-4">Call us</h5>
<a href="tel: +<?php echo  $contact_r['pn1'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark">
<i class="bi bi-telephone-fill"></i> +<?php echo  $contact_r['pn1'] ?></a>
<h5 class="mt-4">Email</h5>
<a href="mailto: <?php echo  $contact_r['email'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark">
<i class="bi bi-envelope-fill"></i> <?php echo  $contact_r['email'] ?></a>
<h5 class="mt-4">Follow us</h5>
    <?php
    if ($contact_r['tw']!=''){
        echo<<<data
<a href="$contact_r[tw]" class="d-inline-block text-dark fs-5 me-2">
<i class="bi bi-twitter me-1"?></i></a>
data;

    }
    ?>

<a href="<?php echo $contact_r['fb']?>" class="d-inline-block text-dark fs-5 me-2">
<i class="bi bi-facebook me-1"?></i>
</a>
<a href="<?php echo $contact_r['insta']?>" class="d-inline-block text-dark fs-5">
<i class="bi bi-instagram me-1"?></i>
</a>
</div>
</div>
<div class="col-lg-6 col-md-6 px-4">
<div class="bg-white rounded shadow p-4">
<form method="POST">
    <h5>Send a message</h5>
    <div class="mt-3">
        <label class="form-label" style="font-weight: 500;">Name</label>
        <input name="name" required type="text" class="form-control shadow-none">
    </div>
    <div class="mt-3">
        <label class="form-label" style="font-weight: 500;">Email</label>
        <input  name="email" required type="email" class="form-control shadow-none">
    </div>
    <div class="mt-3">
        <label class="form-label" style="font-weight: 500;">Subject</label>
        <input name="subject" required type="text" class="form-control shadow-none">
    </div>
    <div class="mt-3">
        <label class="form-label" style="font-weight: 500;">Message</label>
        <textarea name="message" required class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
    </div>
    <button type="submit" name="send" class="btn btn-primary text-white mt-3">SEND</button>
</form>
</div>
</div>
</div>
</div>
</div>

<?php
if (isset($_POST['send'])){
    $frm_data=filt($_POST);
    $q="INSERT INTO user_q (name, email, subject, message) VALUES (?,?,?,?)";
    $values=[$frm_data['name'],$frm_data['email'],$frm_data['subject'],$frm_data['message']];

    $res=insert($q,$values,'ssss');
    if ($res==1){
        alert('success','Mail sent!');
    }
    else{
        alert('error','Oops!');
    }
}

?>


<!--Footer-->
<?php require('all/footer.php');?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
<?php
