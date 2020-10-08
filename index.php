<!DOCTYPE html>
<html lang="en">
<head>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/leaflet/1/leaflet.js"></script>
  <script src="js/maps.js"></script>
  <script src="js/traductor.js"></script>
  <script src="js/sss.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/leaflet/1/leaflet.css" /> 
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Explore El Salvador</title> 
    <link rel="icon" type="image/png" href="LoginPTC/images/logoicono.png">    
   
</head>
<body>
<style type="text/css">
  body{
    top: 0  !important;
    }
    .goog-te-banner-frame{
      display: none;
        }
</style>  
<?php include("includes/menu.php") ?>
<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
    <li data-target="#carousel-example-2" data-slide-to="3"></li>
    <li data-target="#carousel-example-2" data-slide-to="4"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100 slider-slide"  src="Fotos/tazumal.jpg"
          alt="First slide" width="400 px" height="500 px">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
          <h3 class="h3-responsive" style="color:#FFF">Tazumal</h3>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100 slider-slide"  src="Fotos/eltincoo.jpg"
          alt="Second slide" width="400 px" height="500 px">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
          <h3 class="h3-responsive" style="color:#FFF">El Tunco</h3>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100 slider-slide" src="Fotos/Coatepeque.jpg"
          alt="Third slide" width="400 px" height="500 px">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive" style="color:#FFF">Coatepeque Lake</h3>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100 slider-slide"  src="Fotos/cerroVerde.jpg"
          alt="Third slide" width="400 px" height="500 px">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive" style="color:#FFF">Cerro Verde</h3>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100 slider-slide"  src="Fotos/zonte.jpg"
          alt="Third slide" width="400 px" height="500 px">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive" style="color:#FFF">El Zonte beach</h3>
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->

<br><br><br><br><br><br>
<section id ="carousell">
    <!--Carousel Wrapper-->
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

      <!--Controls-->
      <div class="buttons">
        <center>
      <button class="btn-prev" href="#multi-item-example" data-slide="prev">&larr;</button>
      <button class="btn-next" href="#multi-item-example" data-slide="next">&rarr;</button>
      </center>
      <br>
    </div>
    <style type="text/css">
      .btn-prev,
