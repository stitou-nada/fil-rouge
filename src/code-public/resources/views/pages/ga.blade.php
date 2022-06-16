<header class="header" id="myHeader">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6 col-md-4 col-lg-2">
                <div class="logo">
                    <a href="index.html">
                        <img src="{{asset('assets/images/logo/1.png')}}" class="img-fluid" alt="The Adevnto Logo Image">
                    </a>
                </div>
            </div>
            <div class="col-6 col-md-8 col-lg-10">
                <!-- Nav -->
                <nav class="navbar navbar-expand-lg nabar-own p-0">
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation"> 
                        <span class="navbar-toggler-icon">
                            <span class="menu_line_1"></span>
                            <span class="menu_line_2"></span>
                            <span class="menu_line_3"></span>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse tr-nabar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto align-self-center">
                            <li class="nav-item tr-nav-item"><a class="nav-link" href="#TripPlanner">Accueil</a>
                            </li>
                            <li class="nav-item tr-nav-item"><a class="nav-link" href="#meteo">Météo</a>
                            </li>
                            <li class="nav-item tr-nav-item"><a class="nav-link" href="#Destination">À-propos </a>
                            </li>
                            <li class="nav-item tr-nav-item"><a class="nav-link" href="#categorie">Categories</a>
                            </li>
                            
                        </ul>
                       
                    </div>
                </nav>
               
              
            </div>
        </div>
    </div>
</header>
<!DOCTYPE HTML>
<html lang="en-US">

<body>
	<div id="fb-root"></div>
	<!-- <div id="fork-this">
		<a href="https://github.com/brutaldesign/swipebox"></a>
	</div> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content="A touchable jQuery lightbox plugin for desktop, mobile and tablet" />
	<meta property="og:site_name" content="Swipebox" />
	<meta property="og:url" content="http://brutaldesign.github.com/swipebox/" />
	<meta property="og:image" content="http://swipebox.csag.co/images/swipe250.jpg" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Swipebox | A touchable jQuery lightbox" />
	<meta property="og:description" content="Swipebox is a jQuery lightbox plugin for desktop, mobile and tablet">
	<meta itemprop="name" content="Swipebox | A touchable jQuery lightbox">
	<meta itemprop="image" content="http://swipebox.csag.co/images/swipe250.jpg">
	<meta itemprop="description" content="Swipebox is a jQuery lightbox plugin for desktop, mobile and tablet">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700|Merriweather:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{asset('demo/normalize.css')}}">
	<link rel="stylesheet" href="{{asset('demo/bagpakk.min.css')}}">
	<link rel="stylesheet" href="{{asset('demo/style.css')}}">
	<link rel="stylesheet" href="{{asset('src/css/swipebox.css')}}"> 	
	<title>Swipebox | A Touchable jQuery Lightbox</title> 
	
	<section id="exemple" class="container">
		<div class="wrap">
			<div id="try"></div>
			<ul id="box-container">
				<li class="box">
					<a href="demo/images/big-1.jpg" class="swipebox" title="Fog" rel="gallery">
						<img src="demo/images/small-1.jpg" alt="image">
					</a>
				</li>
				<li class="box">
					<a href="demo/images/big-2.jpg" class="swipebox" title="City" rel="gallery">
						<img src="demo/images/small-2.jpg" alt="image">
					</a>
				</li>
				<li class="box">
					<a href="demo/images/big-3.jpg" class="swipebox" title="Street" rel="gallery">
						<img src="demo/images/small-3.jpg" alt="image">
					</a>
				</li>
				<li class="box">
					<a href="demo/images/big-4.jpg" class="swipebox" title="Mustache Guy" rel="gallery">
						<img src="demo/images/small-4.jpg" alt="image">
					</a>
				</li>
			</ul>
		</div>
	
	<script src="lib/jquery-3.5.1.min.js"></script>
	<script src="src/js/jquery.swipebox.js"></script>
	<script type="text/javascript">
	$( document ).ready(function() {

			/* Basic Gallery */
			$( '.swipebox' ).swipebox();
			
			/* Video */
			$( '.swipebox-video' ).swipebox();

			/* Dynamic Gallery */
			$( '#gallery' ).on( 'click', function( e ) {
				e.preventDefault();
				$.swipebox( [
					{ href : 'demo/images/big-1.jpg', title : 'My Caption' },
					{ href : 'demo/images/big-2.jpg', title : 'My Second Caption' }
				] );
			} );

			/* Smooth scroll */
			$( '.scroll' ).on( 'click', function () {
				$( 'html, body' ).animate( { scrollTop: $( $( this ).attr('href') ).offset().top - 15 }, 750 ); // Go
				return false;
			});
      } );
	</script>
</body>
	
</html>
