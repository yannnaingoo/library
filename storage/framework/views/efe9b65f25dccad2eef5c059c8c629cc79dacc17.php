<!DOCTYPE html>
<html>
<head>
	<title>Library</title>



	<script type="text/javascript" src="<?php echo e(asset('style/bootstrap/js/jquery.min.js')); ?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('style/bootstrap/css/bootstrap.min.css')); ?>">
	<script type="text/javascript" src="<?php echo e(asset('style/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('style/style.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('style/fontawesome/css/all.min.css')); ?>">
	<script type="text/javascript"src="<?php echo e(asset('style/custom.js')); ?>"></script>
	<link rel="icon" href="<?php echo e(asset('favicon.ico')); ?>" type="image/x-icon"/>
</head>
<body>

<div id="banner">
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
			<img src="<?php echo e(asset('style/img/logo1.png')); ?>" style="width: 100px; height: 70px; margin-left: 20px">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">

				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="">Home</a>
					</li>
					<?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo e(route('books.index')); ?>">
						Admin View
						</a>
					</li>
					<?php endif; ?>

					    <?php if(Auth::user()): ?>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo e(Auth::user()->name); ?></span>	
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="profile.html">Profile</a>
							<a class="dropdown-item" href="#">History</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#" onclick="event.preventDefault();
           document.getElementById('logout-form').submit();">Log Out</a>
		 <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
             </form>

						</div>
					</li>

									<?php else: ?>
									<li>
										
					<li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('login')); ?>">Register | Login</a>
            </li>


									</li>
									<?php endif; ?>
				</ul>
				
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			</div>
		</nav>
		<div class="container" style="padding-top: 250px; text-align: center;">
			<div class="row justify-content-center" style="color: #18d26e">
				<div class="col-lg-10 d-lg-block d-md-none d-sm-none">
					<h3 class=" display-3 nav-title d-lg-block d-sm-none d-none"><b>Make Friend With Books</b></h3>
				</div>
				<div class="col-lg-8 text-center">
					<p class=" text-center">
						<b class="d-lg-block d-sm-none d-none">Books Can Change Your Life</b>
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- ====================banner end================== -->
	
        <!-- ----------------- -->
	<section id="featured-services">
		<div class="container-fluid">
			<div class="row p-3">
				<!-- <div class="col-12" align="center"><i class="ion-ios-bookmarks-outline"></i></div> -->
				<div class="col-lg-3 box">

					<h2 class="title"><a href="<?php echo e(route('frontend.allbooks')); ?>"> All-Books</a></h2>
					<hr noshade="" class="" style="max-width: 100%; background-color: #18d26e; height: 1px">

					
				</div>
				<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-lg-3 box">
			<h2 class=""><a href="<?php echo e(route('frontend.modern',$row->id)); ?>"><?php echo e($row->name); ?></a></h2>
					<hr noshade="" class="" style="max-width: 100%; background-color: #18d26e; height: 1px">

				</div>
				
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				

			</div>
		</div>
	</section>

	<!-- ----------- new book start--------------- -->
<?php echo $__env->yieldContent('content'); ?>

<!-- =================new book end================= -->
<!-- ===============Librarian======== -->
<div class="team">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 ">

          </div>
			</div>
			<div class="col-lg-4 col-md-12 col-sm-12">

			</div>
			<div class="col-lg-4">

			</div>
		</div>
	</div>
</div>
<!-- -------------librarian end-------- -->
<!-- ---------------------footer----------------- -->
<!-- Footer -->
<footer class="page-footer font-small unique-color-dark"  style="background-color:">

	<div style="background-color: #18d26e">
		<div class="container">

			<!-- Grid row-->
			<div class="row py-4 d-flex align-items-center">

				<!-- Grid column -->
				<div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
					<h6 class="mb-0">Get connected with us on social networks!</h6>
				</div>
				<!-- Grid column -->

				<!-- Grid column -->
				<div class="col-md-6 col-lg-7 text-center text-md-right">

					<!-- Facebook -->
					<a class="fb-ic">
						<i class="fab fa-facebook-f white-text mr-4"> </i>
					</a>
					<!-- Twitter -->
					<a class="tw-ic">
						<i class="fab fa-twitter white-text mr-4"> </i>
					</a>
					<!-- Google +-->
					<a class="gplus-ic">
						<i class="fab fa-google-plus-g white-text mr-4"> </i>
					</a>
					<!--Linkedin -->
					<a class="li-ic">
						<i class="fab fa-linkedin-in white-text mr-4"> </i>
					</a>
					<!--Instagram-->
					<a class="ins-ic">
						<i class="fab fa-instagram white-text"> </i>
					</a>

				</div>
				<!-- Grid column -->

			</div>
			<!-- Grid row-->

		</div>
	</div>

	<!-- Footer Links -->
	<div class="container text-center text-md-left mt-5">

		<!-- Grid row -->
		<div class="row mt-3" ;>

			<!-- Grid column -->
			<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

				<!-- Content -->
				<h6 class="text-uppercase font-weight-bold">World Library</h6>
				<hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
				<p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
					consectetur
				adipisicing elit.</p>

			</div>
			<!-- Grid column -->

			<!-- Grid column -->
			<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

				<!-- Links -->
				<h6 class="text-uppercase font-weight-bold">Catgoriese</h6>
				<hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
				<p>
					<a href="#!">Modern Books</a>
				</p>
				<p>
					<a href="#!">Education Books</a>
				</p>
				<p>
					<a href="#!">Technology Books</a>
				</p>
				<p>
					<a href="#!">History</a>
				</p>
				<p>
					<a href="#!">Biography</a>
				</p>

			</div>
			<!-- Grid column -->

			<!-- Grid column -->
			<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

				<!-- Links -->
				<h6 class="text-uppercase font-weight-bold">Useful links</h6>
				<hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
				<p>
					<a href="#!">Your Account</a>
				</p>
				<p>
					<a href="#!">Register</a>
				</p>
				<p>
					<a href="#!">Help</a>
				</p>

			</div>
			<!-- Grid column -->

			<!-- Grid column -->
			<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

				<!-- Links -->
				<h6 class="text-uppercase font-weight-bold">Contact</h6>
				<hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
				<p>
					<i class="fas fa-home mr-3"></i> Yangon</p>
					<p>
						<i class="fas fa-envelope mr-3"></i> worldLibrary@gmail.com</p>
						<p>
							<i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
							<p>
								<i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

							</div>
							<!-- Grid column -->

						</div>
						<!-- Grid row -->

					</div>
					<!-- Footer Links -->

					<!-- Copyright -->

					<!-- Copyright -->

				</footer>
				<!-- =================footer end================ -->


			</body>
			</html><?php /**PATH /opt/lampp/htdocs/finalproject/resources/views/frontendtemplate.blade.php ENDPATH**/ ?>