<?php

require ('../inc/db_config.php');
require ('../inc/essentials.php');
adminLogin();


if(isset($_POST['get_general']))
{
    $q="select * from setu where id=?";
    $values=[1];
    $res=select($q,$values,"i");
    $data=mysqli_fetch_assoc($res);
    $json_data=json_encode($data);
    echo $json_data;
}

if(isset($_POST['upd_general']))
{
    $frm_data=filt($_POST);

    $q= "UPDATE setu SET site_title=?,site_about=? WHERE id=?";
    $values=[$frm_data['site_title'],$frm_data['site_about'],1];
    $res=update($q,$values,'ssi');
    echo $res;

}

if(isset($_POST['upd_shutdown']))
{
    $frm_data=($_POST['upd_shutdown']==0) ? 1 : 0;

    $q= "UPDATE settings SET shutdown=? WHERE id=?";
    $values=[$frm_data,1];
    $res=update($q,$values,'ii');
    echo $res;

}

if(isset($_POST['get_contacts']))
{
    $q="select * from contact where id=?";
    $values=[1];
    $res=select($q,$values,"i");
    $data=mysqli_fetch_assoc($res);
    $json_data=json_encode($data);
    echo $json_data;
}

if(isset($_POST['upd_contacts']))
{
    $frm_data=filt($_POST);

    $q= "UPDATE contact SET address=?,gmap=?,pn1=?,email=?,fb=?,insta=?,tw=?,iframe=? WHERE id=?";
    $values=[$frm_data['address'],$frm_data['gmap'],$frm_data['pn1'],$frm_data['email'],$frm_data['fb'],$frm_data['insta'],$frm_data['tw'],$frm_data['iframe'],1];
    $res=update($q,$values,'ssssssssi');
    echo $res;

}

/*if(isset($_POST['add_lg'])){
    $frm_data=filt($_POST);
   $img_r= uploadImage($_FILES['picture'],CAROUSEL_FOLDER);
   if ($img_r=='inv_img'){
       echo $img_r;
   }
   else if ($img_r=='inv_size'){
       echo  $img_r;
   }
   else if ($img_r == 'upd_failed'){
       echo $img_r;
   }
   else {
$q="INSERT INTO team( name, picture) VALUES (?,?)";
$values=[$frm_data['name'],$img_r];
$res=insert($q,$values,'ss');
echo $res;
   }
}*/

?>
