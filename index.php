<?php   include "connection.php";  ?> 

<html>  
<head>  
    <title>Login System</title>  
</head> 

<style>
body{   
    background: #eee;  
}  
#frm{  
    border: solid gray 1px;  
    width:25%;  
    border-radius: 2px;  
    margin: 120px auto;  
    background: white;  
    padding: 50px;  
}  
#btn{  
    color: #fff;  
    background: #337ab7;  
    padding: 7px;  
    margin-left: 70%;  
}  
</style>

<body>  
    <div id = "frm">  
        <h1>Login</h1>  
        <form name="username" action ="login.php" method = "POST">  
            <p>  
                <label> UserName: </label>  
                <input type = "text" id ="user" name  = "user" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="pass" name  = "pass" />  
            </p>  
            <p>     
                <input type =  "submit" id = "btn"  name = "login" />  
            </p>  
        </form>  
    </div>
</body>  

</html>  



