@extends('layouts.app')

@section('content')

	<h1 class="jumbotron jumbotron-fluid" style="text-align:center" >  BOOKS  </h1>
	

	@if(count($books) > 0 )
		@foreach($books as $book)
			<div class="well">
				<ul>
						<div class="container">
							<li class="list-group-item list-group-item-info">
								<h3><a href="/books/{{$book->id}}" > {{$book->Name}} </a> </h3>
								<p> Written By {{$book->Authors}} </p>
							</li>
						<div>
					</ul>
				</div>
		@endforeach
		<hr>
		{{$books->links()}}
	@endif
@endsection
