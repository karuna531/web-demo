<!DOCTYPE html>
<html>
<head>
	<title>Ecommerce website</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../ecom/style/style.css">
</head>
<body>
	<!--top bar start-->
	<div id="top">
		<div class="container"><!--container top start-->
			<div class="row">
				<div class="col-md-6" class="offer">
					<a href="#"class="btn btn-success btn-sm">Welcome Guest</a>
					<a href="#" >Shopping cart Total price:IMR 100, total Items:2</a>
				</div>
				<div class="col-md-6">
					<ul>
						<li><a href="customer_registration.php">Register</a></li>
						<li><a href="Checkout.php">My Account</a></li>
						<li><a href="#">Go to cart</a></li>
						<li><a href="#">Login</a></li>



					</ul>
				</div>
			</div>
		</div><!--container top end-->
		
	</div>
	<!--top bar end-->



	<!--navbar start-->
	<div class="navbar navbar-default" id="navbar">
		<div class="container">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">
					<p>Himali <span>Hosiery</span></p>
				</a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
					<span class="sr-only">Toggle Navigation</span>
					<i class="fa fa-align-justify"></i>
				</button>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
					<span class="sr-only"></span>
					<i class="fa fa-search"></i>
				</button>
			</div>
			<div class="navbar-collapse collapse" id="navigation">
				<div class="padding-nav"><!--padding navstart-->
					<ul class="nav navbar-nav navbar-left">
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="shop.php">Shop</a></li>
						<li><a href="checkout.php">My Account</a></li>
						<li><a href="cart.php">Shopping cart</a></li>
						<li><a href="index.php">About Us</a></li>
						<li><a href="Services.php">Services</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div><!--padding nav end-->
				<a href="cart.php" class="btn btn-primary navbar-btn right">
					<i class="fa fa-shopping-cart"></i>
					<span>4 items in Cart</span>
				</a>
				<div class="navbar-collapse collapse right"><!--navbar-collapse collapse right start-->
					<button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
						<span class="sr-only">Toggle Search</span>
						<i class=" fa fa-search"></i>
					 </button>
				</div><!--navbar-collapse collapse right end-->

				<div class="collapse clearfix" id="search">
					<form class="navbar-form" method="get" action="result.php">
						<div class="input-group">
							<input type="text" name="user_query" placeholder="Search here" class="form-control" required="">
							<span class="input-group-btn  "><button type="submit" value="search" name="search" class="btn btn-primary">
								<i class=" fa fa-search"></i>
							</button></span>
						</div>
					</form>
				</div>

			</div><!--navbar collapse collapse end-->
		</div>
	</div>
	<!--End of navbar-->



	<!--creating slider in html(carousel of bootstrap)-->
  <div class="container" id="slider">
   
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="admin_area/slider_image/one.jpg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
        <h2>Himali Hoisery industry</h2>
        <p>Kathmanu Nepal</p>
      </div>
      </div>

      <div class="item">
        <img src="admin_area/slider_image/five.jpg" alt="Chicago" style="width:100%;">
         <div class="carousel-caption">
        <h2>Trustable industry</h2>
        <p>cheap and quality product</p>
      </div>
      </div>
    
      <div class="item">
        <img src="admin_area/slider_image/three.jpg" alt="New york" style="width:100%;">
         <div class="carousel-caption">
        <h2>Himali Hoisery industry</h2>
        <p>Propiter:Ravi Tripathi</p>
      </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

	<!--End of slider  in html(carousel of bootstrap)--> 

	<div  id="advantage">
		<div class="container">
			<div class="same-height-row">
				<div class="col-sm-4">
					<div class="box same-height">
						<div class="icon">
							<i class="fa fa-heart"></i>
						</div>
						<h3><a href="#">BEST PRICES</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. </p>
					</div>
				</div><!--col-sm-4 end-->
				<div class="col-sm-4">
					<div class="box same-height">
						<div class="icon">
							<i class="fa fa-heart"></i>
						</div>
						<h3><a href="#">100% SATISFACTION GUARENTEED FROM US</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
					</div>
				</div><!--col-sm-4 end-->
				<div class="col-sm-4">
					<div class="box same-height">
						<div class="icon">
							<i class="fa fa-heart"></i>
						</div>
						<h3><a href="#">WE LOVE OUR CUSTOMERS</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit amet, consectetur adipisicing elit  </p>
					</div>
				</div><!--col-sm-4 end-->

			</div><!--same-height- row end-->
		</div><!--container end-->
	</div><!--advantage end-->

<!--Divider section start-->


	<div class="box" id="hotbox">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>LATEST THIS WEEK</h2>
				</div>
		</div>
	</div>
</div>


<!--Divider section end-->
<!--product styling start-->

