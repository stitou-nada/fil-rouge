@extends('pages.principal')
@section('content')



<section style="background-image: url('assets/images/img-about/18.jpg'); " class="padding trmain-slider" id="TripPlanner">
            
  <div  class="container trtop-baner-content">
      <div  class="row">
          <div class="col-12 col-sm-11 col-md-9 col-lg- col-xl-12">
              <div class="siider-content">
                  <h1 class="wow fadeInDown" data-wow-duration="1.5s" data-wow-delay=".4s">les endroits<br>
                    </h1>
                      
                      <!-- <form class="tr-slider-form wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".4s">
                          <div class="form-group position-relative mb-0">
                          <button type="submit" class="btn btn-primary ">Search</button>
                          
                      </div>
                  </form> -->
              </div>
          </div>
      </div>
  </div>
 <link rel="stylesheet" href="{{asset('assets/css/meteo.css')}}">
</section>
<section class="padding position-relative margin-top parallax parallax-image-2">
  <!-- shape-two -->
  
  <!--End shape-two -->
  <div class="container">
      <!-- shape-three -->
      
      <!--End shape-three -->
      <!-- HEADING TITLE -->
      <div class="trheading wow fadeInDown" data-wow-duration="2s" data-wow-delay=".4s">
          <h2>selectionné<br>
              categorie</h2>
      </div>
      <!-- start image content -->
      
 <!-- start image content -->
 <div class="slider category-slider">
  <div class="trCategoryItem">
      <div class="tr-image-class">
          <img src="assets/images/category-slider/category-image-1.png" class="img-fluid"
               alt="">
          <div class="trCategoryButton"><a href="javascript:void(0);">Mountain</a> </div>
      </div>
  </div>
  <div class=" trCategoryItem">
      <div class="tr-image-class">
          <img src="assets/images/category-slider/category-image-2.png" class="img-fluid"
               alt="">
          <div class="trCategoryButton"><a href="javascript:void(0);">Waterfall</a></div>
      </div>
      
  </div>
  <div class=" trCategoryItem">
      <div class="tr-image-class">
          <img src="assets/images/category-slider/category-image-3.png" class="img-fluid"
               alt="">
          <div class="trCategoryButton"><a href="javascript:void(0);">Snow</a></div>
      </div>
  </div>
  <div class=" trCategoryItem">
      <div class="tr-image-class">
          <img src="assets/images/category-slider/category-image-4.png" class="img-fluid"
               alt="">
          <div class="trCategoryButton"><a href="javascript:void(0);">Nature</a></div>
      </div>
  </div>
  <div class=" trCategoryItem">
      <div class="tr-image-class">
          <img src="assets/images/category-slider/category-image-1.png" class="img-fluid"
               alt="">
          <div class="trCategoryButton"><a href="javascript:void(0);">Mountain</a></div>
      </div>
  </div>
  <div class=" trCategoryItem">
      <div class="tr-image-class">
          <img src="assets/images/category-slider/category-image-2.png" class="img-fluid"
               alt="">
          <div class="trCategoryButton"><a href="javascript:void(0);">Waterfall</a></div>
      </div>
  </div>
</div>
  </div>
  <!-- shape-four -->
  <div class="shape-image-four">
      <img src="assets/images/background-shape/round-shape.png" class="img-fluid" alt="the background round shape | with Animation">
  </div>
  <!--End shape-four -->
</section>

