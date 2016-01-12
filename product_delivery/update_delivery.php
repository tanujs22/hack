<?php
include(dirname(__FILE__)."/../config/connect.php");
$order = $_POST['order_id'];
$query = "UPDATE `delivery` SET `delivery`= '1' WHERE `order_id` = '$order'";
$result = mysqli_query($conn,$query);
if($result){
	echo 'Delivered';
}
else{
	echo 'Not Delivered';
}
?>