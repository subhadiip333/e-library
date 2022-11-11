<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title> Book Category</title>
<link rel="stylesheet" href="./style.css">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

body{
	margin: 0;
	padding: 0;
	height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
	font-family: "Roboto", sans-serif;
	background:linear-gradient(rgba(0,0,0,0.7) 80% ,#e67e22),url(8.webp);
}

.navbar ul{
    list-style: none;
    background: rgb(235, 142, 3);
    padding: 0;
    margin: 0;
    text-align: right;
    position: relative;
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

header{
    width: 100%;
    height: 100vh;
    background-size: 100% 100%;
}
*{
 margin: 0px;
 padding: 0px;
}
body{
 font-family: arial;
}
.main{

 margin: 1%;
 white-space: 100px;
}

.card{
     width: 20%;
     display: inline-block;
     box-shadow: 2px 2px 20px rgb(241, 239, 239);
     border-radius: 50px; 
     margin: 2%;
	
    }
.image{
	position: relative;
	flex:1;
	width: 100%;
	max-width: 400px;
}

.image img{
  width: 100%;
  border-top-right-radius: 50px;
  border-top-left-radius: 50px;
  border-bottom-right-radius:50px ;
  border-bottom-left-radius:50px ;
 }
.image .btn{
	position: absolute;
	top:70%;
	left: 9%;
	background-color: #f8f4f0;
	border-radius: 20px;
	
}
.image .btn:hover{
	background-color: rgb(231, 152, 33);
	color: #f2f2f5;
} 
</style>
</head>
</style>
<body>
	
    <header>
        <nav class="nav1">
            <div class="navbar" >
                <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="log in.php">Log out</a></li>
                <li><a href="books.php">BOOKS</a></li>     
            </ul>
            </div>
        </nav>
<div class="main">
<div class="card">
<div class="image">
    <img src="cat12.jpg" width="100" height="220">
	<a href="computer books.php"><button class="btn"><h2>Computer Books</h2></button></a>
</div>
</div>
<div class="card">
<div class="image">
	<img src="cat1.jpeg">
	<a href="Story Books.php"><button class="btn"><h2>Story Books</h2></button></a>
</div>
</div>
<div class="card">
<div class="image">
   <img src="cat4.jpeg"width="100" height="220">
   <a href="Novels and Drama.html"><button class="btn"><h2>Novels and Drama</h2></button></a>
</div>
</div>
<div class="card">
<div class="image">
   <img src="cat8.jpeg"width="100" height="220">
   <a href="Biography and Autobiography.html"><button class="btn"><h2>Biography and Autobiography</h2></button></a>
</div>
</div>
<div class="card">
<div class="image">
   <img src="cat5.jpeg"width="100" height="220">
   <a href="mythological Books.html"><button class="btn"><h2>mythological Books</h2></button></a>
</div>
</div>
<div class="card">
<div class="image">
   <img src="cat7.jpeg" width="100" height="220">
   <a href="Sports Books and Journals.html"><button class="btn"><h2>Sports Books and Journals</h2></button></a>
</div>
</div>
<div class="card">
<div class="image">
   <img src="cat6.jpeg"width="100" height="220">
   <a href="History Books.html"><button class="btn"><h2>History Books</h2></button></a>
</div>
</div>
<div class="card">
<div class="image">
   <img src="cat2.jpeg"width="100" height="220">
   <a href="World Geography Books.html"><button class="btn"><h2>World Geography Books</h2></button></a>
</div>
</div>
<div class="card">
<div class="image">
   <img src="cat9.jpeg"width="100" height="220">
   <a href="Comics Books.html"><button class="btn"><h2>Comics</h2></button></a>
</div>
</div>
<div class="card">
	<div class="image">
	   <img src="cat3.jpeg"width="100" height="220">
	   <a href="Art and Craft.html"><button class="btn"><h2>Art and Craft</h2></button></a>
	</div>
</div>
<div class="card">
	<div class="image">
	   <img src="cat10.jpeg" width="100" height="220">
	   <a href="Dance and Culture.html"><button class="btn"><h2>Dance and Culture</h2></button></a>
	</div>
</div>
<div class="card">
	<div class="image">
	   <img src="cat11.jpeg" width="100" height="220">
	   <a href="Political History.html"><button class="btn"><h2>Political History</h2></button></a>
	</div>
</div>
</body>
</html>
