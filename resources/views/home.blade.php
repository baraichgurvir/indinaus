@extends('master')
@section('title') Home @endsection

@section('css')
   <style>
      .carousel-item {
         width: 100%;
         height: 87.5vh;
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
         left: 73%;
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
         overflow: hidden;
         justify-content: space-evenly;
         align-items: center;
         border-radius: 25px;
         min-width: 60% !important;
         box-sizing: border-box;
         left: 62%;
      }

      form select,
      form input {
         width: 90% !important;
         font-size: 1.25rem;
         outline: none;
         border: none;
         background: #fff;
         margin: 0px 10px;
         border-radius: 5px;
         text-align: center;
         padding: 10px 0;
         padding-left: 15px; 
      }

      form input[type=submit] {
         padding-left: 0;
         font-size: 1.25rem;
      }

      .mainsection {
         display: flex;
         justify-content: space-evenly;
         align-items: center;
      }

      .mainsection > section {
         width: 100%;
         height: 85vh;
      }

      .mainsection > section > sidebar {
         width: 100%;
         height: 100%;
      }
      
      .mainsection > section > sidebar > ul::-webkit-scrollbar {
         width: 0;
      }

      .mainsection > section > sidebar > ul {
         overflow: scroll;
         overflow-x: hidden;
         margin-top: 10px;
         list-style: none;
         width: 100%;
         height: 80vh;
         margin-left: -30px;
      }

      .mainsection > section > sidebar > ul > li {
         padding: 15px;
         border-bottom: 2px solid #808080;
      }
   </style>
@endsection

@section('body')
      <div class="mainsection">
         <section style="width: 30% !important">
            <sidebar>
               <ul>
                  @foreach ($cats as $cat)
                     <li><a href="/search?what={{ $cat->cat }}" style="text-decoration: none;">{{ $cat->cat }}</a></li>
                  @endforeach
               </ul>
            </sidebar>
         </section>
         <section>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators">
                 <li data-target="#carouselExampleIndicators" class="carousel-indecators active" data-slide-to="0"></li>
                 <li data-target="#carouselExampleIndicators" class="carousel-indecators" data-slide-to="1"></li>
                 <li data-target="#carouselExampleIndicators" class="carousel-indecators" data-slide-to="2"></li>
                 <li data-target="#carouselExampleIndicators" class="carousel-indecators" data-slide-to="3"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <img class="d-block w-100" src="/Images/food.jpg" alt="Indian Food">
                   </div>
                 
                 <div class="carousel-item">
                   <img class="d-block w-100" src="/Images/education.jpeg" alt="Indian Education">
                 </div>
                 <div class="carousel-item">
                  <img class="d-block w-100" src="/Images/trade.png" alt="Trade Service">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="/Images/medical.jpeg" alt="Medical">
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
            <form action="/search" id="searchForm">
               <select name="what">
                  <option>
                     Choose Category
                  </option>
                  @foreach ($cats as $cat)
                     <option>{{ $cat->cat }}</option>
                  @endforeach
               </select>
               <select name="where">
                  <option>
                     Choose City 
                  </option>
                  @foreach ($cities as $city)
                     <option>{{ $city->city }}</option>
                  @endforeach
               </select>
               <input type="submit" class="btn btn-primary" style="cursor: pointer" value="Search">
            </form>
         </div>
         </section>
      </div>
@endsection