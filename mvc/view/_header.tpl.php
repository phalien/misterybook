	<div class= "header container">
		<div class="logo">
			<a class="pull-left" href="#"><img src="../../img/logo.jpg" title="M(i)steryBook" alt="M(i)steryBook" /></a>  
		</div>
		<div class="navbar navbar-default pull-right">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button"  class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar-content">							
						<span  class="icon-bar"></span>
						<span  class="icon-bar"></span>
						<span  class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="mynavbar-content">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a  href="#">Previous books</a></li>
						<li><a  href="#">How does it work</a></li>

						<?php if (isset($user)) : ?>
							<li><a  href="index.php?controller=logout">Logout</a></li>
						<?php  else : ?>
							<li><a  href="index.php?controller=register">Register</a></li>
							<li><a  href="index.php?controller=login">Login</a></li>
						<?php endif;?>

					</ul>
				</div>
			</div>
		</div>
	</div>

