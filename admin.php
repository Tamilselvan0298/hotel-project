<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <style>
        .login
        {
            width: 350px;
            height: 300px;
            border:1px solid black;
            border-radius: 20px;
            padding: 20px;
            position: relative;
            top:150px;
            left: 450px;
            padding-top: 20px;
            backdrop-filter: blur(2px) brightness(80%);
            color:white;
        }
        .login:hover{transform: scale(1.4);}
        label{font-size: larger;
        font-weight: bold;
        font-style: italic;}
        input{
            width: 200px;
            height: 30px;
            border: 1px solid black;
            border-radius: 5px;
        }
        input[type="submit"]
        {font-size: small;
        font-weight:bold;}
        body{background-image: url(pics/bg2.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;}
    </style>
    <script type="text/javascript">
        function display()
        {
            var username=document.getElementById("username").value;
            var password=document.getElementById("password").value;
            if(username=="" && password=="")
            {
                alert("Enter the UserName or Password");
                return false;
            }
            else if (username=="tamil" && password=="12345")
            {
            }
            else{
                alert("Invalid UserName Or Password");
                 return false;
            }
            
        }
    </script>
  
</head>
<body>
    <form method="post" action="sqltable.php" onsubmit="return display();">
    <div class="login">
        <center>
            <h2>LOG-IN</h2>
        <label>USERNAME : </label><input type="text" placeholder="UserName" id="username"/><br/><br/><br/>
        <label>PASSWORD : </label><input type="password" placeholder="Password" id="password"/><br/><br/><br/>
        <input type="submit" value="SUBMIT"/><br/><br/>
        <a href="index.php"><input type="button" value="HOME" style="font-weight:bolder;background-color:rgba(25,75,23,0.8);"></center>
    </div>
</form> 
</body>
</html>