    <?php
    isset($_SESSION['SESSION_EMAIL']);
    include('review-engine.php');


    $hname='localhost';
    $uname='root';
    $pass='root';
    $db='real_estate';

    $con= mysqli_connect($hname,$uname,$pass,$db);

    if($con->connect_error){
    echo "Error connecting database";
    }

    ?>

    <!DOCTYPE html>
    <html>
    <head>

    <title>angelaa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    </head>
    <body>

    <div class="bg-light">
    </div>


    <?php


    $property_id=$_GET['property_id'];
    $sql="SELECT * from property where property_id='$property_id'";
    $query=mysqli_query($con,$sql);

    if(mysqli_num_rows($query)>0)
    {
    while($rows=mysqli_fetch_assoc($query)){


    /*
    $sql2="SELECT * FROM property where property_id='$property_id'";
    $query2=mysqli_query($con,$sql2);*/

    $rowcount=mysqli_num_rows($query);
    ?>



    <div class="container-fluid">
    <div class="row">
    <div class="col-sm-6">
    <?php
    require 'all/header.php';
    ?>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="card mb-4 border-0 shadow" role="listbox">
        <div class="container-fluid px-lg-4 mt-4">
            <!-- Swiper -->
            <div class="swiper swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="images/<?= $rows['picture'] ?>" class="w-100 d-block"  style="width: 100%; height: 100%;"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/<?= $rows['picture1'] ?>" class="w-100 d-block" style="width: 100%; height: 100%;"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/<?= $rows['picture2'] ?>" class="w-100 d-block" style="width: 100%;height: 100%;"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/<?= $rows['picture3'] ?>" class="w-100 d-block" style="width: 100%;height: 100%;" />
                    </div>
                </div>
            </div>
        </div>
         <script>
            var swiper = new Swiper(".swiper-container", {
                spaceBetween: 30,
                effect: "fade",
                loop:true,
                autoplay:{delay:3500, disableOnInteraction:false,}
            });
        </script>
       <!-- <div class="item active">

        <img src="images/<php?= $rows['picture'] ?>" style='height: 100%; width: 100%'>
        </div>
        <div class="item">
        <img src="images/<php?= $rows['picture'] ?>" style='height: 100%; width: 100%'>
        </div>-->
        <?php
    /*

    for($i=1;$i<=$rowcount;$i++)
    {
    $row=mysqli_fetch_array($query);
    $photo=$row['picture'];
    ?>

    <?php
    if($i==1)
    {
    ?>
    <div class="item active">
    <img class="d-block img-fluid" src="images/<?php echo $photo ?>" alt="First slide" width="100$" style="max-height: 600px; min-height: 600px;">
    </div>
    <?php
    }
    else
    {
    ?>
    <div class="item">
    <img class="d-block img-fluid" src="images/<?php echo $photo ?>" alt="First slide" width="100%" style="max-height: 600px; min-height: 600px;">
    </div>

    <?php
    }
    }
    */
    ?>

    </div>



    </div>

    </div>

    <div class="col-sm-6">
    <center><h3 style="color: #3b3663; text-decoration: underline"><?php echo $rows['property_type'] ?></h3></center>
    <div class="row">
    <div class="col-sm-6">

    <div class="row">
    <div class="col-sm-6">
    <table>

    <tr>
    <td><h3>City:</h3></td>
    <td><h4><?php echo $rows['city']; ?></h4></td>
    </tr>
    <tr>
    <td><h3>District:</h3></td>
    <td><h4><?php echo $rows['district']; ?></h4></td>
    </tr>
        <td><h3>Street:</h3></td>
        <td><h4><?php echo $rows['street']; ?></h4></td>
        </tr>
    <tr>
    <td><h3>Contact No.:</h3></td>
    <td><h4><?php echo $rows['contact']; ?></h4></td>
    </tr>
    <tr>
    <td><h3>Estimated Price:</h3></td>
    <td><h4><?php echo $rows['price']; ?>e</h4></td>
    </tr>
    </table>
    </div>
    </div>
    </div>

    <div class="col-sm-6">
    <table>
    <tr>
    <td><h3>Total Rooms:</h3></td>
    <td><h4><?php echo $rows['total_rooms']; ?></h4></td>
    </tr>
    <tr>
    <td><h3>Bedrooms:</h3></td>
    <td><h4><?php echo $rows['bedroom']; ?></h4></td>
    </tr>
    <tr>
    <td><h3>Living Room:</h3></td>
    <td><h4><?php echo $rows['living_room']; ?></h4></td>
    </tr>
    <tr>
    <td><h3>Kitchen:</h3></td>
    <td><h4><?php echo $rows['kitchen']; ?></h4></td>
    </tr>
    <tr>
    <td><h3>Bathroom:</h3></td>
    <td><h4><?php echo $rows['bathroom']; ?></h4></td>
    </tr>
    <tr>
    <td><h3>Booked:</h3></td>
    <td><h4><?php echo $rows['booked']; ?></h4></td>
    </tr>
    <tr>
    <td><h3>Description:</h3></td>
    <td><h4><?php echo $rows['description']; ?></h4></td>
    </tr>
    </table>
    </div>
    </div>

    </div>


    <br>

    <?php

    if(isset($_SESSION["logged_on"]) && !empty($_SESSION['logged_on'])){

    ?>

    <form method="POST">
    <div class="row">
    <div class="col-sm-6">
    <?php
    $booked=$rows['booked'];

    if ($booked=='No'){ ?>
    <input type="hidden" name="property_id" value="<?php echo $rows['property_id']; ?>">
    <input type="submit" class="btn btn-lg btn-primary" name="book_property" style="width: 100%" value="Book Property">

    <?php
    if(isset($_POST['book_property'])){

    global $con,$property_id;
    $u_email=$_SESSION['SESSION_EMAIL'];

    $property_id=$_GET['property_id'];

    $sql="SELECT * FROM tenant where email='{$u_email}'";
    $query=mysqli_query($con,$sql);

    if(mysqli_num_rows($query)>0)
    {
        while ($rows=mysqli_fetch_assoc($query)) {
            $tenant_id=$rows['tenant_id'];


            $sql1="UPDATE property SET booked='Yes' WHERE property_id='{$property_id}'";
            $query1=mysqli_query($con,$sql1);

            $sql2="INSERT INTO booking(property_id,tenant_id) VALUES ('{$property_id}','{$tenant_id}')";
            $query2=mysqli_query($con,$sql2);

            if($query2)
            {

                $email=$rows['email'];
                $msg="Thankyou Mr/Ms ".$rows['full_name']." for booking Property. Please visit the property location to view it personally.";
                $recipient=$email;
                $subject="Property Booked";
                $mailheaders="From: RentHouse\n";

                //mail send
                mail($recipient,$subject,$msg,$mailheaders);

                ?>


                <style>
                    .alert {
                        padding: 20px;
                        background-color: #DC143C;
                        color: white;
                    }

                    .closebtn {
                        margin-left: 15px;
                        color: white;
                        font-weight: bold;
                        float: right;
                        font-size: 22px;
                        line-height: 20px;
                        cursor: pointer;
                        transition: 0.3s;
                    }

                    .closebtn:hover {
                        color: black;
                    }
                </style>
                <script>
                    window.setTimeout(function() {
                        $(".alert").fadeTo(1000, 0).slideUp(500, function(){
                            $(this).remove();
                        });
                    }, 2000);
                </script>
                <div class="container">
                    <div class="alert" role='alert'>
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        <center><strong>Thankyou for booking this property.</strong></center>
                    </div></div>



                <?php
                }


                }

            }

        }




    }

    else { ?>
    <input type="submit" class="btn btn-lg btn-primary" style="width: 100%" value="Property Booked" disabled>
    <?php } ?>
    </div>
    </form>
    <form method="POST" action="chatpage.php">
    <div class="col-sm-6">
    <input type="hidden" name="owner_id" value="<?php echo $rows['id']; ?>">
    <input type="submit" class="btn btn-lg btn-success" name="send_message" style="width: 100%" value="Send Message" >

    </div>
    </form>
    </div>

    <?php }
    else{
    echo "<center><h3>You should login to book property.</h3></center>";
    }
    ?>
    <?php
    /*
    if(isset($_SESSION["logged_in"]) && !empty($_SESSION['logged_in'])){
    echo "<center><h3>You should login as tenant to book property.</h3></center>";}*/
    ?>


    <br>
    <div id="map" style="width: 100%; height: 300px;">
    </div>
    <br>


    <?php }} ?>
    </div>


    <div class="container-fluid">
    <h2>Review Property:</h2>
    <div class="well well-sm">
    <div class="text-right">
    <?php

    if(isset($_SESSION["logged_on"]) && !empty($_SESSION['logged_on'])){
    ?>
    <a class="btn btn-success btn-info" href="#reviews-anchor" style="width: 100%" id="open-review-box">Leave a Review</a>
    </div>

    <div class="row" id="post-review-box" style="display:none;">
    <div class="col-md-12">
    <form accept-charset="UTF-8" method="POST">
    <input name="property_id" type="hidden" value="<?php echo $property_id; ?>">
    <input id="ratings-hidden" name="rating" type="hidden">
    <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." rows="5"></textarea>

    <div class="text-right">
    <div class="stars starrr" data-rating="0"></div>
    <a class="btn btn-danger btn-sm" href="#" id="close-review-box" style="display:none; margin-right: 10px;">
    <span class="glyphicon glyphicon-remove"></span>Cancel</a>
    <button class="btn btn-success btn-lg" type="submit" name="review">Save</button>
    </div>
    </form>
    </div>
    </div>
    <?php }
    else{
    echo "<center>You should login to review property.</center>";
    }
    ?>


    </div>

    </div>


    <?php

    $sql1="SELECT * from revieww where property_id='$property_id'";
    $query=mysqli_query($con,$sql1);
    echo '<div class="container-fluid">';
    echo '<h3>Reviews:</h3>';
    echo '</div>';
    if(mysqli_num_rows($query)>0)

    {
    while($row=mysqli_fetch_assoc($query)){
    ?>
    <div class="container-fluid">
    <ul><li><?php echo $row['comment']; ?> &nbsp;&nbsp;&nbsp;(<span class="glyphicon glyphicon-star-empty" style="size: 50px;"><?php echo $row['rating']; ?></span>)</li></ul>
    </div>


    <?php
    }
    }
    ?>
    <br><br>



    </body>
    </html>





    <style>
    h3 {
    font-size: 20px;
    }

    h4  {
    font-size: 20px;
    }

    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }

    td, th {
    text-align: left;
    padding: 1px;
    }
    </style>

    <style>
    .animated {
    -webkit-transition: height 0.2s;
    -moz-transition: height 0.2s;
    transition: height 0.2s;
    }

    .stars
    {
    margin: 20px 0;
    font-size: 24px;
    color: #d17581;
    }
    </style>

    <script>
    (function(e){var t,o={className:"autosizejs",append:"",callback:!1,resizeDelay:10},i='<textarea tabindex="-1" style="position:absolute; top:-999px; left:0; right:auto; bottom:auto; border:0; padding: 0; -moz-box-sizing:content-box; -webkit-box-sizing:content-box; box-sizing:content-box; word-wrap:break-word; height:0 !important; min-height:0 !important; overflow:hidden; transition:none; -webkit-transition:none; -moz-transition:none;"/>',n=["fontFamily","fontSize","fontWeight","fontStyle","letterSpacing","textTransform","wordSpacing","textIndent"],s=e(i).data("autosize",!0)[0];s.style.lineHeight="99px","99px"===e(s).css("lineHeight")&&n.push("lineHeight"),s.style.lineHeight="",e.fn.autosize=function(i){return this.length?(i=e.extend({},o,i||{}),s.parentNode!==document.body&&e(document.body).append(s),this.each(function(){function o(){var t,o;"getComputedStyle"in window?(t=window.getComputedStyle(u,null),o=u.getBoundingClientRect().width,e.each(["paddingLeft","paddingRight","borderLeftWidth","borderRightWidth"],function(e,i){o-=parseInt(t[i],10)}),s.style.width=o+"px"):s.style.width=Math.max(p.width(),0)+"px"}function a(){var a={};if(t=u,s.className=i.className,d=parseInt(p.css("maxHeight"),10),e.each(n,function(e,t){a[t]=p.css(t)}),e(s).css(a),o(),window.chrome){var r=u.style.width;u.style.width="0px",u.offsetWidth,u.style.width=r}}function r(){var e,n;t!==u?a():o(),s.value=u.value+i.append,s.style.overflowY=u.style.overflowY,n=parseInt(u.style.height,10),s.scrollTop=0,s.scrollTop=9e4,e=s.scrollTop,d&&e>d?(u.style.overflowY="scroll",e=d):(u.style.overflowY="hidden",c>e&&(e=c)),e+=w,n!==e&&(u.style.height=e+"px",f&&i.callback.call(u,u))}function l(){clearTimeout(h),h=setTimeout(function(){var e=p.width();e!==g&&(g=e,r())},parseInt(i.resizeDelay,10))}var d,c,h,u=this,p=e(u),w=0,f=e.isFunction(i.callback),z={height:u.style.height,overflow:u.style.overflow,overflowY:u.style.overflowY,wordWrap:u.style.wordWrap,resize:u.style.resize},g=p.width();p.data("autosize")||(p.data("autosize",!0),("border-box"===p.css("box-sizing")||"border-box"===p.css("-moz-box-sizing")||"border-box"===p.css("-webkit-box-sizing"))&&(w=p.outerHeight()-p.height()),c=Math.max(parseInt(p.css("minHeight"),10)-w||0,p.height()),p.css({overflow:"hidden",overflowY:"hidden",wordWrap:"break-word",resize:"none"===p.css("resize")||"vertical"===p.css("resize")?"none":"horizontal"}),"onpropertychange"in u?"oninput"in u?p.on("input.autosize keyup.autosize",r):p.on("propertychange.autosize",function(){"value"===event.propertyName&&r()}):p.on("input.autosize",r),i.resizeDelay!==!1&&e(window).on("resize.autosize",l),p.on("autosize.resize",r),p.on("autosize.resizeIncludeStyle",function(){t=null,r()}),p.on("autosize.destroy",function(){t=null,clearTimeout(h),e(window).off("resize",l),p.off("autosize").off(".autosize").css(z).removeData("autosize")}),r())})):this}})(window.jQuery||window.$);

    var __slice=[].slice;(function(e,t){var n;n=function(){function t(t,n){var r,i,s,o=this;this.options=e.extend({},this.defaults,n);this.$el=t;s=this.defaults;for(r in s){i=s[r];if(this.$el.data(r)!=null){this.options[r]=this.$el.data(r)}}this.createStars();this.syncRating();this.$el.on("mouseover.starrr","span",function(e){return o.syncRating(o.$el.find("span").index(e.currentTarget)+1)});this.$el.on("mouseout.starrr",function(){return o.syncRating()});this.$el.on("click.starrr","span",function(e){return o.setRating(o.$el.find("span").index(e.currentTarget)+1)});this.$el.on("starrr:change",this.options.change)}t.prototype.defaults={rating:void 0,numStars:5,change:function(e,t){}};t.prototype.createStars=function(){var e,t,n;n=[];for(e=1,t=this.options.numStars;1<=t?e<=t:e>=t;1<=t?e++:e--){n.push(this.$el.append("<span class='glyphicon .glyphicon-star-empty'></span>"))}return n};t.prototype.setRating=function(e){if(this.options.rating===e){e=void 0}this.options.rating=e;this.syncRating();return this.$el.trigger("starrr:change",e)};t.prototype.syncRating=function(e){var t,n,r,i;e||(e=this.options.rating);if(e){for(t=n=0,i=e-1;0<=i?n<=i:n>=i;t=0<=i?++n:--n){this.$el.find("span").eq(t).removeClass("glyphicon-star-empty").addClass("glyphicon-star")}}if(e&&e<5){for(t=r=e;e<=4?r<=4:r>=4;t=e<=4?++r:--r){this.$el.find("span").eq(t).removeClass("glyphicon-star").addClass("glyphicon-star-empty")}}if(!e){return this.$el.find("span").removeClass("glyphicon-star").addClass("glyphicon-star-empty")}};return t}();return e.fn.extend({starrr:function(){var t,r;r=arguments[0],t=2<=arguments.length?__slice.call(arguments,1):[];return this.each(function(){var i;i=e(this).data("star-rating");if(!i){e(this).data("star-rating",i=new n(e(this),r))}if(typeof r==="string"){return i[r].apply(i,t)}})}})})(window.jQuery,window);$(function(){return $(".starrr").starrr()})

    $(function(){

    $('#new-review').autosize({append: "\n"});

    var reviewBox = $('#post-review-box');
    var newReview = $('#new-review');
    var openReviewBtn = $('#open-review-box');
    var closeReviewBtn = $('#close-review-box');
    var ratingsField = $('#ratings-hidden');

    openReviewBtn.click(function(e)
    {
    reviewBox.slideDown(400, function()
    {
    $('#new-review').trigger('autosize.resize');
    newReview.focus();
    });
    openReviewBtn.fadeOut(100);
    closeReviewBtn.show();
    });

    closeReviewBtn.click(function(e)
    {
    e.preventDefault();
    reviewBox.slideUp(300, function()
    {
    newReview.focus();
    openReviewBtn.fadeIn(200);
    });
    closeReviewBtn.hide();

    });

    $('.starrr').on('starrr:change', function(e, value){
    ratingsField.val(value);
    });
    });
    </script>
