<?php $title="Login";?>
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
	        <h3 align="center">Login</h3>
	        <form class="m-t" role="form" method="POST" id="login_form">
	            <div class="form-group">
	                <input type="email" name="email" id="email" class="form-control" placeholder="Email" >	
	            </div>
	            <div class="form-group">
	                <input type="password" name="password" id="password" class="form-control" placeholder="Password" >
	            </div>
	            <button type="submit" name="submit_login" class="btn btn-primary block full-width m-b">
	            	<img src="/static/images/views/loading.gif" width="18" id="loading_img" style="display:none;">
	            	Login
	            </button>
	            <p class="text-muted text-center">
		            <a href="forgot"><small>Forgot password?</small></a><br>
		            <small>Do not have an account?</small>
		        </p>
	            <a class="btn btn-sm btn-white btn-block" href="signup">Create an account</a>
	        </form>
	        <br>
	        <div class="text-center alert alert-dismissable" id="msg-box" style="display:none;">
		        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
		        <span class="" id="msg-txt">Error</span>
		    </div>
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

	

   