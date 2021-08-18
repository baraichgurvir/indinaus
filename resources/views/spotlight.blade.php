@extends('master')

@section('title')
    {{ $result->title }}
@endsection

@section('css')
   <style>
      .details-cont {
         width: 100vw;
         height: 87vh;
         display: flex;
         justify-content: space-evenly;
         align-items: center;
      }

      .details-cont section {
         width: 100%;
      }

      .details-cont section:nth-child(1) {
         width: 35%;
         overflow: hidden;
         margin-left: 20px;
         padding: 2em;
         box-shadow: 0 0 32px 0 rgba(0, 0, 0, 0.2), 0 0 32px 64px rgba(0, 0, 0, 0.1);
         border: 0.5px solid rgba(0, 0, 0, 0.5);
         border-radius: 10px;
      }

      .image {
         max-width: 100%;
         max-height: 50%;
         display: flex;
         align-items: center;
         overflow: hidden;
      }

      section ul {
         list-style: none;
         padding: 0
      }
      section ul li {
         padding: 10px;
         background: rgb(245, 240, 240);
         margin-top: 10px;
      }
      .details-cont section:nth-child(2) {
         align-items: top;
      }

      @media screen and (max-height: 768px) {
         section:nth-child(1) {
            transform: scale(0.7)
         }
      }
   </style>
@endsection

@section('body')
   <div class="details-cont">
      <section>
         <div class="image">
            <img src="{{ $result->image }}" width="200%" height="200%" alt="">
         </div>
         <div class="section">
            <ul>
               <li class="title"><h5>{{ $result->title }} - &nbsp;<span class="rating" style="font-size: 0.95rem">{{ $result->rating }} stars</span></h5></li>
               @if ($result->price != 'not having')
                  <li class="price">{{ $result->price }}</li>
               @endif
               @if ($result->desc != 'not having' && $result->desc != '')
                  <li class="desc">{{ $result->desc }}</li>
               @endif
               <li class="address">{{ $result->address }}, {{ $result->city }}, Australia</li>
               <li class="mobile">Mobile no: {{ $result->phoneNumber }}</li>
            </ul>
         </div>
      </section>
      <section>
         {{-- <h1 style="margin-top: 10px">Reviews</h1>
         <div class="review">
            <h3>Lorem ipsum dolor sit.</h3>
            <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium dicta, ipsam, reiciendis nam illo molestiae repudiandae ratione, ipsa illum libero fugiat maxime!</span>
         </div> --}}
      </section>
   </div>
@endsection