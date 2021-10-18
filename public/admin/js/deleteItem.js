function deleteItem(id_vege){
    var check = confirm('Bạn chắc chắn muốn xóa sản phẩm này?');
    if(check==true){
        var documentRoot = document.getElementById("documentRootId").innerText;
        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function(){
            
            if(this.readyState==4 && this.status==200){

                var reponse = this.response;

                if(reponse==true){ 
                    window.location.reload(false);
                    alert("Đã xóa!");
                }
                else{
                    alert("Không thể xóa!");
                }
            }
        }
        xhttp.open("GET", `${documentRoot}/admin/products/delete?vegeId=${id_vege}`, true);
        xhttp.send();
    }
}
