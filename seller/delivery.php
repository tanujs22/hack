<?php
include(dirname(__FILE__)."/../config/connect.php");
$order = $_GET['order'];
?>
<html>
<head>
	<title>Proceed to Deliver</title>
	<link href="/hack/static/css/bootstrap.min.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
</head>
<body>
	<p> Order ID : <? echo $order ?> </p>
	<script type="text/javascript">
	var oid = '<?php echo $order ?>';
	localStorage.setItem('order_id',JSON.stringify(oid));
	</script>
	<a href="/hack/product_delivery/index.php?order=<? echo $order ?>" target="_about"><input onclick="verify_del()" class="btn btn-warning" name="send" value="Deliver Product" type="button"></a>
			<br>
			<p>Status: <deliver>Not Delivered</deliver></p>
	<script src="/hack/static/js/delivery.js" type="text/javascript" ></script>
</body>
</html>

