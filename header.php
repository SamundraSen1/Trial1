<!DOCTYPE html>
<html>
<head>
	<title>Lightosphere</title>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>



<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" name= "viewpoint" content="with=device-width, initial scale="1.0"">
    <title>Order Management System</title>
    <link rel="stylesheet" href="styles.css">
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


  </style>
  </head>
  <body>
    <section class="header">
      




	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<h1 class="text-white">Lightosphere</h1>


		<div class="mr-auto"></div>
<ul class="text-white navbar-nav">
     <li class="nav-item">
        <a class="nav-link text-white" href="index.php">Home</a>
      </li>
	    <li class="nav-item">
        <a class="nav-link text-white" href="products.php">Products</a>
      </li>
    	

   
   <li class="nav-item">
        <a class="nav-link text-white" href="contactus.php">Contact Us</a>
      </li>





         <li class="nav-item">
<div class="dropdown">
				    <button type="button" class="btn btn-info" data-toggle="dropdown">
<i class="fa fa-shopping-cart" aria-hidden="true"> <a class="nav-link text-blue" href="cart.php" ><span id="cart" class="badge badge-warning mx-2"></span></a></i> Cart <span class="badge badge-pill badge-danger"></span>
				  
				    </button>
      
      </li>




         <li class="nav-item">
        <a class="nav-link text-white" href="add_new_product.php">Admin use only</a>
      </li>


 <li class="nav-item">
        <a class="nav-link text-white" href="login.php">Logout</a>
      </li>

        
    
</div>
		
	</nav>

   <script type="text/javascript">
    $(document).ready(function(){
            
            show_mycart();
           function show_mycart(){
              $.ajax({
              url: "ajax/show_mycart.php",
              method:"POST",
              dataType:"JSON",
              success:function(data){
                $(".get_cart").html(data.out);
                $("#cart").text(data.da);
              }
           });
           }

           setInterval(show_mycart,1000);

    });
   </script>

</body>
</html>