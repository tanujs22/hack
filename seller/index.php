<?php
include(dirname(__FILE__)."/../config/connect.php");
$order = $_POST['order'];
$name = $_POST['name'];
$add = $_POST['add'];
$phone = $_POST['mobile'];

$query = "INSERT INTO `order_details`(`order_id`, `adress`, `name`, `phone`) VALUES ('$order','$name','$add','$phone')";
mysqli_query($conn,$query);
?>
<html>
<head>
	<title>Seller Portal</title>
	<link href="/hack/static/css/bootstrap.min.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
</head>
<body onload="check(),check_del()">
	<p> Order ID : <? echo $order ?> </p>
	<script type="text/javascript">
	var oid = '<?php echo $order ?>';
	localStorage.setItem('order_id',JSON.stringify(oid));
	</script>
	<div class="container">
		<div class="payment">
			<a href="/hack/payment_picker/index.php?order=<? echo $order ?>" target="_about"><input onclick="check_payment()" class="btn btn-success" name="get" id="pay" value="Fetch Money" type="button"></a>
			<br>
			<p>Status: <pay>Payment Pending</pay></p>
		</div>
	</div>
	<hr>
	<div class="container">
		<div class="delivery">
			<a href="/hack/product_delivery/index.php?order=<? echo $order ?>" target="_about"><input onclick="delivery_ch()" class="btn btn-warning" name="send" id="deliver" value="Deliver Product" type="button"></a>
			<br>
			<p>Status: <deliver>Not Delivered</deliver></p>
		</div>
	</div>
	<script src="/hack/static/js/routine.js" type="text/javascript"></script>
</body>
</html>