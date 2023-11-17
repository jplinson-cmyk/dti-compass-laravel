@extends('layouts.employee')

@section("content")



<div style="margin-top:50px;">
	@php $cur_page = 2 @endphp
	<ul class="compass-breadcrumb py-2 border-bottom">
  		<li><a href="#">About</a></li>
  		<li><a href="#">Instructions</a></li>
		@if($categories)
			@foreach($categories as $category)
				@if($category->id == $cur_page)
		  		<li class="active"><a id = "{{$category->id}}" class = "competency-category" href="#">{{$category->category_name}}</a></li>
		  		@else
		  		<li><a id = "{{$category->id}}" class = "competency-category" href="#">{{$category->category_name}}</a></li>
		  		@endif
	  		@endforeach
  		@endif
	</ul>
</div>
 @yield('compass-content')

@endsection