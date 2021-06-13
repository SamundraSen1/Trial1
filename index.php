<?php




 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" name= "viewpoint" content="with=device-width, initial scale="1.0"">
    <title>Order Management System</title>
    <link rel="stylesheet" href="style.css">
  <style type="text/css">
  *{
  margin: 0;
  padding: 0;


}
.header{
min-height: 100vh;
width: 100%;
background-image:linear-gradient(rgba(4,9, 30, 0.7),rgba(4,9, 30, 0.7)),url(images/background.jpg);
background-position: center;
background-size: cover;
position: relative;
}
nav{
display: flex;
padding: 2% 6%;
justify-content: space-between;
align-items: center;
}
nav img{
width: 150px;

}
.nav-links{
flex: 1;
text-align: left;
}
.nav-links ul li{
list-style: none;
display:inline-block;
padding: 8px 12px;
position: relative;
}
.nav-links ul li a{

color:#fff;
text-decoration: none;
font-size: 13px;

}
.nav-links ul li::after{
content: '';
width: 0%;
height: 2px;
background: #f44336;
display: block;
margin: auto;
transition: 0.5s;

}
.nav-links ul li:hover::after{
width: 100%;


}
.nav-links2{
flex: 1;
text-align: right;
}
.nav-links2 ul li{
list-style: none;
display:inline-block;
padding: 8px 12px;
position: relative;
}
.nav-links2 ul li a{

color:#fff;
text-decoration: none;
font-size: 13px;

}
.nav-links2 ul li::after{
content: '';
width: 0%;
height: 2px;
background: #f44336;
display: block;
margin: auto;
transition: 0.5s;

}
.nav-links2 ul li:hover::after{
width: 100%;


}


.text-box{

width: 90%;
color: #fff;
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
text-align: center;


}


.text-box h1{
font-size: 65px;
}


.text-box p{
margin: 10px 0 40px;
font-size: 18px;
color: #fff;

}

  </style>
  </head>
  <body>
    <section class="header">
       <nav>
           <a href="index.php"><img src="images/logo.jpg" alt=""></a>
           <div class="nav-links">
             <ul>
               <li><a href="index.php">HOME</a></li>
                <li><a href="about.html">ABOUT</a></li>
                 <li><a href="products.php">PRODUCTS</a></li>
                   <li><a href="contact.php">CONTACT US</a></li>
             </ul>
             </div>

             <div class="nav-links2">
               <ul>
                 <li><a href="Signup.php">SIGN UP</a></li>
                 <li><a href="login.php">LOG IN</a></li>
               </ul>

            </div>
       </nav>
<div class="text-box">
  <h1>Welcome to the world of lights.</h1>
 <p>Lightosphere is 100% Australian owned and operated business based in Sydney, NSW.
    It specialises in sale of designer lights like Chandeliers, Ceiling lights, Kids lamps and Wall lamps etc.<br>
    Lightosphere mostly sells its goods through online channels</p>
</div>
     </section>
  </body>
</html>
