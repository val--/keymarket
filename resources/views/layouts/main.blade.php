<!DOCTYPE html>
<html lang="fr">
<head>
	<!-- META -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<title>Keymarket</title>
	
	<!-- FAVICON -->
	<link rel="shortcut icon" href="/img/favicon.ico">
	
	<!-- CORE CSS -->
	<link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="/css/style.css" rel="stylesheet">
	<link href="/css/helpers.css" rel="stylesheet">
	
	<!-- PLUGINS -->
	<link href="/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="/plugins/ionicons/css/ionicons.min.css" rel="stylesheet">
	<link href="/plugins/animate/animate.min.css" rel="stylesheet">
	<link href="/plugins/animate/animate.delay.css" rel="stylesheet">
	<link href="/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
</head>

<body class="header-fixed">

	<header>
		<div class="container">
		<span class="bar hide"></span>
		<a href="index.html" class="logo"><img src="/img/logo.png" alt=""></a>
		<nav>
			<div class="nav-control">
				<ul>
					<li><a href="/">Accueil</a></li>
					<li><a href="/">Place du marché</a></li>
					<li><a href="/games">Jeux</a></li>
					<li><a href="/">Les + recherchés</a></li>
					<li><a href="/">Les + proposés </a></li>
					<li><a href="/">Contact</a></li>
				</ul>
				</div>
			</nav>
			<div class="nav-right">

			@if (Auth::guest())
			<a href="/auth/register"><i class="fa fa-btn fa-heart"></i> Inscription</a>
			<a href="/auth/login"><i class="fa fa-btn fa-sign-in"></i> Connexion</a>
			@else
				<div class="nav-profile">
					<a href="#" id="nav-profile" class="profile dropdown-toggle" data-toggle="dropdown">

					@if (Auth::user()->avatar)
					<img src="{{ Auth::user()->avatar }}" alt="">
					@else
					<img src="/img/user/avatar.jpg" alt=""> 
					@endif
					
					<span>{{ Auth::user()->name }}</span></a>
					<ul class="dropdown-menu" aria-labelledby="nav-profile">
						<li><a href="#"><i class="fa fa-user"></i> Profil</a></li>
						<li><a href="#"><i class="fa fa-heart"></i> Wanted <span class="label label-info pull-right">32</span></a></li>
						<li><a href="#"><i class="fa fa-gamepad"></i> En ma possession</a></li>
						<li><a href="#"><i class="fa fa-gear"></i> Paramètres</a></li>
						<li class="divider"></li>
						<li><a href="/auth/logout"><i class="fa fa-sign-out"></i> Déconnexion</a></li>
					</ul>
				</div>
			
				<div class="nav-likes">
					<a href="#" id="nav-likes" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-heart"></i></a>
					<ul class="dropdown-menu" aria-labelledby="nav-likes">
						<li class="dropdown-header"><i class="fa fa-heart-o"></i> Vous recherchez actuellement x jeux</li>
						<li><a href="#"><img src="holder.js/32x32" alt=""> Alien Isolation</a></li>
						<li><a href="#"><img src="holder.js/32x32" alt=""> Witcher 3 <span class="label label-success pull-right">XBOX</span></a></li>
						<li><a href="#"><img src="holder.js/32x32" alt=""> Last of Us</a></li>
						<li><a href="#"><img src="holder.js/32x32" alt=""> Uncharted 4 <span class="label label-primary pull-right">PS4</span></a></li>
						<li><a href="#"><img src="holder.js/32x32" alt=""> GTA 5 <span class="label label-warning pull-right">PC</span></a></li>
						<li class="dropdown-footer"><a href="#">Tout voir</a></li>
					</ul>
				</div>

				@endif

				<a href="#" data-toggle="modal-search"><i class="fa fa-search"></i></a>
			</div>
		</div>
	</header>
	<!-- /header -->
	
	<div class="modal-search">
		<div class="container">
			<input type="text" class="form-control" placeholder="Type to search...">
			<i class="fa fa-times close"></i>
		</div>
	</div><!-- /search -->

	@yield('content')

	<!-- footer -->
	<footer>
		<div class="container">
			<div class="widget row">
				<div class="col-lg-5 col-xs-12">
					<h4 class="title">A propos de Keymarket</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pharetra mattis arcu, a congue leo malesuada eu. Nam nec mauris ut odio tristique varius et eu metus. Quisque massa purus, aliquet quis blandit et, <br /> <br />mollis sed lorem. Sed vel tincidunt elit. Phasellus at varius odio, sit amet fermentum mauris.</p>
				</div>
					
				<div class="col-lg-3 col-xs-12">
					<h4 class="title">Categories</h4>
					<div class="row">
					<div class="col-lg-6 no-padding-xs no-padding-sm no-padding-md">	
					<ul class="nav">
						<li><a href="#">Playstation 4</a></li>
						<li><a href="#">XBOX ONE</a></li>
						<li><a href="#">PC</a></li>
						<li><a href="#">PS3</a></li>
					</ul>
					</div>
					<div class="col-lg-6 no-padding-xs no-padding-sm no-padding-md">
					<ul class="nav">
						<li><a href="#">Gaming</a></li>
						<li><a href="#">Portfolio</a></li>
						<li><a href="#">Videos</a></li>
						<li><a href="#">Reviews</a></li>
					</ul>
					</div>
					</div>
				</div>
		
				<div class="col-lg-4 col-xs-12">
					<h4 class="title">Alertes e-mail</h4>
					<p>Inscrivez-vous aux alertes par mail pour être notifié lorsque quelqu'un ajoute un jeu que vous souhaitez.</p>
					<form method="post" class="margin-top-25 btn-inline">
						<input type="text" class="form-control form-inverse input-lg no-border no-shadow padding-right-40" placeholder="Email..." />
						<button type="submit" class="btn btn-link color-white margin-top-5"><i class="fa fa-envelope color-white"></i></button>
					</form>
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">	
				<ul class="list-inline">
					<li><a href="#" class="btn btn-circle btn-social-icon btn-twitter" data-toggle="tooltip" title="Follow us on Twitter"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#" class="btn btn-circle btn-social-icon btn-facebook" data-toggle="tooltip" title="Follow us on Facebook"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#" class="btn btn-circle btn-social-icon btn-google-plus" data-toggle="tooltip" title="Follow us on Google"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#" class="btn btn-circle btn-social-icon btn-flickr" data-toggle="tooltip" title="Follow us on Flickr"><i class="fa fa-flickr"></i></a></li>
				</ul>
				&copy; 2015 Keymarket. All rights reserved.
			</div>
		</div>
	</footer>	
	<!-- /.footer -->
	
	<div id="signin" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="signin-title" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h3 class="modal-title" id="signin-title"><i class="fa fa-sign-in"></i> Connexion</h3>
				</div>
				<form>
				<div class="modal-body modal-padding">
					<a class="btn btn-block btn-social btn-facebook margin-bottom-10 border-radius-6"><i class="fa fa-facebook"></i> Connexion avec Facebook</a>
						
					<div class="separator"><span>ou</span></div>
					<input type="text" class="form-control input-lg" name="username" placeholder="Email address" required>
					<span class="help-block"></span>				
					<input type="password" class="form-control input-lg" name="password" placeholder="Password" required>	
					<div class="checkbox margin-top-20 no-margin-bottom">
						<input type="checkbox" id="checkbox" checked="checked"> 
						<label for="checkbox">Se souvenir de moi</label>
					</div>
				</div>
				<div class="modal-footer bg-white no-border margin-bottom-10">
					<button type="submit" class="btn btn-lg btn-block btn-success">Connexion</button>
					<div class="text-center"><a href="#" class="color-grey-600 margin-top-20 display-block">Déja enregistré ?</a></div>
				</div>
				</form>
			</div>
		</div>
	</div><!-- /.modal --> 
	
	<!-- Javascript -->

	<!-- FACEBOOK -->
	<script src="{{ URL::asset('js/facebook.js') }}"></script>

	<script src="plugins/jquery/jquery-1.11.1.min.js"></script>
	<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="plugins/core.js"></script>
	<script src="plugins/owl-carousel/owl.carousel.min.js"></script>
	<script>
	(function($) {
	"use strict";
		var owl = $(".owl-carousel");
			 
		owl.owlCarousel({
			items : 4, //4 items above 1000px browser width
			itemsDesktop : [1000,3], //3 items between 1000px and 0
			itemsTablet: [600,1], //1 items between 600 and 0
			itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
		});
			 
		$(".next").click(function(){
			owl.trigger('owl.next');
			return false;
		})
		$(".prev").click(function(){
			owl.trigger('owl.prev');
			return false;
		})
	})(jQuery);
	</script>
</body>
</html>
