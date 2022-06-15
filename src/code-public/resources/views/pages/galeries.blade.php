@extends('pages.principal')
@section('content')

{{-- @php
foreach($places as $value){}

@endphp --}}

<section class="padding position-relative margin-top parallax parallax-image-2">
    <div class="container">
        <!-- HEADING TITLE -->
        <div class="trheading wow fadeInDown" data-wow-duration="2s" data-wow-delay=".4s">
            <h2 id="categorie">selectionné<br>
                categorie</h2>
        </div>
        <!-- start image content -->
        
    <!-- start image content -->
     <div class="slider category-slider">
        @forelse ($categories as $value)
    <div class="trCategoryItem">
            
        
        <div class="tr-image-class">
          <a href="/endroit/{{$value->id_categorie}}">  <img  src="assets/images/categorie/{{$value->photo_categorie}}" class="img-fluid"
                 alt=""></a>
            <div class="trCategoryButton"><a href="/endroit/{{$value->id_categorie}}">{{$value->name_categorie}}</a> </div>
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

<p class="text-center categorie">Center aligned text on all viewport sizes.</p>
<p class="text-sm-center">Center aligned text on viewports sized SM (small) or wider.</p>
<p class="text-md-center">Center aligned text on viewports sized MD (medium) or wider.</p>
<p class="text-lg-center">Center aligned text on viewports sized LG (large) or wider.</p>
<p class="text-xl-center">Center aligned text on viewports sized XL (extra-large) or wider.</p>

<div class="row flex">

			
    <div class="col-lg-6 col-sm-4">
        <div class="thumbnail">
            <img src="https://source.unsplash.com/8oydDuX4AAM">
        </div>
    </div>
    <div class="col-lg-6 col-sm-4">
        <div class="thumbnail">
            <img src="https://source.unsplash.com/PN_c3RKCVlA">
        </div>
    </div>

</div>
 

<section class="section section-sm bg-default">
    <div class="container">
        {{-- @forelse ($places as $value) --}}
        <div class="row row-sm row-40 row-md-50">

            <div class="col-sm-6 col-md-12 row fadeInRight">
                <!-- Product Big-->


                <article class="product-big">
                    <div class="unit flex-column flex-md-row align-items-md-stretch">
                        <div class="unit-left"><a class="product-big-figure" href="#"><img
                                    src="{{asset('assets/images/places')}}/" alt="" width="600"
                                    height="366" /></a></div>
                        <div class="unit-body">
                            <div class="product-big-body">
                                <h5 class="product-big-title"><a href="#"></a></h5>
                                <div class="group-sm group-middle justify-content-start">
                                    <div class="product-big-rating"><span class="icon material-icons-star"></span><span
                                            class="icon material-icons-star"></span><span
                                            class="icon material-icons-star"></span><span
                                            class="icon material-icons-star"></span><span
                                            class="icon material-icons-star_half"></span></div><a
                                        class="product-big-reviews" href="#">4 customer reviews</a>
                                </div>
                                <p class="product-big-text">...</p><a class="button button-black-outline button-ujarak"
                                    href="typography-1.html">plus d'informations</a>
                            </div>
                        </div>
                    </div>
                </article>

            </div>




        </div>
       
    </div>
</section>
@endsection
