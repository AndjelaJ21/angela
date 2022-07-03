    <?php
    $contact_q="select * from contact where id=?";
    $values=[1];
    $contact_r=mysqli_fetch_assoc(select($contact_q,$values,'i'));
    ?>
    <!doctype html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    </head>
    <body>
    <div class="container-fluid bg-white mt-5">
    <div class="row">
    <div class="col-lg-4 p-4">
    <h3 class="h-font fw-bold fs-3 mb-2">AJ</h3>
    <img width="100px" height="100px"  src="images/giphy.gif">
    </div>
    <div class="col-lg-4 p-4">
    <h5 class="mb-3">Links</h5>
    <a href="index.php" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a><br>
    <a href="apt.php" class="d-inline-block mb-2 text-dark text-decoration-none">Apartments</a><br>
    <a href="contact.php" class="d-inline-block mb-2 text-dark text-decoration-none">Contact</a><br>
    <a href="facilities.php" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a><br>
    <a href="about.php" class="d-inline-block mb-2 text-dark text-decoration-none">About</a>
    </div>
    <div class="col-lg-4 p-4">
    <h5 class="mb-3">Follow us</h5>
    <a href="<?php echo $contact_r['tw']?>" class="d-inline-block text-dark text-decoration-none mb-2">
    <i class="bi bi-twitter me-1"?></i>Twitter
    </a><br>
    <a href="<?php echo $contact_r['fb']?>" class="d-inline-block text-dark text-decoration-none mb-2">
    <i class="bi bi-facebook me-1"?></i>Facebook
    </a><br>
    <a href="<?php echo $contact_r['insta']?>" class="d-inline-block text-dark text-decoration-none">
    <i class="bi bi-instagram me-1"?></i>Instagram
    </a>
    </div>
    </div>
    </div>
    <h6 class="text-center bg-primary text-white p-3 m-0">Designed and Develpoed by Andjela Jokic</h6>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"></script>
    <script>
    function setActive(){
    let  navbar=document.getElementById('nav-bar');
    let a_tags=navbar.getElementsByTagName('a');

    for (i=0;i<a_tags.length;i++){
    let file=a_tags[i].href.split('/').pop();
    let file_name=file.split('.')[0];

    if (document.location.href.indexOf(file_name)>=0){
    a_tags[i].classList.add('active');
    }

    }
    }
    setActive();
    </script>
    </body>
    </html>
