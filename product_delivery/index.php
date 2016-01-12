<?php
include(dirname(__FILE__)."/../config/connect.php");
$order = $_GET['order'];
$query = "INSERT INTO `delivery`(`order_id`) VALUES ('$order')";
mysqli_query($conn,$query);
?>
<html>
<head>
	<title>Product Delivery</title>
	<link href="/hack/static/css/bootstrap.min.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
</head>
<body>
	<p> Order ID : <? echo $order ?> </p>
	<script type="text/javascript">
	var oid = '<?php echo $order ?>';
	localStorage.setItem('order_id',JSON.stringify(oid));
	</script>
	<input onclick="delivery()" class="btn btn-success" name="send" id="dl" value="Product Delivered" type="button">
	<br>
	<p>Product Delivery Status: <deliver>Not Delivered<deliver></p>
	<script type="text/javascript" src="/hack/static/js/update_delivery.js"></script>
</body>
</html>

