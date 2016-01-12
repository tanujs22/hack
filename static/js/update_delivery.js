function delivery(){

	var order = JSON.parse(localStorage.getItem('order_id'));
	 $.ajax({
             type:"post",
             url:"http://localhost/hack/product_delivery/update_delivery.php",
             data:"&order_id="+order,
             success:function(data){
                 $("deliver").html(data);
                 document.getElementById('dl').disabled = true;
                           
             }
        
         });

}