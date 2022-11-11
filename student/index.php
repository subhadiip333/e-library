<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME PAGE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <style>
        body{
    margin: 0;
    padding: 0;
    background: #ccc;
    font-family: Arial;
}
.navbar ul{
    list-style: none;
    background: rgb(235, 142, 3);
    padding: 0;
    margin: 0;
    text-align: right;
}
.navbar li{
    display: inline-block;   
}
.navbar a{
    text-decoration: none;
    color: rgb(59, 16, 16);
    width: 80px;
    display: block;
    padding: 25px 20px;
    font-weight: bold;
    font-family: Arial;
    text-align: center;
    font-size: 14px;
}
.navbar a:hover{
    background: #f2f2f5;

}
.logo img{
    position: absolute;
    margin-top: 5px;
    margin-left: 10px;   
}
header{
    width: 100%;
    height: 100vh;
    background: linear-gradient(rgba(0,0,0,0.7) 80% ,#e67e22 ),url(1.jpg);
    background-size: 100% 100%;
}
.h-text{
    max-width: 600px;
    color: white;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    text-align: center;
}
.h-text h1{
    font-size: 3em;
    font-family: 'Dancing Script', cursive;
}
.h-text span{
    color: #e67e22;
    font-family: Arial, Helvetica, sans-serif;
}
.h-text a{
    text-decoration: none;
    color: white;
    background: #e67e22;
    padding: 10px 20px;
    margin: 0 15px;
   letter-spacing: 5px;
   font-family: Arial, Helvetica, sans-serif;
   font-weight: bold;
}
    </style>
</head>
<body>
    <div class="logo">
        <a href="#"><img src="2.jpg" width="150" height="60"></a>
    </div>
    <header>
        <nav class="nav1">
            <div class="navbar" >
                <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="books.php">BOOKS</a></li>     
            </ul>
            </div>
        </nav>
<div class="h-text">
    <h1>
        <h1>WELCOME TO OUR <span> LIBRARY </span> </h1>
    </h1>
        <a href="log in.php">Log in</a>        
</div>
    </header>
</body>
</html>