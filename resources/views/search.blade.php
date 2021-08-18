@extends('master')
@section('title') Showing Results for {{ $cat }} @endsection

@section('css')
   <style>
      .container-results {
         margin-top: 25px;
         padding: 3em;
      }
   </style>
@endsection

@section('body')
   <div class="container container-results">
      @foreach ($results as $result)
         <div class="card" style="width: 18rem;">
            <img class="card-img-top" src=".{{ $result->image }}" alt="{{ $result->title }}">
            <div class="card-body">
               <h5 class="card-title">{{ $result->title }}</h5>
               <div class="card-text">{{ $result->desc }}</div>
            </div>
         </div>
      @endforeach
   </div>
@endsection