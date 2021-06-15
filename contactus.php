<?php 

include("header.php");

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Contactus</title>
	
</head>
<body>

<style media="screen">
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
input[type=text], select, textarea {
width: 100%;
padding: 12px;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
margin-top: 6px;
margin-bottom: 16px;
resize: vertical
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
background-color: #04AA6D;
color: white;
padding: 12px 20px;
border: none;
border-radius: 4px;
cursor: pointer;
}


input[type=submit]:hover {
background-color: #45a049;
}

/
.container {
border-radius: 5px;
background-color: #yellow;
padding: 20px;
}
</style>

 <form action="products.php">

   <label for="fname">First Name</label>
   <input type="text" id="fname" name="firstname" placeholder="Your name..">

   <label for="lname">Last Name</label>
   <input type="text" id="lname" name="lastname" placeholder="Your last name..">

   <label for="country">Country</label>
   <select id="country" name="country">
     <option value="australia">Australia</option>
     <option value="canada">Canada</option>
     <option value="Nepal">Nepal</option>
     <option value="Japan">Japan</option>
     <option value="India">India</option>
     <option value="Srilanka">Srilanka</option>
   </select>

   <label for="subject">Subject</label>
   <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>


 <input type="submit" value="Submit">
<script>
windows.alert(Successfully submitted);
</script>


 </form>
</div>
</body>
</html>