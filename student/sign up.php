<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    <style>
      body{
  margin: 0;
  padding: 0;
  background-size: cover;
  width: 100%;
  height: 100vh;
  background: linear-gradient(rgba(0,0,0,0.7) 80% ,#e67e22 ),url(7.webp);
  background-size: 100% 100%;
}
.form{
  font-family: "Roboto",sans-serif;
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  opacity: 99%;
  max-width: 260px;
  margin: 200px auto 100px;
  padding: 10px 45px 30px 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0,0,0,0.2),0 5px 5px 0 rgba(0,0,0,0.24) ;
  border-radius: 10px;
}
.form p{
  font-size:15px ;
  padding: 1px;
  text-align:center;
}
.form input{
  outline: 0;
  border-radius: 10px;
  background: #f2f2f2;
  width:100% ;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form input:hover{
  background-color:#d3f8f9 ;
  transition: all 1s ease 0s;
}
.form input :focus{
  background-color:#d3f8f9 ;
  transition: all 1s ease 0s;
}
.form button{
  text-transform: uppercase;
  outline: 0;
  border-radius: 10px;
  background: #e9a105;
  width: 100%;
  border:0;
  padding: 15px;
  color: #ffffff;
  font-size: 15px;
  cursor: pointer;
}
.form button:hover,.form button:active .form button:focus{
  background: color #e79806; ;
  transition: all 1s ease 0s;
}
.form .message{
  margin: 15px 0 0;
  color:#b3b3b3;
  font-size:12px;
}
.form .message{
  color: #06c5cf;
  text-decoration: none;
}
.navbar ul{
  list-style: none;
  background: rgb(235, 154, 3);
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
  </style>
  <script>
    function validate(){
            var Email=document.f2.Email.value;
            var user=document.f2.Username.value;
            var pass=document.f2.Password.value;
            pattern=/^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
            if(Email=="")
            {
              alert("Please Enter Valid Email Id");
            }
            pattern=/^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
            if(Email.match(pattern))
            {
              return true;
            }
            else
            {
              alert("Invalied Email Id");
            }
            if(user=="")
            {
                alert("Please Enter Valid username");
            }
            if(pass==""||pass.length<8)
            {
                alert("Please Enter the Valid Password");
            }
            alphadigit=0;
            alpha=/[a-zA-Z]/;
            digit=/[0-9]/;
            if(pass.match(alpha)&& pass.match(digit))
            alphadigit=1;

            if(alphadigit==0)
            {
                alert("Please enter atleast one alphabet and atleast one digit");
                return false;
            }
           
        }
  </script>
</head>
<nav class="nav1">
  <div class="navbar" >
      <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="about.php">ABOUT</a></li>
        <li><a href="books.php">BOOKS</a></li> 
          
  </ul>
  </div>
</nav>
<body>
  <div class="form">
  <p>Sign up</p>
  <form name="f2" action="" onsubmit="validate()" method="post">
      <input type="text" name="Email" placeholder="Email" value="">
      <input type="text" name="Username" placeholder="Username"value="">
      <input type="password" name="Password" placeholder="Password"value="">
      <input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color:yellow; width:70px; height:30px">
     <h2> <p class="message" > Already Have An Account? Go to <a href="log in.php">Log in</a></p></h2>
  </form>
</div> 
<?php
if ( isset($_POST['submit']))
{ 
$count=0;
$sql="SELECT Username from student";
$res=mysqli_query($db,$sql);

while($row=mysqli_fetch_assoc($res))
{
  if ($row['Username']==$_POST['Username'])
  {
    $count=$count+1;
  }
}
if($count==0){
  mysqli_query($db,"INSERT INTO `student` VALUES('$_POST[Email]', '$_POST[Username]', '$_POST[Password]');");
  ?>
  <script type="text/javascript">
alert("Sign Up sucessful");
    </script>
  <?php
}
else
{
  ?>
  <script type="text/javascript">
alert("The username already exists.");
    </script>
  <?php
}
}
?>


</body>
</html>