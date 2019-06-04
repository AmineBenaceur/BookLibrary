@extends('layouts.app')

@section('content')

	@if(is_null($book))

		<a href="/books" class="btn btn-default">Go Back </a>
		<h1> oops! Something messed up mannnng </h1>

	@else
	 <a href="/books" class="btn btn-default"> Go Back </a>
   <div class="container">


         <h2> {{$book->Name}} </h2>
         <h4> {{$book->Authors}}</h4>
         <div class="p-2 border align-self-center">
         <img src="{{$book->Image}}" >
       </div>
    </div>
	@endif

@endsection
