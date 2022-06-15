<!DOCTYPE HTML>
<html lang="en-US">

<body>
	<div id="fb-root"></div>
	<!-- <div id="fork-this">
		<a href="https://github.com/brutaldesign/swipebox"></a>
	</div> -->

	
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
