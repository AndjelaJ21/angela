<?php
require ('../inc/db_config.php');
require ('../inc/essentials.php');
$hname='localhost';
$uname='angel';
$pass='lcKEOOoTbHwiRed';
$db='angel';


$con= mysqli_connect($hname,$uname,$pass,$db);
adminLogin();

if (isset($_POST['get_users'])) {
$res =mysqli_query($con,"select * from users");
$i = 1;

$data = "";
while ($row = mysqli_fetch_assoc($res)) {
$del_btn="<button type='button' onclick='remove_user($row[id])' class='btn btn-danger btn-sm shadow-none'><i class='bi bi-trash'></i></button>";
$verified="<span class='badge bg-warning'><i class='bi bi-x-lg'></i></span>";

if ($row['code']){
$verified="<span class='badge bg-success'><i class='bi bi-check-lg'></i></span>";
$del_btn="";
}
$status= "<button onclick='toggle_status($row[id],0)' class='btn btn-dark btn-sm shadow-none'>active</button>";
if (!$row['status']){
$status= "<button onclick='toggle_status($row[id],1)' class='btn btn-danger btn-sm shadow-none'>inactive</button>";

}

$data .= "
<tr>
 <td>$i</td>
  <td>$row[name]</td>
   <td>$row[email]</td>
     <td>$row[code]</td>                           
<td>$verified</td>
     <td>$status</td>
     <td>$del_btn </td>


     </tr>
   ";
 $i++;
}
echo $data;
}


if (isset($_POST['toggle_status'])) {
$frm_data = filt($_POST);
$q = "UPDATE users SET status=? WHERE id=?";
$v = [$frm_data['value'],$frm_data['toggle_status']];

if(update($q,$v,'ii')){
echo 1;
}
else{
echo 0;
}
}

if (isset($_POST['remove_user'])) {
$frm_data = filt($_POST);
$q = "UPDATE users SET status=? WHERE id=?";
$v = [$frm_data['value'],$frm_data['toggle_status']];

if(update($q,$v,'ii')){
echo 1;
}
else{
echo 0;
}
}



