<div class="col-md-4">
					<div class="aside-widget text-center">
						<a href="#" style="display: inline-block;margin: auto;">
							<img class="img-responsive" src="./img/ad-3.jpg" alt="">
						</a>
					</div>
					<!-- /ad widget -->

					<!-- category widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Categories</h2>
						</div>
						<div class="profilcategory-widget">
							<ul>
							@foreach($category_widget as $result2)
							<li>
								<a href="{{ route('blog.category', $result2->slug)}}">{{ $result2 -> namec}}
									<span>{{ $result2->posts->count() }}</span></a>
							</li>
						@endforeach
							</ul>
						</div>
					</div>