<div class="container" id="content">
	<div class="row">
		<div class="col-sm-4 col-sm-6 single"><!--product start-->
			<div class="product">
				<a href="details.php">
					<img src="admin_area/product_image/1.jpg" class="img-responsive">
				</a>
				<div class="text">
					<h3><a href="details.php">BENTTON Green  Shirt</a></h3>
					<p class="price">
						NPR 599
					</p>
					<p class="buttons">
						<a href="details.php" class="btn btn-default">View details</a>
						<a href="details.php" class="btn btn-primary">
							<i class="fa fa-shopping-cart">Add to cart</i>
						</a>
					</p>
				</div>
			</div>
		</div><!--product end-->
		<div class="col-sm-4 col-sm-6 single"><!--product start-->
			<div class="product">
				<a href="details.php">
					<img src="admin_area/product_image/2.jpg" class="img-responsive">
				</a>
				<div class="text">
					<h3><a href="details.php">Handmade Carry Bag</a></h3>
					<p class="price">
						NPR 999
					</p>
					<p class="buttons">
						<a href="details.php" class="btn btn-default">View details</a>
						<a href="details.php" class="btn btn-primary">
							<i class="fa fa-shopping-cart">Add to cart</i>
						</a>
					</p>
				</div>
			</div>
		</div><!--product end-->
		<div class="col-sm-4 col-sm-6 single"><!--product start-->
			<div class="product">
				<a href="details.php">
					<img src="admin_area/product_image/3.jpg" class="img-responsive">
				</a>
				<div class="text">
					<h3><a href="details.php">Winter Red Jacket</a></h3>
					<p class="price">
						NPR 2990
					</p>
					<p class="buttons">
						<a href="details.php" class="btn btn-default">View details</a>
						<a href="details.php" class="btn btn-primary">
							<i class="fa fa-shopping-cart">Add to cart</i>
						</a>
					</p>
				</div>
			</div>
		</div><!--product end-->
		<div class="col-sm-4 col-sm-6 single"><!--product start-->
			<div class="product">
				<a href="details.php">
					<img src="admin_area/product_image/4.jpg" class="img-responsive">
				</a>
				<div class="text">
					<h3><a href="details.php">Fasion Jeans Jacket</a></h3>
					<p class="price">
						NPR 1450
					</p>
					<p class="buttons">
						<a href="details.php" class="btn btn-default">View details</a>
						<a href="details.php" class="btn btn-primary">
							<i class="fa fa-shopping-cart">Add to cart</i>
						</a>
					</p>
				</div>
			</div>
		</div><!--product end-->
		<div class="col-sm-4 col-sm-6 single"><!--product start-->
			<div class="product">
				<a href="details.php">
					<img src="admin_area/product_image/6.jpg" class="img-responsive">
				</a>
				<div class="text">
					<h3><a href="details.php"></a>BENTTON White polo shirt</h3>
					<p class="price">
						NPR 1899
					</p>
					<p class="buttons">
						<a href="details.php" class="btn btn-default">View details</a>
						<a href="details.php" class="btn btn-primary">
							<i class="fa fa-shopping-cart">Add to cart</i>
						</a>
					</p>
				</div>
			</div>
		</div><!--product end-->	
		<div class="col-sm-4 col-sm-6 single"><!--product start-->
			<div class="product">
				<a href="details.php">
					<img src="admin_area/product_image/8.jpg" class="img-responsive">
				</a>
				<div class="text">
					<h3><a href="details.php"></a>Traditional Nepali shirt</h3>
					<p class="price">
						NPR 299
					</p>
					<p class="buttons">
						<a href="details.php" class="btn btn-default">View details</a>
						<a href="details.php" class="btn btn-primary">
							<i class="fa fa-shopping-cart">Add to cart</i>
						</a>
					</p>
				</div>
			</div>
		</div><!--product end-->	
		<div class="col-sm-4 col-sm-6 single"><!--product start-->
			<div class="product">
				<a href="details.php">
					<img src="admin_area/product_image/11.jpg" class="img-responsive">
				</a>
				<div class="text">
					<h3><a href="details.php">Fashion Ladies onepiece</a></h3>
					<p class="price">
						NPR 888
					</p>
					<p class="buttons">
						<a href="details.php" class="btn btn-default">View details</a>
						<a href="details.php" class="btn btn-primary">
							<i class="fa fa-shopping-cart">Add to cart</i>
						</a>
					</p>
				</div>
			</div>
		</div><!--product end-->	
		<div class="col-sm-4 col-sm-6 single"><!--product start-->
			<div class="product">
				<a href="details.php">
					<img src="admin_area/product_image/12.jpg" class="img-responsive">
				</a>
				<div class="text">
					<h3><a href="details.php">Ladies Full Gown</a></h3>
					<p class="price">
						NPR 1559
					</p>
					<p class="buttons">
						<a href="details.php" class="btn btn-default">View details</a>
						<a href="details.php" class="btn btn-primary">
							<i class="fa fa-shopping-cart">Add to cart</i>
						</a>
					</p>
				</div>
			</div>
		</div><!--product end-->		
	</div>

</div>
<!--product styling end-->
<!-- Footer start-->
<?php 
include("includes/footer.php");
 ?>

<!--footer end-->

</body>
</html>