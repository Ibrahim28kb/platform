<!DOCTYPE html>
<html lang="en">

@include('include.header')


	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div id="hot-post" class="row hot-post">
				<div class="col-md-8 hot-post-left">
					<!-- post -->
					<div class="post post-thumb">
					<a class="post-img" href="{{route('post.show', ['slug' => $first_post->slug])}}"><img src="{{$first_post->featured}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
							<a href="{{route('category.show', ['id' => $first_post->category->id])}}">{{$first_post->category->name}}</a>
							</div>
						<h3 class="post-title title-lg"><a href="blog-post.html">{{$first_post->title}}</a></h3>
							<ul class="post-meta">
							<li><a href="author.html">{{$first_post->user->name}}</a></li>
							<li> {{$first_post->created_at}} | {{$first_post->created_at->diffForHumans()}}</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
				<div class="col-md-4 hot-post-right">
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="{{route('post.show', ['slug' => $second_post->slug])}}"><img src="{{$second_post->featured}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="{{route('category.show', ['id' => $second_post->category->id])}}">{{$second_post->category->name}}</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">{{$second_post->title}}</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">{{$second_post->user->name}}</a></li>
								<li>{{$second_post->created_at}} | {{$second_post->created_at->diffForHumans()}}</li>
							</ul>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					
					<div class="post post-thumb">
						<a class="post-img" href="blog-post.html"><img src="{{$third_post->featured}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="{{route('category.show', ['id' => $third_post->category->id])}}">{{$third_post->category->name }}</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">{{$third_post->title}}</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">{{$third_post->user->name}}</a></li>
								<li>{{$third_post->created_at}} | {{$third_post->created_at->diffForHumans()}}</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
					
						<!-- post -->
					 
				
					 
						<!-- /post -->
				</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">RECENT POSTS</h2>
							</div>
						</div>
						<!-- post -->
						
						@foreach ($posts  as $post)
						
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="blog-post.html"><img src="{{$post->featured}}" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">{{$post->category->name }}</a>
									</div>
									<h3 class="post-title"><a href="blog-post.html">{{$post->title}}</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">{{$post->user->name}}</a></li>
										<li>{{$post->created_at}} | {{$post->created_at->diffForHumans()}}</li>
									</ul>
								</div>
							</div>
						</div>
						
						@endforeach 
						
					</div>
					 
					<!-- /row -->

					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
							<h2 class="title">{{$python->name}}</h2>
							</div>
						</div>
						<!-- post -->
						@foreach ($python->posts()->take(3)->get() as $post)
							
						
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="blog-post.html"><img src="{{$post->featured}}" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">{{$post->category->name}}</a>
									</div>
									<h3 class="post-title title-sm"><a href="blog-post.html">{{$post->title}}</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">{{$post->user->name}}</a></li>
										<li>{{$post->created_at}}</li>
									</ul>
								</div>
							</div>
						</div>
						@endforeach
					
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
							<h2 class="title">{{$laravel->name}}</h2>
							</div>
						</div>
						<!-- post -->
						
						@foreach ($laravel->posts()->take(3)->get() as $post)
							
						
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="blog-post.html"><img src="{{$post->featured}}" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">{{$post->category->name}}</a>
									</div>
									<h3 class="post-title title-sm"><a href="blog-post.html">{{$post->title}}</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">{{$post->user->name}}</a></li>
										<li>{{$post->created_at}}</li>
									</ul>
								</div>
							</div>
						</div>
						@endforeach
						
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">{{$django->name}}</h2>
							</div>
						</div>
						<!-- post -->
						@foreach ($django->posts()->take(3)->get() as $post)
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="blog-post.html"><img src="{{$post->featured}}" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">{{$post->category->name}}</a>
									</div>
									<h3 class="post-title title-sm"><a href="blog-post.html">{{$post->title}}</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">{{$post->user->name}}</a></li>
										<li>{{$post->created_at}}</li>
									</ul>
								</div>
							</div>
						</div>
						@endforeach
						<!-- /post -->

						<!-- post -->
						
						<!-- /post -->

						<!-- post -->
						
						<!-- /post -->
					</div>
					<!-- /row -->
				</div>
				<div class="col-md-4">
					<!-- ad widget-->
					<div class="aside-widget text-center">
						<a href="#" style="display: inline-block;margin: auto;">
							<img class="img-responsive" src="./img/ad-3.jpg" alt="">
						</a>
					</div>
					<!-- /ad widget -->

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

					<!-- category widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Categories</h2>
						</div>
						<div class="category-widget">
							<ul>
									@foreach ($categories as $category)
							
									<li><a href="#">{{$category->name}} </a></li>
									
									@endforeach
							</ul>
						</div>
					</div>
					<!-- /category widget -->

					<!-- newsletter widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Newsletter</h2>
						</div>
						<div class="newsletter-widget">
							<form>
								<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium.</p>
								<input class="input" name="newsletter" placeholder="Enter Your Email">
								<button class="primary-button">Subscribe</button>
							</form>
						</div>
					</div>
					<!-- /newsletter widget -->

					<!-- post widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Popular Posts</h2>
						</div>
						<!-- post -->
						@foreach ($postspops as $postspop)
							
					
						<div class="post post-widget">
						<a class="post-img" href="blog-post.html"><img src="{{$postspop->featured}}" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="category.html">{{$postspop->category->name}}</a>
								</div>
								<h3 class="post-title"><a href="blog-post.html">{{$postspop->title}}</a></h3>
							</div>
						</div>
						@endforeach
						
					</div>
					<!-- /post widget -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- ad -->
				<div class="col-md-12 section-row text-center">
					<a href="#" style="display: inline-block;margin: auto;">
						<img class="img-responsive" src="./img/ad-2.jpg" alt="">
					</a>
				</div>
				<!-- /ad -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-4">
					<div class="section-title">
					<h2 class="title">{{$python->name}}</h2>
					</div>
					<!-- post -->
					@foreach ($python->posts()->take(1)->get() as $post)
						
					
					<div class="post">
						<a class="post-img" href="blog-post.html"><img src="{{$post->featured}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">{{$post->category->name}}</a>
								 
							</div>
							<h3 class="post-title"><a href="blog-post.html">{{$post->title}}</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">{{$post->user->name}}</a></li>
								<li>{{$post->created_at}}</li>
							</ul>
						</div>
					</div>
					@endforeach
					<!-- /post -->
				</div>
				<div class="col-md-4">
					<div class="section-title">
						<h2 class="title">{{$laravel->name}}</h2>
					</div>
					<!-- post -->
					@foreach ($laravel->posts()->take(1)->get() as $post)
						
					
					<div class="post">
						<a class="post-img" href="blog-post.html"><img src="{{$post->featured}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">{{$post->category->name}}</a>
								 
							</div>
							<h3 class="post-title"><a href="blog-post.html">{{$post->title}}</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">{{$post->user->name}}</a></li>
								<li>{{$post->created_at}}</li>
							</ul>
						</div>
					</div>
					@endforeach
					<!-- /post -->
				</div>
				<div class="col-md-4">
					<div class="section-title">
						<h2 class="title">{{$django->name}}</h2>
					</div>
					<!-- post -->
					@foreach ($django->posts()->take(1)->get() as $post)
						
					
					<div class="post">
						<a class="post-img" href="blog-post.html"><img src="{{$post->featured}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">{{$post->category->name}}</a>
								 
							</div>
							<h3 class="post-title"><a href="blog-post.html">{{$post->title}}</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">{{$post->user->name}}</a></li>
								<li>{{$post->created_at}}</li>
							</ul>
						</div>
					</div>
					@endforeach
					<!-- /post -->
				</div>
			</div>
			<!-- /row -->

			<!-- row -->
			<div class="row">
				<div class="col-md-4">
					<!-- post -->
					@foreach ($posts1->take(3) as $post)
						
					<div class="post post-widget">
						<a class="post-img" href="blog-post.html"><img src="{{$post->featured}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">{{$post->category->name}}</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">{{$post->title}}</a></h3>
						</div>
					</div>
					@endforeach
				 
				</div>
				<div class="col-md-4">
					<!-- post -->
					@foreach ($posts2->take(3) as $post)
						
				
					<div class="post post-widget">
						<a class="post-img" href="blog-post.html"><img src="{{$post->featured}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">{{$post->category->name}}</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">{{$post->title}}</a></h3>
						</div>
					</div>
					@endforeach
				 
				</div>
				<div class="col-md-4">
					<!-- post -->
					@foreach ($posts3->take(3) as $post)
						
				
					<div class="post post-widget">
						<a class="post-img" href="blog-post.html"><img src="{{$post->featured}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">{{$post->category->name}}</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">{{$post->title}}</a></h3>
						</div>
					</div>
					@endforeach
					<!-- /post -->

					<!-- post -->
				 
					<!-- /post -->

					<!-- post -->
					 
					<!-- /post -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<!-- post -->
					@foreach ($postsifoots as $postsifoot)

					<div class="post post-row">
					<a class="post-img" href="blog-post.html"><img src="{{$postsifoot->featured}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">{{$postsifoot->name}}</a>
								
							</div>
							<h3 class="post-title"><a href="blog-post.html">{{$postsifoot->title}}</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">{{$postsifoot->user->name}}</a></li>
								<li>{{$postsifoot->created_at}}</li>
							</ul>
							<p>{{$postsifoot->content}}</p>
						</div>
					</div>
					@endforeach
				 

					<div class="section-row loadmore text-center">
						<a href="#" class="primary-button">Load More</a>
					</div>
				</div>
				<div class="col-md-4">
					<!-- galery widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Instagram</h2>
						</div>
						<div class="galery-widget">
							<ul>
								@foreach ($postsinsts  as $postsinst)

						    	<li><a href="#"><img src="{{$postsinst->featured}}" alt=""></a></li>
								
								@endforeach
							</ul>
						</div>
					</div>
					<!-- /galery widget -->

					<!-- Ad widget -->
					<div class="aside-widget text-center">
						<a href="#" style="display: inline-block;margin: auto;">
							<img class="img-responsive" src="./img/ad-1.jpg" alt="">
						</a>
					</div>
					<!-- /Ad widget -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	@include('include.footer')

	<!-- jQuery Plugins -->
	<script src={{asset("js/jquery.min.js")}}></script>
	<script src={{asset("js/bootstrap.min.js")}}></script>
	<script src={{asset("js/jquery.stellar.min.js")}}></script>
	<script src={{asset("js/main.js")}}></script>

</body>

</html>
