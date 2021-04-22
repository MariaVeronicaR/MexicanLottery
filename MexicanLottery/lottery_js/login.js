function submit(){
   
    $(document).ready(function(){
        $('#btn').click(function(){
            var datos=$('#form-login').serialize();
            $.ajax({
                type:"POST",
                url:"lottery_php/post_login.php",
                data:datos,
    
                error: function(xhr, status, error) {
                    alert(xhr.responseText);
                },
                success:function(r){
                    if(r==0){
                        var username= document.getElementById('Username').value;
                        sessionStorage.setItem("user",username);
                        window.location="Lottery.php";
                    }else if(r==1){
                        alert("Incorrect password");
                    }else if(r==2){
                        alert("Non-existent user");
                    }else{
                        alert("Error");
                    }
                    
                }
                
            });
    
            return false;
        });
    });
}