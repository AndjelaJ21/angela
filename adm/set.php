    <?php
    require ('inc/essentials.php');
    adminLogin();
    ?>
    <!doctype html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Settings</title>
    <?php require('inc/links.php');?>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    </head>
    <body class="bg-light">
    <?php require('inc/header.php');?>
    <div class="container-fluid" id="main-content">
    <div class="row">
    <div class="col-lg-10 ms-auto p-4 overflow-hidden">
    <h3 class="mb-4 text-danger">SETTINGS</h3>

    <!-- General settings -->
    <div class="card border-0 shadow-sm mb-4 bg-danger" >
    <div class="card-body">
    <div class="d-flex align-items-center justify-content-between mb-3">
    <h5 class="card-title m-0 text-white">General Settings</h5>
    <button type="button" class="btn btn-light shadow-non btn-sm text-danger" data-bs-toggle="modal" data-bs-target="#general-s">
    Edit <i class="bi bi-pencil-square"></i>
    </button>
    </div>
    <h6 class="card-subtitle mb-1 fw-bold text-white">Site Title</h6>
    <p class="card-text text-white" id="site_title"></p>
    <h6 class="card-subtitle mb-1 fw-bold text-white">About Title</h6>
    <p class="card-text text-white" id="site_about"></p>
    </div>
    </div>

    <!-- General settings modal -->
    <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
    <form id="general_s_form">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title text-danger">General settings</h5>
    </div>
    <div class="modal-body">
    <div class="mb-3">
    <label class="form-label text-danger">Site Title</label>
    <input type="text" name="site_title" id="site_title_inp" class="form-control shadow-none" required>
    </div>
    <div class="mb-3">
    <label class="form-label text-danger">About</label>
    <textarea name="site_about" id="site_about_inp" class="form-control shadow-none" rows="6" required></textarea>
    </div>
    </div>
    <div class="modal-footer">
    <button type="button"  onclick="site_title.value=general_data.site_title, site_about.value=general_data.site_about" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
    <button type="submit" class="btn btn-danger text-white">SUBMIT</button>
    </div>
    </div>
    </form>
    </div>
    </div>

    <!-- Shutdown section -->
    <div class="card border-0 shadow-sm bg-danger " >
    <div class="card-body">
    <div class="d-flex align-items-center justify-content-between mb-3">
    <h5 class="card-title m-0 text-white">Shutdown</h5>
    <div class="form-check form-switch">
    <form>
    <input onchange="upd_shutdown(this.value)" class="form-check-input" type="checkbox" id="shutdown_t">
    </form>
    </div>
    </div>
    <p class="card-text text-white">
    No customers will be allowed to book rooms, when shutdown is turned on.
    </p>
    </div>
    </div><br>

    <!-- Contact details section -->
    <div class="card border-0 shadow-sm mb-4 bg-danger" >
    <div class="card-body">
    <div class="d-flex align-items-center justify-content-between mb-3">
    <h5 class="card-title m-0 text-white">Contact Settings</h5>
    <button type="button" class="btn btn-light shadow-non btn-sm text-danger" data-bs-toggle="modal" data-bs-target="#contacts-s">
    Edit <i class="bi bi-pencil-square"></i>
    </button>
    </div>
    <div class="row">
    <div class="col-lg-6">
    <div class="mb-4">
    <h6 class="card-subtitle mb-1 fw-bold text-white">Address</h6>
    <p class="card-text text-white" id="address"></p>
    </div>
    <div class="mb-4">
    <h6 class="card-subtitle mb-1 fw-bold text-white">Google Map</h6>
    <p class="card-text text-white" id="gmap"></p>
    </div>
    <div class="mb-4">
    <h6 class="card-subtitle mb-1 fw-bold text-white">Phone Number</h6>
    <p class="card-text mb-1">
    <i class="bi bi-telephone-fill"></i>
    <span id="pn1"></span>
    </p>
    </div>
    <div class="mb-4">
    <h6 class="card-subtitle mb-1 fw-bold text-white">E-mail</h6>
    <p class="card-text text-white" id="email"></p>
    </div>
    </div>
    <div class="col-lg-6">
    <div class="mb-4">
    <h6 class="card-subtitle mb-1 fw-bold text-white">Social Links</h6>
    <p class="card-text mb-1">
    <i class="bi bi-facebook me-1"></i>
    <span id="fb"></span>
    </p>
    <p class="card-text mb-1">
    <i class="bi bi-instagram me-1"></i>
    <span id="insta"></span>
    </p>
    <p class="card-text">
    <i class="bi bi-twitter me-1"></i>
    <span id="tw"></span>
    </p>
    </div>

    </div>
    </div>
    </div>
    </div>

    <!-- Contacts details modal -->
    <div class="modal fade" id="contacts-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <form id="contacts_s_form">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title text-danger">Contact settings</h5>
    </div>
    <div class="modal-body">

    <div class="container-fluid p-0">
    <div class="row">
    <div class="col-md-6">
    <div class="mb-3">
    <label class="form-label text-danger">Address</label>
    <input type="text" name="address" id="address_inp" class="form-control shadow-none" required>
    </div>
    <div class="mb-3">
    <label class="form-label text-danger">Google Map Links </label>
    <input type="text" name="gmap" id="gmap_inp" class="form-control shadow-none" required>
    </div>
    <div class="mb-3">
    <label class="form-label text-danger">Phone Number</label>
    <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">@</span>
    <input type="number" name="pn1" id="pn1_inp" class="form-control shadow-none" required>
    </div></div>
    <div class="mb-3">
    <label class="form-label text-danger">Email</label>
    <input type="text" name="email" id="email_inp" class="form-control shadow-none" required>
    </div>
    </div>
    <div class="col-md-6">
    <div class="mb-3">
    <label class="form-label text-danger">Social Links</label>
    <div class="input-group mb-3">
    <span class="input-group-text"><i class="bi bi-facebook"></i></span>
    <input type="text" name="fb" id="fb_inp" class="form-control shadow-none" required>
    </div>
    <div class="input-group mb-3">
    <span class="input-group-text"><i class="bi bi-instagram"></i> </span>
    <input type="text" name="insta" id="insta_inp" class="form-control shadow-none" required>
    </div>
    <div class="input-group mb-3">
    <span class="input-group-text"><i class="bi bi-twitter"></i></span>
    <input type="text" name="tw" id="tw_inp" class="form-control shadow-none" required>
    </div></div>



    </div>


    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="modal-footer">
    <button type="button"  onclick="contacts_inp(contacts_data)" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
    <button type="submit" class="btn btn-danger text-white">SUBMIT</button>
    </div>
    </div>


    <!-- Scroll section
  <div class="card border-0 shadow-sm mb-4 bg-danger" >
    <div class="card-body">
    <div class="d-flex align-items-center justify-content-between mb-3">
    <h5 class="card-title m-0 text-white">Scroll Settings</h5>
    <button type="button" class="btn btn-light shadow-non btn-sm text-danger" data-bs-toggle="modal" data-bs-target="#team-s">
    Add <i class="bi bi-plus-square"></i>
    </button>
    </div>
    <div class="row" id="#team-data">

    </div>
    </div>
    </div>

    Scroll modal
    <div class="modal fade" id="team-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
    <form id="team_s_form">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title text-danger">Add language</h5>
    </div>
    <div class="modal-body">
    <div class="mb-3">
    <label class="form-label text-danger">Name</label>
    <input type="text" name="lg_name" id="lg_name_inp" class="form-control shadow-none" required>
    </div>
    <div class="mb-3">
    <label class="form-label text-danger">Picture</label>
        <input type="file" name="lg_picture" id="lg_picture_inp" accept=".jpg, .png, .webp, .jpeg" class="form-control shadow-none" required>
    </div>
    </div>
    <div class="modal-footer">
    <button type="button"  onclick="site_title.value=general_data.site_title, site_about.value=general_data.site_about" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
    <button type="submit" class="btn btn-danger text-white">SUBMIT</button>
    </div>
    </div>
    </form>
    </div>
    </div>
