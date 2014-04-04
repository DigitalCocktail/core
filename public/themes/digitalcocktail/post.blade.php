@extends(theme_view('layout'))

@section('description')
{{ trim(substr($post->content, 0, 156)) }}
@stop

@section('title')
{{ $post->title }}
@stop

@section('content')
	<section>
		<h2 class="title">{{ $post->title }}</h2>

		{{ $post->parsed_content }}

		@include(theme_view('inc.tags'))
	</section>
	<div class="fb-comments" data-href="{{ url('/').'/blog/'.$post->slug }}" data-numposts="10" data-colorscheme="light"></div>	
@stop

