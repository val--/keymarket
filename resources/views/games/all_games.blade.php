@extends('layouts.main')

@section('content')
<!-- Content -->
	<div id="wrapper">	
		
		<section class="bg-primary padding-25">
			<div class="container text-center">
				<h2 class="font-size-26 color-white font-weight-300 font-open-sans">Voici la liste des jeux</h2>
			</div>
		</section>
		
				
		<section class="bg-grey-100 padding-top-60 padding-bottom-60 relative">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
						<div class="entry-post">
							<div class="thumb">
								<img src="holder.js/460x215" alt="">
								<div class="thumb-info"><span class="label label-warning">Steam key</span></div>
								<div class="thumb-nav"><a href="games-single.html"><i class="fa fa-heart-o"></i> <span>15</span></a></div>
							</div>
							<div class="caption">
								<h3 class="main-title"><a href="games-single.html">Alien Isolation Remastered</a></h3>
								<p class="margin-bottom-20">Aliquam imperdiet augue dui, non fermentum dolor aliquam in. Nunc molestie nunc...</p>
								<a href="games-single.html" class="btn btn-block btn-primary">View Game</a>
							</div>
						</div>
					</div>
							
					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
						<div class="entry-post">
							<div class="thumb">
								<img src="holder.js/460x215" alt="">
								<div class="thumb-info"><span class="label label-success">Steam gift</span></div>
								<div class="thumb-nav"><a href="games-single"><i class="fa fa-heart-o"></i> <span>6</span></a></div>
							</div>
							<div class="caption">
								<h3 class="main-title"><a href="games-single.html">Witcher 3 Limited Edition</a></h3>
								<p class="margin-bottom-20">Nam id velit vitae nisi tempus blandit nec commodo est. Vivamus justo nunc, malesuada...</p>
								<a href="games-single.html" class="btn btn-block btn-primary">View Game</a>
							</div>
						</div>
					</div>
							
					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
						<div class="entry-post">
							<div class="thumb">
								<img src="holder.js/460x215" alt="">
								<div class="thumb-info"><span class="label label-primary">Humble gift</span></div>
								<div class="thumb-nav"><a href="games-single"><i class="fa fa-heart-o"></i> <span>6</span></a></div>
							</div>
							<div class="caption">
								<h3 class="main-title"><a href="games-single.html">Last of Us Remastered</a></h3>
								<p class="margin-bottom-20">Ullam feugiat, libero pharetra tempor pulvinar, eros purus faucibus augue, vel laoreet...</p>
								<a href="games-single.html" class="btn btn-block btn-primary">View Game</a>
							</div>
						</div>
					</div>	
							
					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
						<div class="entry-post">
							<div class="thumb">
								<img src="holder.js/460x215" alt="">
								<div class="thumb-info"><span class="label label-primary">Humble Gift</span></div>
								<div class="thumb-nav"><a href="games-single"><i class="fa fa-heart-o"></i> <span>10</span></a></div>
							</div>
							<div class="caption">
								<h3 class="main-title"><a href="games-single.html">Uncharted 4 Extended</a></h3>
								<p class="margin-bottom-20">Etiam bibendum, justo et gravida tristique, augue nunc accumsan leo, eget convallis...</p>
								<a href="games-single.html" class="btn btn-block btn-primary">View Game</a>
							</div>
						</div>
					</div>
							
					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
						<div class="entry-post">
							<div class="thumb">
								<img src="holder.js/460x215" alt="">
								<div class="thumb-info"><span class="label label-warning">Steam gift</span></div>
								<div class="thumb-nav"><a href="games-single"><i class="fa fa-heart-o"></i> <span>32</span></a></div>
							</div>
							<div class="caption">
								<h3 class="main-title"><a href="games-single.html">Grand Theft Auto 5</a></h3>
								<p class="margin-bottom-20">Donec elementum dolor eu mi elementum vulputate. Vivamus condimentum mauris...</p>
								<a href="games-single.html" class="btn btn-block btn-primary">View Game</a>
							</div>
						</div>
					</div>
							
					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
						<div class="entry-post">
							<div class="thumb">
								<img src="holder.js/460x215" alt="">
								<div class="thumb-info"><span class="label label-danger">Humble gift</span></div>
								<div class="thumb-nav"><a href="games-single"><i class="fa fa-heart-o"></i> <span>15</span></a></div>
							</div>
							<div class="caption">
								<h3 class="main-title"><a href="games-single.html">Assassin's Creed United</a></h3>
								<p class="margin-bottom-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas elementum, lacus...</p>
								<a href="games-single.html" class="btn btn-block btn-primary">View Game</a>
							</div>
						</div>
					</div>	
				</div>
				
				<div class="text-center"><a href="games.html" class="btn btn-primary btn-lg btn-shadow btn-rounded margin-top-10 margin-bottom-20">Show More <i class="fa fa-angle-right margin-left-10"></i></a></div>
			</div>
		</section>
					
		<section class="bg-success padding-25">
			<div class="container text-center">
				<h2 class="font-size-26 color-white font-weight-300 font-open-sans">Keymarket est actuellement en beta, merci de signaler les bugs que vous rencontrez <a href="">ici</a></h2>
			</div>
		</section>
	</div>
@endsection