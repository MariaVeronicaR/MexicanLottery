function submit(){
    var e=/[A-Z]/;
    var o=/[a-z]/;
    var a=/[123456789]/;
    var response=0;
    name= document.getElementById('Name').value;
    lastName= document.getElementById('LastName').value;
    userName= document.getElementById('UserName').value;
    email= document.getElementById('Email').value;
    password= document.getElementById('Password').value;
    cardNumber= document.getElementById('CardNumber').value;
    CVV= document.getElementById('CVV').value;

    

    if (name.length>0&&lastName.length>0&&userName.length>0&&email.length>0&&e.test(password)&&a.test(password)&&password.length>=6&&cardNumber.length==18&&CVV.length==3&&!e.test(CVV)&&!o.test(CVV)&&!e.test(cardNumber)&&!o.test(cardNumber)){
        $(document).ready(function(){
            $('#btn').click(function(){
                var datos=$('#form-register').serialize();
                $.ajax({
                    type:"POST",
                    url:"lottery_php/post_register.php",
                    data:datos,
        
                    error: function(xhr, status, error) {
                        alert(xhr.responseText);
                    },
                    success:function(r){
                        if(r==0){
                            alert("Existing user and email");
                        }else if(r==1){
                            alert("Existing user");
                        }else if(r==2){
                            alert("Mail belonging to an existing account");
                        }else if(r==3){
                           
                            alert("Successful registration");
                            window.location="Login.php";
                        }else if(r==4){
                            alert("Server error");
                        }else{
                            alert("Error");

                        }
                        
                    }
                    
                });
        
                return false;
            });
        });
        
    }else{
        alert("No introdujo los datos correctamente");
    }
    
	
}

