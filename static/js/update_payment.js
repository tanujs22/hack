function update(){

	var order = JSON.parse(localStorage.getItem('order_id'));
	 $.ajax({
             type:"post",
             url:"http://localhost/hack/payment_picker/update_payment.php",
             data:"&order_id="+order,
             success:function(data){
                 $("update").html(data);
                 document.getElementById('mn').disabled = true;
                           
             }
        
         });

}