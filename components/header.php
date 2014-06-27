<header class=" border-bottom border-gray-dark">
	<div class="container">
		<div class="row">
			<div class="logo col-ph-10 col-ph-push-0 col-sm-6 pt25 text-center text-left-sm text-left-ph"><a href="home.html"><img src="../images/img/logo-sayist.png" alt="sayist logo"></a></div>
			<figure class="menu-humburger col-ph-2 mt25 text-right visible-ph"><a href="#"><img src="../images/img/icon-menu-humb.png" alt="menu icon"></a></figure>
			<nav class="main-nav col-ph-12 col-ph-push-0 col-xs-10 col-xs-push-1 col-sm-6 col-sm-push-0 text-center text-left-sm">
				<div class="row">
					<ul class="list-unstyled pt25-xs pb25-xs pt30-sm pb-30-sm text-uppercase text-bold">
						<li class="col-xs-4 text-center text-right-sm"><a href="javascript:void(0)">Our Story</a></li>
						<li class="col-xs-4 text-center text-right-sm"><a href="#" data-toggle="modal" data-target="#sign-in-modal" data-open="true">Sign In</a></li>
						<li class="col-xs-4 text-center text-right-sm"><a href="javascript:void(0)">Post</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</header>

<!--sign in modal-->
<div class="modal fade" id="sign-in-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-large modal-signin">
		<div class="modal-content" data-open="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<figure class="text-center mt20"> <img src="../images/img/sayist-logo.png" alt="sayist logo"> </figure>
				<p class="text-center mt10">Sign In To Your Account</p>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-6">
							<div class="row pt50">
								<div class="col-xs-9 col-xs-push-1">
									<!--
									<div class="btn-group w100p mb10">
									  <button type="button" class="btn btn-sayist facebook"><i class="fa fa-facebook"></i></button>
									  <button type="button" class="btn btn-sayist facebook">Sign in with facebook</button>
									</div>
									<div class="btn-group w100p mb10">
									  <button type="button" class="btn btn-sayist twitter"><i class="fa fa-twitter"></i></button>
									  <button type="button" class="btn btn-sayist twitter">Sign in with facebook</button>
									</div>
									-->
									<button class="btn btn-sayist btn-social w100p"><span class="fa fa-facebook"></span><span class="social-text">Sign in with Facebook</span></button>
								</div>
							</div>
						</div>
						<div class="col-xs-6">
							<div class="row">
								<div class="col-xs-9 col-xs-push-2">
									<form role="form">
										<div class="form-group">
											<label for="your-email" class="sr-only">Your Email</label>
											<input type="email" class="form-control input-lg" id="your-email" placeholder="Enter email">
										</div>
										<div class="form-group">
											<label for="password" class="sr-only">Password</label>
											<input type="password" class="form-control input-lg" id="password" placeholder="Password">
										</div>
										<div class="password"><a href="#">Forgot your password?</a></div>
										<button type="submit" class="btn btn-sayist w100p mt20">Sign In</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer mt40">
				<div class="text-center mb30">Don't have an account? <a href="#">Sign up for</a></div>
			</div>
		</div>
	</div>
</div>
<!--/sign in modal--> 

<script>
$(document).ready(function(e) {
	//$('#sign-in-modal').modal('show');
});
</script> 
