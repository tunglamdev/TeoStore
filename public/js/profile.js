$(document).ready(function(){
    $(document).on('change', '#file', function(){
        var property = document.getElementById("file").files[0];
        var image_name = property.name;
        var image_extension = image_name.split('.').pop().toLowerCase();
        if(jQuery.inArray(image_extension, ['gif', 'png', 'jpg', 'jpeg']) == -1){
            alert("File ảnh không hợp lệ!");
        }
        else{
            var form_data = new FormData();
            form_data.append("file", property);
            $.ajax({
                url: "http://localhost:81/user/upload",
                method: "POST",
                data: form_data,
                contentType: false,
                cache: false,
                processData: false,
            })
        }
    })
})