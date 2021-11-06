function updateOrderStatus(order_id, order_status){
    var check = confirm('Bạn chắc chắn muốn cập nhật trạng thái đơn hàng này?');
    if(check==true){
        var documentRoot = document.getElementById("documentRootId").innerText;
        var xhttp = new XMLHttpRequest();
        var status = order_status.value;
        console.log(status);
        xhttp.onreadystatechange = function(){
            
            if(this.readyState==4 && this.status==200){

                var reponse = this.response;

                if(reponse==true){
                    window.location.reload(false);
                    alert("Đã cập nhật trạng thái đơn hàng thành công!");
                }
                else{
                    alert("Không thể cập nhật trạng thái đơn hàng!");
                }
            }
        }
        xhttp.open("GET", `${documentRoot}/admin/orders/update?orderId=${order_id}&statusId=${status}`, true);
        xhttp.send();
    }
}