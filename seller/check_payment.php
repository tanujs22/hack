<?php
include(dirname(__FILE__)."/../config/connect.php");
$order = $_POST['order_id'];
$query = "SELECT `payment` FROM `payment` WHERE `order_id` = '$order'";
$result = mysqli_query($conn,$query);
$r = mysqli_fetch_assoc($result);
$rt = $r['payment'];
if ($rt == 1){
	echo 'Payment Received';
}
else{
	echo 'Payment Pending';
}
?>