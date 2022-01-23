<br><div class="col-md-4">
	<div class="aside-widget">
		<div class="section-title">

			<h2 class="title">Kategori Berita</h2></div>
				<div class="category-widget">

					<ul class="list-group list-group-flush">

						@foreach($category_widget as $result2)
							<li>
								<a href="{{ route('blog.category', $result2->slug)}}">{{ $result2 -> namec}}
									<span>{{ $result2->posts->count() }}</span></a>
							</li>
						@endforeach
						
					</ul>
	</div>
</div>