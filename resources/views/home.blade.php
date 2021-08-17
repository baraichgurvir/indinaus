@extends('master')
@section('title') Home @endsection

@section('css')
   <style>
      .carousel-item {
         width: 100%;
         height: 82.5vh;
      }
      .carousel-item img {
         width: 100% !important;
         height: 100% !important;
      }
      .carousel-indecators {
         cursor: pointer;
      }
      form,
      .overlay {
         position: fixed;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
      }
      .overlay {
         width: 100vw;
         height: 100vh;
         background: rgba(0, 0, 0, 0.35);
      }
      form {
         padding: 2em;
         background: rgba(255, 255, 255, 0.35);
         display: flex;
         align-items: center;
         border-radius: 25px;
      }

      form input {
         width: 350px !important;
         font-size: 1.25rem;
         outline: none;
         border: none;
         background: #fff;
         margin: 0px 10px;
         border-radius: 5px;
         text-align: center;
         padding: 10px 0;
      }

      form input[type=submit] {
         font-size: 1.25rem;
      }
   </style>
@endsection

@section('body')
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
           <li data-target="#carouselExampleIndicators" class="carousel-indecators active" data-slide-to="0"></li>
           <li data-target="#carouselExampleIndicators" class="carousel-indecators" data-slide-to="1"></li>
           <li data-target="#carouselExampleIndicators" class="carousel-indecators" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img class="d-block w-100" src="https://www.fnbbuzz.com/wp-content/uploads/2019/05/expensive-hotels-in-india.jpg" alt="Hotel">
             </div>
           
           <div class="carousel-item">
             <img class="d-block w-100" src="http://static.asiawebdirect.com/m/kl/portals/india-hotel-net/shared/teasersL/TOP10s/top10-hotels/teaserMultiLarge/imageHilight/teaser.jpeg.jpg" alt="Hotel">
             
           </div>
           <div class="carousel-item">
            <img class="d-block w-100" src="https://cdn-ccnjl.nitrocdn.com/FFlOINYZCUxrEWbcRFzJMkRxycjLZyST/assets/static/optimized/blog/wp-content/uploads/2015/01/805e1ef9a547846dc13a670afe1eb57b.Taj-Rambagh-Palace-jaipur.jpg" alt="Hotel">
          </div>
         </div>
         <a class="carousel-control-prev" style="z-index: 999" href="#carouselExampleIndicators" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon"  aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" style="z-index: 999" href="#carouselExampleIndicators" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
         </a>
   </div>
   <div class="overlay"></div>
   <div class="container">
      <form action="#">
         <input type="text" name="what" placeholder="What: Ex. Food, Services, Hotels">
         <input type="text" name="where" placeholder="Where: Your City">
         <input type="submit" class="btn btn-primary" value="Search">
      </form>
   </div>
@endsection