var myVar;
var del;
function  check(){
	var order = JSON.parse(localStorage.getItem('order_id'));
	 $.ajax({
             type:"post",
             url:"http://localhost/hack/seller/check_payment.php",
             data:"&order_id="+order,
             success:function(data){
                 $("pay").html(data);
                 localStorage.setItem("pay_status",JSON.stringify(data)); 
                 if(data == 'Payment Received'){
                    clearInterval(myVar);
                    document.getElementById('pay').disabled = true;
                 }         
             }
        
         });
}
function  check_del(){
    var order = JSON.parse(localStorage.getItem('order_id'));
     $.ajax({
             type:"post",
             url:"http://localhost/hack/seller/check_delivery.php",
             data:"&order_id="+order,
             success:function(data){
                 $("deliver").html(data);
                 localStorage.setItem("delivery_status",JSON.stringify(data));
                 if(data == 'Delivered'){
                    clearInterval(del);
                    document.getElementById('deliver').disabled = true;
                 }          
             }
        
         });
}
function check_payment(){
	 myVar = setInterval(check,1000);

}
function delivery_ch(){
     del = setInterval(check_del,1000);
}