<?php
include(dirname(__FILE__)."/../config/connect.php");
$order = $_POST['order_id'];
$query = "SELECT delivery FROM `delivery` WHERE `order_id` ='$order'";
$result = mysqli_query($conn,$query);
$r = mysqli_fetch_assoc($result);
$rt = $r['delivery'];
if ($rt == 1){
	echo 'Delivered';
}
else{
	echo 'Not Delivered';
}
?>