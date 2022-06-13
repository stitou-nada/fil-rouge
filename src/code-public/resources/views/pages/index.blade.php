@extends('pages.principal')
@section('content')
<section style="background-image: url('assets/images/img-about/17.jpg');" class="padding trmain-slider" id="TripPlanner">
            
    <div  class="container trtop-baner-content">
        <div  class="row">
            <div class="col-12 col-sm-11 col-md-9 col-lg- col-xl-7">
                <div class="siider-content">
                    <h1 class="wow fadeInDown" data-wow-duration="1.5s" data-wow-delay=".4s">les suggestions<br>
                        des endroits touristiques à Tanger.</h1>
                        <p class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s">Une ville portuaire embrassée par la mer et l'océan
                            Un lieu de rencontre pour trois cultures - africaine, marocaine et européenne
                         </p>
                        <!-- <form class="tr-slider-form wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".4s">
                            <div class="form-group position-relative mb-0">
                            <button type="submit" class="btn btn-primary ">Search</button>
                            
                        </div>
                    </form> -->
                </div>
            </div>
        </div>
    </div>
   
</section>
</div>
<!--start middle section-->
<!-- start Experience Travel With Us -->
<section class="padding position-relative margin-top parallax parallax-image-2">
<div class="container">
    <!-- HEADING TITLE -->
    <div class="trheading wow fadeInDown" data-wow-duration="2s" data-wow-delay=".4s">
        <h2>selectionné<br>
            categorie</h2>
    </div>
    <!-- start image content -->
    
<!-- start image content -->
 <div class="slider category-slider">
    @forelse ($categories as $value)
<div class="trCategoryItem">
        
    
    <div class="tr-image-class">
        <img src="assets/images/categorie/{{$value->photo_categorie}}" class="img-fluid"
             alt="">
        <div class="trCategoryButton"><a href="javascript:void(0);">{{$value->name_categorie}}</a> </div>
    </div>
</div>
@empty
        
    @endforelse
</div>
</div>
<!-- shape-four -->
<div class="shape-image-four">
    <img src="assets/images/background-shape/round-shape.png" class="img-fluid" alt="the background round shape | with Animation">
</div>
<!--End shape-four -->
</section>
<!-- start choose category -->
<section class="padding position-relative parallax parallax-image-3" id="Destination">
<!-- shape-five -->
<div class="shape-image-five wow fadeInLeft" data-wow-duration="3s">
    <img src="assets/images/background-shape/shape-5.png" class="img-fluid" alt="decorated backgound shape image | Animated">
</div>
<!--End shape-five -->
<div class="container">
    <!-- HEADING TITLE -->
    <div class="trheading wow fadeInDown" data-wow-duration="2s" data-wow-delay=".4s">
        <h2 class="mb-0">A propos<br>
            Tanger.</h2>
    </div>
    <div class="row">
        <div class="trsubHeading col-12 col-md-8 col-lg-7" >
            <p style="font-size:20px ;" class="wow fadeIn mb-3 pb-md-0 pb-5" data-wow-duration="2s" data-wow-delay=".4s">Tout au nord du Maroc, la ville de Tanger invite les voyageurs. 
                Sur ses côtes où convergent les eaux méditerranéennes et atlantiques,
                 vous découvrez une ville authentique bercée d'influences variées. 
                donc ce site qui propose des suggestions pour les endroits par météorologique.
            </p>
        </div>
        <div class="testimonial-bg">
            <div class="container">
                <div class="testimonial-slider justify-content-center ">
                    <div class="slider slider-nav trtestimonial-nav">
                        <div class="testimonial-slider-img">
                            <img src="assets/images/img-about/23.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="testimonial-slider-img">
                            <img src="assets/images/img-about/16.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="testimonial-slider-img">
                            <img src="assets/images/img-about/10.JPG" class="img-fluid" alt="">
                        </div>
                        <div class="testimonial-slider-img">
                            <img src="assets/images/img-about/17.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="testimonial-slider-img">
                            <img src="assets/images/img-about/12.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="testimonial-slider-img">
                            <img src="assets/images/img-about/9.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="testimonial-slider-img">
                            <img src="assets/images/img-about/11.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="slider slider-for col-12 col-lg-4 m-auto p-0">
                        <div class="tr-testimonial-desc text-center">
                            <h3>Kasbah</h3>
                            
                        </div>
                        <div class="tr-testimonial-desc text-center">
                            <h3>Perdicaris</h3>
                           
                        </div>
                        <div class="tr-testimonial-desc text-center">
                            <h3>Port de Tanger</h3>
                            
                        </div>
                        <div class="tr-testimonial-desc text-center">
                            <h3>Corniche</h3>
                           
                        </div>
                        <div class="tr-testimonial-desc text-center">
                            <h3>Mur de la kasbah</h3>
                            
                        </div>
                        <div class="tr-testimonial-desc text-center">
                            <h3>Grotte d'Hercule</h3>
                            
                        </div>
                        <div class="tr-testimonial-desc text-center">
                            <h3>Cap Spartel</h3>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
    <!-- shape-three -->
    <div class="position-relative wow fadIn" data-wow-duration="2s" data-wow-delay=".4s">
       
    </div>

<!-- start Adventure Trip -->
<section class="padding position-relative parallax parallax-image-4" id="Stories">
<!-- shape-seven -->

<!--End shape-seven -->
<div class="container">
    <!-- HEADING TITLE -->
    
    

    <div class="position-relative wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">
        <!-- start image content -->
        <div class="slider Trip-slider">
            <div class=" trTripItem">
                <div class="trTripContent-image" style="background: url(assets/images/img-about/15.jpg) no-repeat; background-size: cover;">
                    <!-- video tag  -->
                    <iframe controls width="500" height="500" autoplay>
                        <source  src="https://www.youtube.com/watch?v=dmn8i_nocrA" type="url">
                    </iframe>

                    <!-- iframe video -->
                    <!-- <iframe class="vid" id="yt" width="727" height="600" src="https://www.youtube.com/embed/7oDb-6kHXZo?autoplay=1" allowfullscreen allow="autoplay"></iframe> -->

                    <!-- play button -->
                    <a class="play-button" href="#"> <i class="fas fa-play"></i></a>
                </div>
            </div>
            <div class="trTripItem">
                <div class="trTripContent-image" style="background: url(assets/images/trip-images/trip-1.png) no-repeat; background-size: cover;">
                    <!-- video tag  -->
                    <video controls width="500" height="500" autoplay>
                        <source src="assets/videos/dummy_video-2.mp4" type="video/mp4">
                    </video>

                    <!-- iframe video -->
                    <!-- <iframe class="vid" id="yt" width="727" height="600" src="https://www.youtube.com/embed/7oDb-6kHXZo?autoplay=1" allowfullscreen allow="autoplay"></iframe> -->

                    <!-- play button -->
                    <a class="play-button" href="#"> <i class="fas fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- shape-eight -->
    
    <!--End shape-eight -->
</div>
</section>
@endsection