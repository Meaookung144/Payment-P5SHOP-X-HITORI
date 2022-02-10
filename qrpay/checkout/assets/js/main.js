$(document).ready(function(){
    $("#logout").on("click", function(){
        $.ajax({
            type: "POST",
            url: "service/logout.php",
            data: {
                logout: true
            },
            success: function(data){
                if(data == "success"){
                    Swal.fire({
                        icon: 'success',
                        title: 'สำเร็จ',
                        text: "ออกจากระบบสำเร็จ"
                    }).then(() => {
                        window.location = "./";
                    })
                }
            }
        })
    })
})



