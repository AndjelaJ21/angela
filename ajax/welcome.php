<?php

require ('adm/inc/db_config.php');
require ('adm/inc/essentials.php');
userLogin();


if(isset($_POST['get_general']))
{
    $q="select * from welcome where id=?";
    $values=[1];
    $res=select($q,$values,"i");
    $data=mysqli_fetch_assoc($res);
    $json_data=json_encode($data);
    echo $json_data;
}

if(isset($_POST['upd_general']))
{
    $frm_data=filt($_POST);

    $q= "UPDATE welcome SET site_name=?,site_phone=? WHERE id=?";
    $values=[$frm_data['site_name'],$frm_data['site_phone'],1];
    $res=update($q,$values,'ssi');
    echo $res;

}


?>
