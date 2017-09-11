<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>nav</title>
    	{{-- Built-In Bootstrap 4 CSS --}}
        {{-- <link rel="stylesheet" type="text/css" href="css/app.css"> --}}

        {{-- Bootstrap 4 CDN --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

        {{-- Built-In Vue JS 2 --}}
        {{-- <script type="text/javascript" src="/js/app.js"></script> --}}

       

        <!-- jQuery CDNs for Price Range Slider -->
        {{-- <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.9.1.js"></script>
        <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <link rel="stylesheet" href="/resources/demos/style.css"> --}}

        {{-- nice scroll --}}
        {{-- <script src="js/jquery.nicescroll.min.js"></script> --}}

       


        <!-- Font Awesome -->
        <script src="https://use.fontawesome.com/b8fef9f667.js"></script>

        <!-- Stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <!-- Javascript -->
        <script type="text/javascript" src="js/script.js"></script>


</head>
<body>
{{-- MAIN NAVBAR DIV STARTS --}}
	<nav class="navbar navbar-light navbar-expand-md bg-light justify-content-between ">
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-nav" aria-controls="dual-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse dual-nav">
	        <ul class="navbar-nav">
	            <li class="nav-item active">
	                <a class="nav-link pl-0 hvr-underline-from-center" href="#">Home</a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link hvr-underline-from-center" href="#">About</a>
	            </li>
	            <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle hvr-underline-from-center" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Shop
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				    	<a class="dropdown-item" href="#">1</a>
				    	<a class="dropdown-item" href="#">2</a>
				    	<a class="dropdown-item" href="#">3</a>
			        </div>
		        </li>
	            <li class="nav-item hvr-underline-from-center">
	                <a class="nav-link" href="#">Contact</a>
	            </li>
	        </ul>
	    </div>
	    <a href="#" class="navbar-brand mr-0">Brand</a>
	    <div class="collapse navbar-collapse dual-nav">
	        <ul class="nav navbar-nav ml-auto">
	            <li class="nav-item">
	            	<form class="form-inline">
		      			<input class="form-control" type="text" placeholder="Search.." aria-label="Search">
		      			<a href="#" class="btn btn-outline-success"><i class="fa fa-search" aria-hidden="true"></i></a>
		    		</form>
		    	</li>
	            <li class="nav-item">
	            	<a class="nav-link hvr-underline-from-center" href="">
	            		Login/Register
	            	</a>
	            </li>
	            <li class="nav-item">
	            	<a class="nav-link hvr-underline-from-center" href="">
	            		Cart
	            	</a>
	            </li>
	        </ul>
	    </div>
	</nav>
{{-- MAIN NAVBAR DIV ENDS --}}

{{-- Login/Register Div --}}
<span class="arrow-up-login-register" hidden></span>
	<div class="login-register-div" hidden>
	{{-- Login Form --}}
	<form method="#" action="#">
		<div class="input-group">
		  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
		  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="username" id="username">
		</div>
		<div class="input-group">
		  <span class="input-group-addon" id="basic-addon2"><i class="fa fa-key" aria-hidden="true"></i></span>
		  <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon2" name="password" id="password">
		</div>
		<div class="input-group text-xs-center loginRegisterButtonDiv">
			<button type="submit" onclick="#" class="btn btn-md btn-primary loginButton btn-primary-custom"><i class="fa fa-sign-in" aria-hidden="true"></i>          Login</button>
		</div>
		<img src="/images/or.png" id="orImage">
		<div class="input-group text-xs-center loginRegisterButtonDiv">
			<button type="submit" onclick="#" class="btn btn-md btn-primary RegisterButton btn-primary-custom"><i class="fa fa-user-plus" aria-hidden="true"></i>          Register</button>
		</div>
	</form>
	{{-- Login Form --}}
	</div>
{{-- Login/Register Div --}}

{{-- Cart Div --}}
{{-- =================================TO BE COMPLETED WITH AJAX AND BACKEND AND HAVE TO EXPAND THE DIV HEIGHT ACCORDING TO ITEMS (DYNAMIC) ======================================== --}}
<span class="arrow-up-cart"></span>
	<div class="cart-div">
		<br>
		<div class="container">
			<div class="cart-div-header">
				<i class="fa fa-shopping-cart" aria-hidden="true"></i>   <span class="badge badge-pill badge-primary">3</span>
				<label id="totalAmountCart">Total:<span class="cartPrice">$1000</span></label>
			</div>
		</div>
		<hr class="hrCart">
			<div class="cart-div-items">
				<div class="container">
					
				</div>
			</div>
		<hr class="hrCart">
		<div class="cart-div-footer">
			<button class="btn btn-md btn-primary" id="checkoutButton">Checkout</button>
		</div>
	</div>
{{-- Cart Div if no items --}}
	<div class="cart-div" hidden>
		<div class="cart-div-header">
			<i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="badge badge-pill badge-primary">3</span>
			<label>You have no items in your cart.</label>
		</div>
	</div>
{{-- Cart Div --}}


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>