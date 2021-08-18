@extends('master')
@section('title') Showing Results for {{ $category }} @endsection

@section('css')
   <style>
      .container-results {
         margin-top: 25px;
         display: flex;
         justify-content: space-evenly;
         align-items: center;
         padding: 3em;
      }

      .card {
         margin-right: 30px;
         max-width: 20% !important;
         max-height: 20% !important;
         min-width: 20% !important;
         min-height: 20% !important;
         overflow: hidden;
      }

      .card-body a {
         text-decoration: none;
      }

      section {
         width: 100%;
         height: 100%;
      }

      section::-webkit-scrollbar {
         width: 25px;
         border-radius: 5px;
      }

      section:nth-child(2) {
         display: flex;
         justify-content: center;
         align-items: center;
         flex-wrap: wrap;
      }

      form {
         display: flex;
         overflow: hidden;
         justify-content: space-evenly;
         align-items: center;
         border-radius: 25px;
         min-width: 60% !important;
         box-sizing: border-box;
      }

      form select,
      form input {
         width: 90% !important;
         font-size: 1rem;
         outline: none;
         border: none;
         background: #fff;
         margin: 0px 20px;
         border-radius: 5px;
         text-align: center;
         padding: 10px 0;
         padding-left: 15px;
         border: 1px solid #aaa;
         padding-right: 20px;
      }

      form input[type=submit] {
         padding-left: 0;
         font-size: 1.15rem;
      }

      hr {
         height: 5px;
         border: none;
         outline: none;
         background: #aaa;
      }
   </style>
@endsection

@section('body')
<hr>
<div class="search-field">
   <form action="/search" id="searchForm">
      <select name="what">
         <option>
            {{ $category }}
         </option>
         @foreach ($cats as $cat)
            @if ($cat->cat != $category)
               <option>{{ $cat->cat }}</option>
            @endif
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
<hr>
   <div class="container-results">
      <section style="width: 30%">
         <h1>Filter</h1>
      </section>
      <section>
         @if ($count < 1)
         <span style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); padding: 10px; font-size: 1.125rem" class="alert alert-danger">No Results Found</span>
         @endif
         @foreach ($results as $result)
         <div class="card" style="width: 18rem;">
            <img class="card-img-top" style="width: 100% !important; height: 50% !important" src=".{{ $result->image }}" alt="{{ $result->title }}">
            <div class="card-body">
               <h5 class="card-title"><a href="{{ $result->title }}/details">{{ $result->title }}</a></h5>
               <div class="card-text">{{ $result->desc }}</div>
            </div>
         </div>
         @endforeach
      </div>
   </section>
      @endsection