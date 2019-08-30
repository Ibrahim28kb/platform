@include('include.header')
		<!-- PAGE HEADER -->
		<div class="page-header">
			<div class="page-header-bg" style="background-image: url({{asset('./img/header-2.jpg')}});"data-stellar-background-ratio="0.5"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10 text-center">
						<h1 class="text-uppercase">{{$name}}</h1>
					<p class="lead">{{$category->name}}</p>
					</div>
				</div>
			</div>
		</div>
		
		<!-- /PAGE HEADER -->
	</header>
	<!-- /HEADER -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<div class="section-row">
							<div class="section-title">
								
							<h3 class="title">{{$title}}</h3>
							</div>
							@foreach ($tags as $tag)
							<a href="{{route('tag.show', ['id' => $tag->id])}}"
								 class="badge badge-pill badge-warning" 
							style="background-color: #ee4266">{{$tag->tag}}</a>								
							@endforeach

							{{-- <h1>{{$post->created_at->toFormattedDateString()}}</h1>
							<p>{!! $post->content !!}</p> --}}

							{{-- @foreach ($post->tags as $tag)
							<a href="" class="badge badge-pill badge-warning" 
							style="background-color: #ee4266">{{$tag->tag}}</a>								
							@endforeach --}}
					</div>

					<div class="section-row">
							 

						   <br>

						   {{-- @if($prev)
						   <a href="{{route('post.show', ['slug' => $prev->slug])}}"
							 class="badge badge-secondary">Prev </a>
						   @endif
						   
        
						   @if($next)
						   <a href="{{route('post.show', ['slug' => $next->slug])}}"
							 class="badge badge-secondary">Next</a>
						   @endif
						   
						   
					</div>
					@include('include.disqus') --}}

				</div>

                      @foreach ($category->posts as $post)
						  
					 
					<!-- post -->
					<div class="col-md-4">
						<div class="post post-sm">
							<a class="post-img" href="{{route('post.show',['slug' => $post->slug])}}"><img src="{{$post->featured}}" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="{{route('post.show',['slug' => $post->slug])}}">{{$post->title}}</a>
								</div>
							<h3 class="post-title title-sm"><a href="{{route('post.show',['slug' => $post->slug])}}">{{$post->updated_at->toFormattedDateString()}}</a></h3>
								<ul class="post-meta">
									<li><a href="author.html">John Doe</a></li>
									<li>{{$post->created_at->toFormattedDateString()}}</li>
								</ul>
								<p>{{$post->content}}</p>
							</div>
						</div>
					</div>
					@endforeach
					<!-- /post -->



				<div class="col-md-4">
					<!-- social widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Social Media</h2>
						</div>
						<div class="social-widget">
							<ul>
								<li>
									<a href="#" class="social-facebook">
										<i class="fa fa-facebook"></i>
										<span>21.2K<br>Followers</span>
									</a>
								</li>
								<li>
									<a href="#" class="social-twitter">
										<i class="fa fa-twitter"></i>
										<span>10.2K<br>Followers</span>
									</a>
								</li>
								<li>
									<a href="#" class="social-google-plus">
										<i class="fa fa-google-plus"></i>
										<span>5K<br>Followers</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- /social widget -->

					<!-- newsletter widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Newsletter</h2>
						</div>
						<div class="newsletter-widget">
							<form>
							 
								<input class="input" name="newsletter" placeholder="Enter Your Email">
								<button class="primary-button">Subscribe</button>
							</form>
						</div>
					</div>
					<!-- /newsletter widget -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->
	
	@include('include.footer')

	<!-- jQuery Plugins -->
	<script src="{{asset('js/jquery.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>
</body>

</html>
