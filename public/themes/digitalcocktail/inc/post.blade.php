<article>
	<header>
		<h1><a href="{{ url('blog/'.$post->slug) }}">{{ $post->title }}</a></h1>
	</header>
	<figure><img src="" alt=""></figure>
	{{ $post->parsed_intro }}
	<footer class="metadatos">
		<div class="fecha">
			<span class="dia">{{ date("d", strtotime($post->publish_date)) }}</span>
			<span class="mes">{{ date("M", strtotime($post->publish_date)) }}</span>
			<span class="ano">{{ date("Y", strtotime($post->publish_date)) }}</span>
		</div>
		<div class="autor">
			<p><span>Por</span> {{ $post->user->first_name }} {{ $post->user->last_name }}</p>
		</div>
		<div class="comentarios">5</div>
		<div class="leer-mas-articulos"><a href="{{ url('blog/'.$post->slug) }}" class="btn-leer-mas">Leer más</a></div>
	</footer>
</article><!-- Fin artículo -->
