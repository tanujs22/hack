<?php
include(dirname(__FILE__)."/../config/connect.php");
$order = $_POST['order_id'];
$query = "UPDATE `payment` SET `payment`='1' WHERE `order_id`= '$order'";
$result = mysqli_query($conn,$query);
if($result){
	echo 'Yes';
}
else{
	echo "Error!";
}

?>