@extends('layouts.app')

@section('content')
	<!-- Page Header -->
    <div id="page-header">
			<!-- section background -->
			<div class="section-bg" style="background-image: url({{asset('charity/img/background-2.jpg')}});"></div>
			<!-- /section background -->

			<!-- page header content -->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="header-content">
							<h1>News & Blog</h1>
							<ul class="breadcrumb">
								<li><a href="/">Home</a></li>
								<li class="active">Blog</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /page header content -->
		</div>
		<!-- /Page Header -->
    </header>

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- MAIN -->
				<main id="main" class="col-md-9">
					<div class="row">

                        <!-- article -->
                        @if(!empty($news))
                        @foreach ($news as $new)
                        <div class="col-md-6">
                                <div class="article">
                                        <a href="{{ route('news.show', $new->id) }}">
                                    <div class="article-img">

                                            <img src="{{ Voyager::image($new->image) }}" alt="" style="width:100% ; height:250px">

                                    </div>
                                    <div class="article-content">
                                        <h3 class="article-title"><a href="single-blog.html">{{$new->title}}</a></h3>
                                        <ul class="article-meta">
                                            <li>{{$new->created_at->toDayDateTimeString()}} </li>
                                            <li>By PTYIF</li>
                                            {{-- <li>0 Comments</li> --}}
                                        </ul>
                                        <p class="class-span">{{$new->body}}</p>
                                    </div> </a>
                                </div>
                            </div>
                        @endforeach
                        @endif

						<!-- /article -->

						{{-- <!-- article -->
						<div class="col-md-6">
							<div class="article">
								<div class="article-img">
									<a href="single-blog.html">
										<img src="./img/post-2.jpg" alt="">
									</a>
								</div>
								<div class="article-content">
									<h3 class="article-title"><a href="single-blog.html">Vix fuisset tibique facilisis cu. Justo accusata ius at</a></h3>
									<ul class="article-meta">
										<li>12 November 2018</li>
										<li>By John doe</li>
										<li>0 Comments</li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
						</div>
						<!-- /article -->

						<div class="clearfix visible-md visible-lg"></div>

						<!-- article -->
						<div class="col-md-6">
							<div class="article">
								<div class="article-img">
									<a href="single-blog.html">
										<img src="./img/post-3.jpg" alt="">
									</a>
								</div>
								<div class="article-content">
									<h3 class="article-title"><a href="single-blog.html">Possit nostro aeterno eu vis, ut cum quem reque</a></h3>
									<ul class="article-meta">
										<li>12 November 2018</li>
										<li>By John doe</li>
										<li>0 Comments</li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
						</div>
						<!-- /article -->

						<!-- article -->
						<div class="col-md-6">
							<div class="article">
								<div class="article-img">
									<a href="single-blog.html">
										<img src="./img/post-4.jpg" alt="">
									</a>
								</div>
								<div class="article-content">
									<h3 class="article-title"><a href="single-blog.html">Vix fuisset tibique facilisis cu. Justo accusata ius at</a></h3>
									<ul class="article-meta">
										<li>12 November 2018</li>
										<li>By John doe</li>
										<li>0 Comments</li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
						</div>
						<!-- /article -->

						<div class="clearfix visible-md visible-lg"></div>

						<!-- article -->
						<div class="col-md-6">
							<div class="article">
								<div class="article-img">
									<a href="single-blog.html">
										<img src="./img/post-5.jpg" alt="">
									</a>
								</div>
								<div class="article-content">
									<h3 class="article-title"><a href="single-blog.html">Possit nostro aeterno eu vis, ut cum quem reque</a></h3>
									<ul class="article-meta">
										<li>12 November 2018</li>
										<li>By John doe</li>
										<li>0 Comments</li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
						</div>
						<!-- /article -->

						<!-- article -->
						<div class="col-md-6">
							<div class="article">
								<div class="article-img">
									<a href="single-blog.html">
										<img src="./img/post-6.jpg" alt="">
									</a>
								</div>
								<div class="article-content">
									<h3 class="article-title"><a href="single-blog.html">Vix fuisset tibique facilisis cu. Justo accusata ius at</a></h3>
									<ul class="article-meta">
										<li>12 November 2018</li>
										<li>By John doe</li>
										<li>0 Comments</li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
						</div>
						<!-- /article --> --}}

						<!-- pagination -->
						<div class="col-md-12">
                                {{ $news->links() }}
							{{-- <ul class="article-pagination">
							{{ $news->links() }}

							</ul> --}}
						</div>
						<!-- /pagination -->
					</div>
				</main>
				<!-- /MAIN -->

				<!-- ASIDE -->
				<aside id="aside" class="col-md-3">
					<!-- category widget -->
					{{-- <div class="widget">
						<h3 class="widget-title">Category</h3>
						<div class="widget-category">
							<ul>
								<li><a href="#">Health<span>(57)</span></a></li>
								<li><a href="#">Food<span>(86)</span></a></li>
								<li><a href="#">Education<span>(241)</span></a></li>
								<li><a href="#">Donation<span>(65)</span></a></li>
								<li><a href="#">Events<span>(14)</span></a></li>
							</ul>
						</div>
					</div> --}}
					<!-- /category widget -->

					<!-- posts widget -->
					<div class="widget">
						<h3 class="widget-title">Latest Posts</h3>
                        <!-- single post -->
                        @if(!empty($latestPosts))
                        @foreach ($latestPosts as $latestPost)
						<div class="widget-post">
							<a href="{{ route('news.show', $new->id) }}">
								<div class="widget-img">
									<img src="{{ Voyager::image($latestPost->image) }}" alt="">
								</div>
								<div class="widget-content">
									{{$latestPost->title}}
								</div>
							</a>
							<ul class="article-meta">
								<li>By PTYIF</li>
								<li>{{$new->created_at->toDayDateTimeString()}} </li>
							</ul>
                        </div>
                        <hr>
                        @endforeach
                        @endif
						<!-- /single post -->

						<!-- single post -->
						{{-- <div class="widget-post">
							<a href="#">
								<div class="widget-img">
									<img src="./img/widget-2.jpg" alt="">
								</div>
								<div class="widget-content">
									Vix fuisset tibique facilisis cu. Justo accusata ius at
								</div>
							</a>
							<ul class="article-meta">
								<li>By John doe</li>
								<li>12 November 2018</li>
							</ul>
						</div>
						<!-- /single post -->

						<!-- single post -->
						<div class="widget-post">
							<a href="#">
								<div class="widget-img">
									<img src="./img/widget-3.jpg" alt="">
								</div>
								<div class="widget-content">
									Possit nostro aeterno eu vis, ut cum quem reque
								</div>
							</a>
							<ul class="article-meta">
								<li>By John doe</li>
								<li>12 November 2018</li>
							</ul>
						</div> --}}
						<!-- /single post -->
					</div>
					<!-- /posts widget -->

					<!-- causes widget -->
					<div class="widget">
						<h3 class="widget-title">ADVERTISEMENT</h3>





						<!-- single causes -->
						<div class="widget-causes">
							<a href="#">
								<div class="widget-img">
									<img src="./img/widget-3.jpg" alt="">
								</div>
								<div class="widget-content">
									Possit nostro aeterno eu vis, ut cum quem reque
									<div class="causes-progress">
										<div class="causes-progress-bar">
											<div style="width: 53%;"></div>
										</div>
									</div>
								</div>
							</a>
							<div>
								<span class="causes-raised">Raised: <strong>52.000$</strong></span> -
								<span class="causes-goal">Goal: <strong>90.000$</strong></span>
							</div>
						</div>
						<!-- /single causes -->
					</div>
					<!-- causes widget -->
				</aside>
				<!-- /ASIDE -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
    <!-- /SECTION -->

    <script         src="{{asset('charity/js/jquery.min.js')}}"></script>

    <script>
               $(".class-span").each(function(i){
                    var len=$(this).text().trim().length;
                    if(len>100)
                    {
                        $(this).text($(this).text().substr(0,100)+'...');
                    }
                });


            </script>

    @endsection