{{--  --}}
<section class="section section-sm bg-default">
    <div class="container">
      <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Hot Tours</span></h3>
      <div class="row row-sm row-40 row-md-50">
       
       <div class="col-sm-6 col-md-12 wow fadeInRight">
          <!-- Product Big-->
          <article class="product-big">
            <div class="unit flex-column flex-md-row align-items-md-stretch">
              <div class="unit-left"><a class="product-big-figure" href="#"><img src="assets/NewFolder/hirak.jpg" alt="" width="600" height="366"/></a></div>
              <div class="unit-body">
                <div class="product-big-body">
                  <h5 class="product-big-title"><a href="#">Grottes d'Hercule</a></h5>
                  <div class="group-sm group-middle justify-content-start">
                    <div class="product-big-rating"><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star_half"></span></div><a class="product-big-reviews" href="#">4 customer reviews</a>
                  </div>
                  <p class="product-big-text">Les Grottes d'Hercule sont des cavernes naturelles situées à une dizaine de kilomètres de Tanger, au Maroc, à l'entrée atlantique du détroit de Gibraltar....</p><a class="button button-black-outline button-ujarak" href="typography-1.html">plus d'informations</a>
                </div>
              </div>
            </div>
          </article>
        </div>
       
        <div class="col-sm-6 col-md-12 wow fadeInRight">
          <!-- Product Big-->
          <article class="product-big">
            <div class="unit flex-column flex-md-row align-items-md-stretch">
            
              <div class="unit-body">
                <div class="product-big-body">
                  <h5 class="product-big-title"><a href="#">Château (Kasbah)</a></h5>
                  <div class="group-sm group-middle justify-content-start">
                    <div class="product-big-rating"><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star_half"></span></div><a class="product-big-reviews" href="#">4 customer reviews</a>
                  </div>
                  <p class="product-big-text">C'est l'un des palais les plus attrayants construits sur les collines de Tanger comme un bel exemple de l'architecture marocaine. Et il y a un musée à l'intérieur, et ce musée présente l'histoire et les antiquités de Tanger...</p><a class="button button-black-outline button-ujarak" href="typography-2.html">plus d'informations</a>
                </div>
              </div>
              <div class="unit-left"><a class="product-big-figure" href="#"><img src="assets/NewFolder/kasba(1).jpg" alt="" width="600" height="366"/></a></div>
            </div>
          </article>
        </div>
        <div class="col-sm-6 col-md-12 wow fadeInRight">
          <!-- Product Big-->
          <article class="product-big">
            <div class="unit flex-column flex-md-row align-items-md-stretch">
              <div class="unit-left"><a class="product-big-figure" href="#"><img src="assets/images2/amirecan.jpg" alt="" width="600" height="366"/></a></div>
              <div class="unit-body">
                <div class="product-big-body">
                  <h5 class="product-big-title"><a href="#">Ambassade américaine</a></h5>
                  <div class="group-sm group-middle justify-content-start">
                    <div class="product-big-rating"><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star_half"></span></div><a class="product-big-reviews" href="#">4 customer reviews</a>
                  </div>
                  <p class="product-big-text"> Ce musée est l'un des lieux touristiques les plus importants de Tanger.Le Maroc a été le premier pays à reconnaître les États-Unis en 1777.....</p><a class="button button-black-outline button-ujarak" href="typography-3.html">plus d'informations</a>
                </div>
              </div>
            </div>
          </article>
        </div>
        <div class="col-sm-6 col-md-12 wow fadeInLeft">
          <!-- Product Big-->
          <article class="product-big">
            <div class="unit flex-column flex-md-row align-items-md-stretch">
              
              <div class="unit-body">
                <div class="product-big-body">
                  <h5 class="product-big-title"><a href="#">Cap Spartel</a></h5>
                  <div class="group-sm group-middle justify-content-start">
                    <div class="product-big-rating"><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star_half"></span></div><a class="product-big-reviews" href="#">5 customer reviews</a>
                  </div>
                  <p class="product-big-text">Cap Spartel est un promontoire pittoresque est un lieu idéal pour s’échapper les foules de la vieille ville et vous trouverez sur place un phare qui date du 19e siècle...</p><a class="button button-black-outline button-ujarak" href="typography-4.html">plus d'informations</a>                    </div>
              </div>
              <div class="unit-left"><a class="product-big-figure" href="#"><img src="assets/NewFolder/jama3.jpg" alt="" width="600" height="366"/></a></div>
            </div>
          </article>
        </div>
        <div class="col-sm-6 col-md-12 wow fadeInRight">
          <!-- Product Big-->
          <article class="product-big">
            <div class="unit flex-column flex-md-row align-items-md-stretch">
              <div class="unit-left"><a class="product-big-figure" href="#"><img src="assets/NewFolder/cabin-4427535_1280.webp" alt="" width="600" height="366"/></a></div>
              <div class="unit-body">
                <div class="product-big-body">
                  <h5 class="product-big-title"><a href="#">Parc Perdicaris</a></h5>
                  <div class="group-sm group-middle justify-content-start">
                    <div class="product-big-rating"><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star_half"></span></div><a class="product-big-reviews" href="#">4 customer reviews</a>
                  </div>
                  <p class="product-big-text"> A la recherche d' un grand espace naturel pour vos ballades en famille ? Venez découvrir le parc Rmilat avec une superficie de 70 ha à quelques minutes de Tanger ...</p><a class="button button-black-outline button-ujarak" href="typography-5.html">plus d'information</a>
                </div>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
@endsection