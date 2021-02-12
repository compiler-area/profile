<?php 
$con = mysqli_connect('freedb.tech','freedbtech_ahmed_abobakr','ahmedabubakr148@gmail.com');
mysqli_select_db($con, 'freedbtech_SMART');

$id = $_POST['user'];

$s = "SELECT * FROM  users WHERE id = $id ";
$res = mysqli_query($con , $s);
while($ro = mysqli_fetch_assoc($res)) {
    echo $ro['email'] ;
}
?>