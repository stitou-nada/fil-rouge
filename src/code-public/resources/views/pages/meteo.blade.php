@extends('pages.principal')
@section('content')


 <section style=" background-size:  100% 100%; background-repeat: no-repeat ; background-image: url('assets/images/img-about/meteojfif.jfif');padding-top:300px;" class="padding trmain-slider" id="TripPlanner">   
    <div  class="container trtop-baner-content">
       <div  class="row">
            <div class="col-12 col-sm-11 col-md-9 col-lg- col-xl-12">
                <div class="siider-content">
                    <h1 class="wow fadeInDown" data-wow-duration="1.5s" data-wow-delay=".4s">Choisissez l'endroit<br>
                      En fonction des conditions météorologiques</h1>
                       
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
</div>
<br>
<div class="col-lg-8 grid-margin stretch-card">
  <!--weather card-->
  <div class="card card-weather">
    <div class="card-body">
      <div class="weather-date-location">
        <h3>{{$name}}</h3>
        <p class="text-gray">
          <span class="weather-date">
            @php
            $date = date('d-m-y h:i:s');
            echo $date;
          @endphp</span>
        </p>
      </div>
      <div class="weather-data d-flex">
        <div class="mr-auto">
          <h4 class="display-3">{{$temp}}
            <span class="symbol">&deg;</span>C</h4>
          <p>
            @forelse ($description as $value)
            {{$value['description']}}
            @empty
                
            @endforelse
            
            
          
          </p>
        </div>
      </div>
    </div>
    <div class="card-body p-0">
      <div class="d-flex weakly-weather">
        <div class="weakly-weather-item">
          <p class="mb-0">
            <img src="http://openweathermap.org/img/wn/{{$value['icon']}}@2x.png" alt="">
          </p>
          <i class="mdi mdi-weather-cloudy"></i>
          <p class="mb-0">
            30&deg;
          </p>
        </div>
        <div class="weakly-weather-item">
          <p class="mb-1">
            Mon
          </p>
          <i class="mdi mdi-weather-hail"></i>
          <p class="mb-0">
            31&deg;
          </p>
        </div>
        <div class="weakly-weather-item">
          <p class="mb-1">
            Tue
          </p>
          <i class="mdi mdi-weather-partlycloudy"></i>
          <p class="mb-0">
            28&deg;
          </p>
        </div>
        <div class="weakly-weather-item">
          <p class="mb-1">
            Wed
          </p>
          <i class="mdi mdi-weather-pouring"></i>
          <p class="mb-0">
            30&deg;
          </p>
        </div>
        <div class="weakly-weather-item">
          <p class="mb-1">
            Thu
          </p>
          <i class="mdi mdi-weather-pouring"></i>
          <p class="mb-0">
            29&deg;
          </p>
        </div>
        <div class="weakly-weather-item">
          <p class="mb-1">
            Fri
          </p>
          <i class="mdi mdi-weather-snowy-rainy"></i>
          <p class="mb-0">
            31&deg;
          </p>
        </div>
        <div class="weakly-weather-item">
          <p class="mb-1">
            Sat
          </p>
          <i class="mdi mdi-weather-snowy"></i>
          <p class="mb-0">
            32&deg;
          </p>
        </div>
      </div>
    </div>
  </div>
  <!--weather card ends-->
</div>

<!--start middle section-->
<!-- start Experience Travel With Us -->
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
    @forelse ($meteo as $value)


<div class="trCategoryItem">
        
    
    <div class="tr-image-class">
      <a href="/endroit/{{$value->id_categorie}}">  <img  src="assets/images/categorie/{{$value->photo_categorie}}" class="img-fluid"
             alt=""></a>
        <div class="trCategoryButton"><a href="/endroit/{{$value->id_categorie}}">{{$value->nom_categorie}}</a> </div>
    </div>
</div>
@empty
        
    @endforelse
</div>
</div>
    <!-- shape-eight -->
    
    <!--End shape-eight -->
</div>
</section>
@endsection