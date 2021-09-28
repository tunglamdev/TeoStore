//Add cake to cart
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

//Show message that adding cakes to cart is successful or failed
function launch_toast_yes(message) {
    var x = document.getElementById("toast-yes")
    document.getElementById("toast-yes-desc").innerText = message;
    x.className = "show";
    setTimeout(function(){ 
        x.className = x.className.replace("show", ""); 
    }, 5000);
}

function launch_toast_no(message) {
    var x = document.getElementById("toast-no")
    document.getElementById("toast-no-desc").innerText = message;
    x.className = "show";
    setTimeout(function(){ 
        x.className = x.className.replace("show", ""); 
    }, 5000);
}