.btn-next {
  width: 60px;
  height: 60px;
  margin-left: 10px;
  border: none;
  outline: none;
  border-radius: 60px;
  color: #FFFFFF;
  background: -webkit-linear-gradient(top, #2D2E2E, #2D2E2E);
  background: linear-gradient(to bottom, #2D2E2E, #2D2E2E);
  box-shadow: 0px 3px 15px 2px;
  cursor: pointer;
}

    </style>
      <!--/.Controls-->

      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item-example" data-slide-to="1"></li>
        <li data-target="#multi-item-example" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->

      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">

          <div class="row">
            <div class="col-md-4 cats-slides">
              <div class="card mb-2">
                <img class="card-img-top cats-slide" src="Fotos/eltiunco.jpg"
                  alt="Card image cap" width="45 px" height="250">
                <div class="card-body">
                  <h4 class="card-title" align="center" >Beaches</h4>
                  <p class="card-text clamp" align="justify">Discover the best beaches of El Salvador, a country with a beautiful coast bathed by the Pacific Ocean, home of privileged beaches for surfing and other jewels hidden among spectacular natural scenarios.</p>
                  <a class="btn btn-primary " style="color: #FFF" href="mostrarSitios.php?cat=beach">View more</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block cats-slides">
              <div class="card mb-2">
                <img class="card-img-top cats-slide" src="Fotos/coate.jpg"
                  alt="Card image cap" width="45 px" height="250">
                <div class="card-body">
                  <h4 class="card-title" align="center">Lakes and lagoons</h4>
                  <p class="card-text clamp" align="justify">El Salvador is one of the countries that is located above the Caribbean plate, making it the owner of more than 30 lakes and lagoons, short but abundant due to its geography. These seismic events give fame to our country, so we invite you to embark on a journey that will take you through its most beautiful corners.</p>
                  <a  class="btn btn-primary" style="color: #FFF" href="mostrarSitios.php?cat=Lakes and lagoons">View more</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block cats-slides">
              <div class="card mb-2">
                <img class="card-img-top cats-slide" src="Fotos/sanantonio.jpg"
                  alt="Card image cap" width="45 px" height="250">
                <div class="card-body">
                  <h4 class="card-title" align="center">Mountains</h4>
                  <p class="card-text clamp" align="justify">The relief of El Salvador is fascinating and is one of the main beauties of this small but at the same time great country. You can appreciate it along its geography, imposing volcanoes and mountains, as well as hills, valleys, lakes, coasts and beaches that adorn every corner of this wonderful land.</p>
                  <a class="btn btn-primary" style="color: #FFF" href="mostrarSitios.php?cat=Mountains">View more</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!--/.First slide-->

        <!--Second slide-->
        <div class="carousel-item">

          <div class="row">
            <div class="col-md-4 cats-slides">
              <div class="card mb-2">
                <img class="card-img-top cats-slide" src="Fotos/arqueo.jpg"
                  alt="Card image cap" width="45 px" height="250">
                <div class="card-body">
                  <h4 class="card-title" align="center">Archaeological sites</h4>
                  <p class="card-text clamp" align="justify">It refers to the process where people travel to historical or archaeological sites of interest. The reason why it is called Archaeological tourism, is due to the fact that they often make visits to archaeological sites where places or monuments date back to antiquity or prehistory, such as the pyramids of Egypt or in this case, El Tazumal.</p>
                  <a class="btn btn-primary" href="mostrarSitios.php?cat=Archaeological sites" style="color: #FFF">View more</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block cats-slides">
              <div class="card mb-2">
                <img class="card-img-top cats-slide" src="Fotos/necro.jpg"
                  alt="Card image cap" width="45 px" height="250">
                <div class="card-body">
                  <h4 class="card-title" align="center">Necrotourism</h4>
                  <p class="card-text clamp" align="justify">Necroturism is the new fashion in many Latin American countries and now it is also in El Salvador, so soon it is sure that many tourists are going to come to this country to enjoy Necroturism, a very different way of tourism, because it is about visiting cemeteries and enjoy this visit, always with the greatest respect. The activity have been taking place for almost ten years, inaugurated on August 27, 2008.</p>
                  <a class="btn btn-primary" href="mostrarSitios.php?cat=necrotourism" style="color: #FFF">View more</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block cats-slides">
              <div class="card mb-2">
                <img class="card-img-top cats-slide" src="Fotos/agro.jpg"
                  alt="Card image cap" width="45 px" height="250">
                <div class="card-body">
                  <h4 class="card-title" align="center">Agrotourism</h4>
                  <p class="card-text clamp" align="justify">Several agricultural cooperatives and community organizations in rural areas began to see tourism as an option in the face of the agricultural crisis and the abandonment of policies that forgot the social and economic importance of rural areas.</p>
                  <a class="btn btn-primary" href="mostrarSitios.php?cat=Agrotourism" style="color: #FFF">View more</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!--/.Second slide-->

        <!--Third slide-->
        <div class="carousel-item">

          <div class="row">
            <div class="col-md-4 cats-slides">
              <div class="card mb-2">
                <img class="card-img-top cats-slide" src="Fotos/eco.jpg"
                  alt="Card image cap" width="45 px" height="250">
                <div class="card-body">
                  <h4 class="card-title" align="center">Ecotourism</h4>
                  <p class="card-text clamp" >This is a sustainable development initiative, which through land use planning based on natural areas interconnected by activities.</p>
                  <a class="btn btn-primary"href="mostrarSitios.php?cat=ecotourism" style="color: #FFF">View more</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block cats-slides">
              <div class="card mb-2">
                <img class="card-img-top cats-slide" src="Fotos/etno.jpg"
                  alt="Card image cap" width="45 px" height="250">
                <div class="card-body">
                  <h4 class="card-title " align="center">Ethnotourism</h4>
                  <p class="card-text clamp" align="justify" >It is specialized and directed tourism that is carried out in territories of ethnic groups for cultural, educational and recreational purposes that allows knowing cultural values, way of life, environmental management, customs of ethnic groups as well as aspects of their history.</p>
                  <a class="btn btn-primary" href="mostrarSitios.php?cat=ethno-tourism"style="color: #FFF">View more</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block cats-slides">
              <div class="card mb-2">
                <img class="card-img-top cats-slide" src="Fotos/comu.jpg"
                  alt="Card image cap" width="45 px" height="250">
                <div class="card-body">
                  <h4 class="card-title" align="center"  >Community Tourism</h4>
                  <p class="card-text clamp" align="justify" >It can be defined as: sharing the natural resources of a local community with visitors from home and overseas for the sustainable benefit of that local community whilst conserving the natural environment and respecting the way of life.</p>
                  <a class="btn btn-primary"href="mostrarSitios.php?cat=Community tourism" style="color: #FFF">View more</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!--/.Third slide-->

      </div>
      <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->
    </section>

  </div>
<br>
<div id="map-example-container"></div>
<input type="search" id="input-map" class="form-control" placeholder="Find your ideal site" />

<style>
  #map-example-container {height: 500px};
</style>

<script src="https://cdn.jsdelivr.net/npm/places.js@1.18.1"></script>
<div class="p-5" style="position: absolute">
  <script>
  maps();
</script>
</div>
<br><br><br><br><br>
<head>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<center>
<button class="btn-prev2" href="#client-testimonial-carousel" data-slide="prev">&larr;</button>
<button class="btn-next2" href="#client-testimonial-carousel" data-slide="next">&rarr;</button>
<br><br>
</center>
<div class="text-dark">
  <div id="client-testimonial-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active text-center p-4"  >
        <blockquote class="blockquote text-center" >
          <p class="mb-0"><i class="fa fa-quote-left"></i>" Great job. "
          </p>
          <footer class="blockquote-footer">Carlos Miranda </footer>
        </blockquote>
      </div>
      <div class="carousel-item text-center p-4">
        <blockquote class="blockquote text-center">
          <p class="mb-0"><i class="fa fa-quote-left"></i>" I love the price of the packages  "
          </p>
          <footer class="blockquote-footer">María Abrego</footer>
        </blockquote>
      </div>
      <div class="carousel-item text-center p-4">
        <blockquote class="blockquote text-center">
          <p class="mb-0"><i class="fa fa-quote-left"></i>" This site helped me to find the best places on El Salvador. "
          </p>
          <footer class="blockquote-footer">Julian Herrera</footer>
        </blockquote>
      </div>
    </div>
    <ol class="carousel-indicators">
      <li data-target="#client-testimonial-carousel" data-slide-to="0" class="active"></li>
      <li data-target="#client-testimonial-carousel" data-slide-to="1"></li>
      <li data-target="#client-testimonial-carousel" data-slide-to="2"></li>
    </ol>
  </div>
</div>
<style type="text/css">
  body { 
  margin: 0;
  padding: 0;
}
.btn-prev2,
.btn-next2 {
  width: 60px;
  height: 60px;
  margin-left: 10px;
  border: none;
  outline: none;
  border-radius: 60px;
  color: #FFFFFF;
  background: -webkit-linear-gradient(top, #2D2E2E, #2D2E2E);
  background: linear-gradient(to bottom, #2D2E2E, #2D2E2E);
  box-shadow: 0px 3px 15px 2px;
  cursor: pointer;
}
#client-testimonial-carousel {
  min-height: 200px;
}
</style>

<!-- Footer -->
 <?php include("includes/footer.php") ?>
 
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script>googleTranslateElementInit()</script>
</body>
</html>