-->
    </div>
    </div>
    </div>
    <?php require ('inc/script.php');?>
    <script>
    <!-- connect -->
    let general_data, contacts_data;

    let general_s_form=document.getElementById('general_s_form');
    let site_title_inp=document.getElementById('site_title_inp');
    let site_about_inp=document.getElementById('site_about_inp');
    let contact_s_form=document.getElementById('contacts_s_form');
    let team_s_form=document.getElementById('team_s_form');
    let lg_name_inp=document.getElementById('lg_name_inp');
    let lg_picture_inp=document.getElementById('lg_picture_inp');


    function get_general()
    {
    let site_title=document.getElementById('site_title');
    let site_about=document.getElementById('site_about');

    let shutdown_t=document.getElementById('shutdown_t');

    let xhr=new XMLHttpRequest();
    xhr.open("POST","ajax/settings_crud.php",true);
    xhr.setRequestHeader('Content-Type' , 'application/x-www-form-urlencoded');

    xhr.onload=function(){
    general_data= JSON.parse(this.responseText);

    site_title.innerText = general_data.site_title;
    site_about.innerText = general_data.site_about;

    site_title_inp.value=general_data.site_title;
    site_about_inp.value=general_data.site_about;

    if (general_data.shutdown==0){
    shutdown_t.checked=false;
    shutdown_t.value=0;
    }
    else
    {
    shutdown_t.checked=true;
    shutdown_t.value=1;
    }
    }
    xhr.send('get_general');

    }

    general_s_form.addEventListener('submit',function (e){
    e.preventDefault();
    upd_general(site_title_inp.value,site_about_inp.value);
    });

    <!-- details -->
    function upd_general(site_title_val,site_about_val){
    let xhr=new XMLHttpRequest();
    xhr.open("POST","ajax/settings_crud.php",true);
    xhr.setRequestHeader('Content-Type' , 'application/x-www-form-urlencoded');

    xhr.onload=function(){
    var myModal = document.getElementById('general-s');
    var modal = bootstrap.Modal.getInstance(myModal);
    modal.hide();

    if(this.responseText==1)
    {
    alert('success','Changes saved!');
    get_general();
    }
    else{
    alert('error','No changes saved!');
    }
    }
    xhr.send('site_title='+site_title_val+'&site_about='+site_about_val+'&upd_general');

    }

    <!-- shutdown -->
    function upd_shutdown(val){
    let xhr=new XMLHttpRequest();
    xhr.open("POST","ajax/settings_crud.php",true);
    xhr.setRequestHeader('Content-Type' , 'application/x-www-form-urlencoded');

    xhr.onload=function(){
    if(this.responseText==1 && general_data.shutdown==0)
    {
    alert('success','Shutdown mode is on!');
    }
    else{
    alert('success','Shutdown mode is off!');
    }
    get_general();

    }
    xhr.send('upd_shutdown='+val);

    }

    function get_contacts()
    {
    let contacts_p_id=['address','gmap','pn1','email','fb','insta','tw'];
    let iframe=document.getElementById('iframe');


    let xhr=new XMLHttpRequest();
    xhr.open("POST","ajax/settings_crud.php",true);
    xhr.setRequestHeader('Content-Type' , 'application/x-www-form-urlencoded');

    xhr.onload=function(){
    contacts_data= JSON.parse(this.responseText);
    contacts_data=Object.values(contacts_data);

    for (i=0;i<contacts_p_id.length;i++){
    document.getElementById(contacts_p_id[i]).innerText=contacts_data[i+1];
    }
    iframe.src=contacts_data[9];
    contacts_inp(contacts_data);
    }
    xhr.send('get_contacts');
    }

    function contacts_inp(data){
    let contacts_inp_id = ['address_inp','gmap_inp','pn1_inp','email_inp','fb_inp','insta_inp','tw_inp','iframe_inp'];

    for (i=0;i<contacts_inp_id.length;i++){
    document.getElementById(contacts_inp_id[i]).value= data[i+1];
    }
    }

    contact_s_form.addEventListener('submit',function (e){
    e.preventDefault();
    upd_contacts();
    })

    function upd_contacts(){
    let index=['address','gmap','pn1','email','fb','insta','tw','iframe'];
    let contacts_inp_id=['address_inp','gmap_inp','pn1_inp','email_inp','fb_inp','insta_inp','tw_inp','iframe_inp']

    let data_str="";

    for (i=0;i<index.length;i++){
    data_str += index[i]+"="+document.getElementById(contacts_inp_id[i]).value + '&';
    }
    data_str += "upd_contacts";
    let xhr=new XMLHttpRequest();
    xhr.open("POST","ajax/settings_crud.php",true);
    xhr.setRequestHeader('Content-Type' , 'application/x-www-form-urlencoded');

    xhr.onload=function (){
    var myModal = document.getElementById('contacts-s');
    var modal = bootstrap.Modal.getInstance(myModal);
    modal.hide();
    if(this.responseText==1)
    {
    alert('success','Changes saved!');
    get_contacts();
    }
    else{
    alert('error','No changes made!');
    }
    }

    xhr.send(data_str);

    }

 /*   team_s_form.addEventListener('submit',function (e){
e.preventDefault();
add_lg();
    });
    function add_lg(){
        let data=new FormData();
        data.append('name',lg_name_inp.value);
        data.append('picture',lg_picture_inp.files[0]);
        data.append('add_lg','');
        let xhr=new XMLHttpRequest();
        xhr.open("POST","ajax/settings_crud.php",true);

        xhr.onload=function(){
            console.log(this.responseText);
            var myModal = document.getElementById('team-s');
            var modal = bootstrap.Modal.getInstance(myModal);
            modal.hide();

            if(this.responseText==1)
            {
                alert('success','Changes saved!');
                get_general();
            }
            else{
                alert('error','No changes saved!');
            }
        }
xhr.send(data);
    }
*/
    window.onload= function(){
    get_general();
    get_contacts();
    }
    </script>
    </body>
    </html>
    <?php
