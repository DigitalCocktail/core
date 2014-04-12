@extends(theme_view('layout'))

@section('description')
{{ trim(substr($post->content, 0, 156)) }}
@stop

@section('title')
{{ $post->title }}
@stop

@section('content')
	<article>
		<header class="articulo-header">
			<h1>{{ $post->title }}</h1>
		</header>
		<!-- Twitter -->
		<a href="https://twitter.com/share" class="twitter-share-button" data-lang="es">Twittear</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		<!-- Facebook -->		
		<div class="fb-like" data-href="http://digitalcocktail.co" data-layout="box_count" data-action="like" data-show-faces="false" data-share="false"></div>

		<!-- Google Plus -->
		<div class="g-plusone" data-size="tall"></div>

		<!-- Place this tag after the last +1 button tag. -->
		<script type="text/javascript">
		  window.___gcfg = {lang: 'es-419'};

		  (function() {
		    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		    po.src = 'https://apis.google.com/js/platform.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
		  })();
		</script>			
		{{ $post->parsed_content }}
		@include(theme_view('inc.tags'))
		<!-- Twitter -->
		<a href="https://twitter.com/share" class="twitter-share-button" data-lang="es">Twittear</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		<!-- Facebook -->
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1&appId=1477313795816778";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>			
			<div class="fb-like" data-href="http://digitalcocktail.co" data-layout="box_count" data-action="like" data-show-faces="false" data-share="false"></div>

			<!-- Google Plus -->
			<div class="g-plusone" data-size="tall"></div>

			<!-- Place this tag after the last +1 button tag. -->
			<script type="text/javascript">
			  window.___gcfg = {lang: 'es-419'};

			  (function() {
			    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
			    po.src = 'https://apis.google.com/js/platform.js';
			    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
			  })();
			</script>		
		<div class="fb-comments" data-href="{{ url('/').'/blog/'.$post->slug }}" data-numposts="10" data-colorscheme="light"></div>			
	</article>
@stop

