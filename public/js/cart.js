//Add vege to cart
function addToCart(id_user, id_vege){
    //Check login
    if(id_user==0){
        launch_toast_no("Vui lòng đăng nhập!");
        return;
    }

    //Get url of server to run 'localhost:81/cart/add...'
    var documentRoot = document.getElementById("documentRootId").innerText;
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200){

            //Get result from function add() in CartController
            var reponse = JSON.parse(this.response);

            if(reponse.isSuccess){//Adding is successful
                launch_toast_yes("Đã thêm vào giỏ hàng!");
            }
            else{//Adding is failed
                launch_toast_no("Không thể thêm vào giỏ!");
            }
        }
    }

    //Call funtion add() in CartController
    xhttp.open("GET", `${documentRoot}/cart/add?userId=${id_user}&vegeId=${id_vege}`, true);
    xhttp.send();
}

//Add vege to cart
function addToCartInDetail(id_user, id_vege, id_amount){
    //Check login
    if(id_user==0){
        launch_toast_no("Vui lòng đăng nhập!");
        return;
    }
    var num = id_amount.value;
    console.log(num);
    //Get url of server to run 'localhost:81/cart/add...'
    var documentRoot = document.getElementById("documentRootId").innerText;
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200){

            //Get result from function add() in CartController
            var reponse = JSON.parse(this.response);

            if(reponse.isSuccess){//Adding is successful
                launch_toast_yes("Đã thêm vào giỏ hàng!");
            }
            else{//Adding is failed
                launch_toast_no("Không thể thêm vào giỏ!");
            }
        }
    }

    //Call funtion add() in CartController
    xhttp.open("GET", `${documentRoot}/cart/add?userId=${id_user}&vegeId=${id_vege}&amount=${num}`, true);
    xhttp.send();
}

function updateValue(id){
    console.log(id.value);
}

//Show message that adding cakes to cart is successful
function launch_toast_yes(message) {
    var x = document.getElementById("toast-yes")
    document.getElementById("toast-yes-desc").innerText = message;
    x.className = "show";
    setTimeout(function(){ 
        x.className = x.className.replace("show", ""); 
    }, 5000);
}

//Show message that adding cakes to cart is failed
function launch_toast_no(message) {
    var x = document.getElementById("toast-no")
    document.getElementById("toast-no-desc").innerText = message;
    x.className = "show";
    setTimeout(function(){ 
        x.className = x.className.replace("show", ""); 
    }, 5000);
}

function deleteItem(id_user, id_vege){
    var check = confirm('Bạn chắc chắn muốn xóa sản phẩm này?');
    if(check==true){
        var documentRoot = document.getElementById("documentRootId").innerText;
        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function(){
            
            if(this.readyState==4 && this.status==200){

                var reponse = this.response;

                if(reponse==true){ 
                    window.location.reload(false);
                }
                else{
                    alert("Không thể xóa!");
                }
            }
        }
        xhttp.open("GET", `${documentRoot}/cart/delete?userId=${id_user}&vegeId=${id_vege}`, true);
        xhttp.send();
    }
}

function updateQuantity(id_user, id_vege, current_num){
    var documentRoot = document.getElementById("documentRootId").innerText;
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function(){
        
        if(this.readyState==4 && this.status==200){

            var reponse = this.response;

            if(reponse==true){
                window.location.reload(false);
            }
            else{
                alert("Không thể thay đổi số lượng!");
            }
        }
    }
    xhttp.open("GET", `${documentRoot}/cart/quantity?userId=${id_user}&vegeId=${id_vege}&num=${current_num}`, true);
    xhttp.send();
}

function book(id_user){
    alert("Kiểm tra lại thông tin đặt chính là thông tin của tài khoản này!")
    var check = confirm('Bạn có muốn đặt đơn hàng này?');
        if(check==true){
        var documentRoot = document.getElementById("documentRootId").innerText;
        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function(){
            
            if(this.readyState==4 && this.status==200){

                var reponse = this.response;

                if(reponse==true){
                    window.location.reload(false);
                    alert("Đã đặt hàng thành công! Xem thông tin đơn hàng trong mục Cá nhân.");
                }
                else{
                    alert("Không thể đặt hàng!");
                }
            }
        }
        xhttp.open("GET", `${documentRoot}/cart/order?userId=${id_user}`, true);
        xhttp.send();
    }
}
