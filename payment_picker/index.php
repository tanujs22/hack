<?php
include(dirname(__FILE__)."/../config/connect.php");
$order = $_GET['order'];
$query = "INSERT INTO `payment`(`order_id`) VALUES ('$order')";
mysqli_query($conn,$query);
?>
<html>
<head>
	<title>Payment Picker</title>
	<link href="/hack/static/css/bootstrap.min.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
</head>
<body>
	<p> Order ID : <? echo $order ?> </p>
	<script type="text/javascript">
	var oid = '<?php echo $order ?>';
	localStorage.setItem('order_id',JSON.stringify(oid));
	</script>
	<input onclick="update()" class="btn btn-success" name="got" id="mn" value="Money Received" type="button"></a>
	<br>
	<p>Payment Received: <update>No<update>
	<script type="text/javascript" src="/hack/static/js/update_payment.js"></script>
</body>
</html>

