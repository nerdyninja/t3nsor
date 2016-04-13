<?php require_once $_SERVER["DOCUMENT_ROOT"].'/_views_/header.php'; ?>

	<div class="middle-box loginscreen animated fadeInDown">
	    <div>
	       	<a href="/">
	        <h3 align="center">
	        	<img src="/static/images/assets/logo.png" width="40"><br><br>	
	        	<font color="green">t3nsor</font>
	        </h3>
	        </a>
	        <br>
	        <h3 align="center">Sign up</h3>
			<form class="m-t" role="form" action="login.html">
	            <div class="form-group">
	                <input type="text" class="form-control" placeholder="First Name" required="">
	            </div>
	            <div class="form-group">
	                <input type="text" class="form-control" placeholder="Last Name" required="">
	            </div>
	                <div class="form-group">
	                <input type="email" class="form-control" placeholder="Email" required="">
	            </div>
	            <div class="form-group">
	                <input type="password" class="form-control" placeholder="Password" required="">
	            </div>
	            <button type="submit" class="btn btn-primary block full-width m-b">Sign up</button>

	            <p class="text-muted text-center"><small>Already have an account?</small></p>
	            <a class="btn btn-sm btn-white btn-block" href="login">Login</a>
	        </form>
	        <br>
	    </div>
	</div>

    <h4 align="center">
		<a href="about">About</a>&nbsp;&nbsp;|&nbsp;&nbsp;
		<a href="about">Developers</a>&nbsp;&nbsp;|&nbsp;&nbsp;
		<a href="about">Help</a>&nbsp;&nbsp;|&nbsp;&nbsp;
		<a href="about">Contact</a>
	</h4>
	<p align="center" class="mt-footer"><small>t3nsor, Cloud Platform © 2016</small></p>

<?php require_once $_SERVER["DOCUMENT_ROOT"].'/_views_/footer.php'; ?>

	

   