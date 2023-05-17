<?php 
    include_once("conn.php");

    
    include("login1.php");
    ?>
    
<html>
    <head>
        <title>Admin Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    <style>
        body  
{  
    margin: 0;  
    padding: 0;  
    background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url("login.jpg");  
    font-family: 'Arial';  
    background-size: cover;
}  
* {
    margin:0;
}
h1{
    color: rgb(255, 255, 255);
    padding: 30PX;
    font-size: 50px;
}

.layout{  
        width: 310px;  
        height:240px;
        overflow: hidden;  
        margin: auto;  
         
        padding: 30px;  
        background:rgb(255, 255, 255);
        border-radius: 2px ;  
        
          
}  

 
#User{ 
    background: rgba(255,255,255);
    width: 300px;  
    height: 45px;  
    border:none;
    border-radius: 3px;  
    padding-left: 8px;  
    
}  
#Pass{ 
    background: rgba(255,255,255); 
    width: 300px;  
    height: 45px;  
    border:none;
    border-radius: 3px;  
    padding-left: 8px;  
      
}  
#btn{  
    width: 100px;  
    text-align: center;
    height: 30px;  
    border: none;  
    background-color: rgb(35, 100, 204);
    border-radius:5px;  
    padding-left: 7px;  
    color: rgb(255, 255, 255);  
    margin: auto; 
    text-align: center;
    cursor: pointer;
}
   
 a{
    border-radius: 10px ;
 }




    </style>
    <body>
    
        
        <div id="form">
            <h1 align = "center">SEGORA FOODS</h1>
            <br><br><br><br><br><br><br>
            <div class = "layout">
            <form name="form" action="login1.php" onsubmit="return isvalid()" method="POST">
            <center><h2>ADMIN-Login</h2></center><br>
                <label>Username: </label>
                <input type="text" id="user" name="user"><hr><br>
                <label>Password: </label>
                <input type="password" id="pass" name="pass"><hr><br><br>
                <center><input type="submit" id="btn" value="Login" name = "submit"/></center>
               
            </form>
            </div>
        </div>
        <script>
        
            function isvalid(){
                let user = document.form.user.value;
                let pass = document.form.pass.value;
                if(user.length=="" && pass.length==""){
                    alert(" Username and password field is empty!!!");
                    return false;
                }
                else if(user.length==""){
                    alert(" Username field is empty!!!");
                    return false;
                }
                else if(pass.length==""){
                    alert(" Password field is empty!!!");
                    return false;
                }
                
            }
            
        </script>
    </body>
</html>