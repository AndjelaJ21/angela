<?php
$hname='localhost';
$uname='root';
$pass='root';
$db='real_estate';


$con= mysqli_connect($hname,$uname,$pass,$db);
if (isset($_POST['add_room'])) {
    $frm_data = filt($_POST);
    $flag = 0;
    $q = "INSERT INTO add_property(city, district,contact,property_type, price, total_rooms, bedroom,living_room,kitchen,bathroom, description) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
    $values = [$frm_data['city'], $frm_data['ds'],$frm_data['cn'], $frm_data['ty'],$frm_data['price'], $frm_data['tr'], $frm_data['br'], $frm_data['lr'],$frm_data['kt'],$frm_data['bt'], $frm_data['desc']];
    if (insert($q, $values, 'siiiiiiiiis')) {
        $flag = 1;
    }
    $room_id = mysqli_insert_id($con);
}
    if (isset($_POST['get_all_rooms'])) {
        $res =mysqli_query($con,"select * from add_property");
        $i = 0;
        $data = "0";
        $row = mysqli_fetch_assoc($res);


            $data .= "
<tr class='align-middle'>
<td>$i</td>
<td>$row[city]</td>
<td>$row[district]</td>
<td>
<span class='badge rounded-pill bg-light text-dark'>Type: $row[property_type]
</span><br>
<span class='badge rounded-pill bg-light text-dark'>Contact: $row[contact]
</span></td>
<td>$row[price] din</td>
<td>$row[total_rooms]</td>
<td>$row[bedroom]</td>
<td>$row[living_room]</td>
<td>$row[kitchen]</td>
<td>$row[bathroom]</td>
<td>$row[description]</td>


</tr>
";
            $i++;
        }
        echo $data;


/*
if (isset($_POST['toggle_status'])) {
    $frm_data = filt($_POST);
    $q = "UPDATE rooms SET status=? WHERE id=?";
    $v = [$frm_data['value'],$frm_data['toggle_status']];

   if(update($q,$v,'ii')){
    echo 1;
   }
   else{
       echo 0;
   }
}
*/

