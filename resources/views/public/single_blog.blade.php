<!DOCTYPE html>
<html lang="en">

<head>
    <title>Food Blog - Web Template</title>
    <meta charset="UTF-8">
    <meta name="description" content="Food Blog Web Template">
    <meta name="keywords" content="food, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="{{ asset('asset/front/img/favicon.ico') }}" rel="shortcut icon" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700" rel="stylesheet">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('asset/front/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('asset/front/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('asset/front/css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('asset/front/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('asset/front/css/style.css') }}" />


    <!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') }}""></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}""></script>
	<![endif]-->

</head>

<body>
    <!-- Page Preloder
	<div id="preloder">
		<div class="loader"></div>
	</div> -->

    @include ('layout.front.header')

    <!-- Recipe big view -->
</br>
	<div class="recipe-view-section">
		<div class="rv-warp set-bg" data-setbg="{{ asset('asset/front/img/recipes/single-big.jpg') }}"></div>
	</div>

    <!-- Recipe details section -->
    <!-- Recipe details section -->
	<section class="recipe-details-section">
		<div class="container">
			<div class="recipe-meta">
				<div class="racipe-cata">
					<span>For Begginers</span>
				</div>
				<h2>Lamb Chops with green peper sauce</h2>
				<div class="recipe-date">May 15, 2018</div>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star is-fade"></i>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-5">
					<div class="recipe-filter-warp">
						<div class="filter-top">
							<div class="filter-top-text">
								<p>Prep: 15 mins</p>
								<p>Cook: 30 mins</p>
								<p>Yields: 8 Servings</p>
							</div>
						</div>
						<!-- recipe filter form -->
						<div class="filter-form-warp">
							<h2>Recipe</h2>
							<form class="filter-form">
								<div class="check-warp">
									<input type="checkbox" id="one">
									<label for="one">4 Tbsp (57 gr) butter</label>
								</div>
								<div class="check-warp">
									<input type="checkbox" id="two">
									<label for="two">2 large eggs</label>
								</div>
								<div class="check-warp">
									<input type="checkbox" id="three">
									<label for="three">2 yogurt containers granulated sugar</label>
								</div>
								<div class="check-warp">
									<input type="checkbox" id="four">
									<label for="four">1 vanilla or plain yogurt, 170g container</label>
								</div>
								<div class="check-warp">
									<input type="checkbox" id="five">
									<label for="five">White flour</label>
								</div>
								<div class="check-warp">
									<input type="checkbox" id="six">
									<label for="six">1.5 yogurt containers milk</label>
								</div>	
								<div class="check-warp">
									<input type="checkbox" id="seven">
									<label for="seven">1/4 tsp cinnamon</label>
								</div>
								<div class="check-warp">
									<input type="checkbox" id="eight">
									<label for="eight">1 cup fresh blueberries </label>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-7">
					<ul class="recipe-info-list">
						<li>
							<h2>Title</h2></br> </br>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magni. </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magni. </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magni. </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magni. </p>


                            
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- Recipe details section end -->
    




        

    
   
    
    @include ('layout.front.footer_widgets')
    <!-- Comment section -->
        
</br>
	<section class="comment-section spad pt-0">
		<div class="container">
			<h4>Leave a comment</h4>
			<form class="comment-form">
				<div class="row">
					<div class="col-md-6">
						<input type="text" placeholder="Name">
					</div>
					<div class="col-md-6">
						<input type="text" placeholder="E-mail">
					</div>
					<div class="col-md-12">
						<input type="text" placeholder="Subject">
						<textarea placeholder="Message"></textarea>
						<button class="site-btn">Send</button>
					</div>
				</div>
			</form>
		</div>
	</section>
	<!-- Comment section -->

    
    @include ('layout.front.gallary')
    @include ('layout.front.footer')

    <!--====== Javascripts & Jquery ======-->
    <script src="{{ asset('asset/front/js/jquery-3.2.1.min.js') }}""></script>
	<script src=" {{ asset('asset/front/js/owl.carousel.min.js') }}""></script>
    <script src="{{ asset('asset/front/js/main.js') }}""></script>
</body>
</html>