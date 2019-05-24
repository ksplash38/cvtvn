@extends('layouts.app')

@section('content')


{{-- this header is the closing tag for the header to keep the css properly arranged --}}
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



								<h1>{{$news->title}} Page</h1>
								<ul class="breadcrumb">
									<li><a href="/">Home</a></li>
									<li><a href="/upcomingevents">Blog</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /page header content -->
			</div>
			<!-- /Page Header -->
		</header>
<div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- MAIN -->
                <main id="main" class="col-md-9">
                    <!-- article -->
                    <div class="article event-details">
                        <!-- article img -->
                        <div class="article-img">
                            <img src="{{ Voyager::image($news->image) }}" alt="">
                        </div>
                        <!-- article img -->

                        <!-- article content -->
                        <div class="article-content">
                            <!-- article title -->
                            <h2 class="article-title">{{$news->title}}</h2>
                            <!-- /article title -->

                            <!-- article meta -->
                            <ul class="article-meta">
                                <li> {{$news->created_at->diffForHumans()}} </li>
                                <li>By PTYIF</li>
                                {{-- <li>0 Comments</li> --}}
                            </ul>
                            <!-- /article meta -->

                            <p>{{$news->body}}</p>

                        </div>
                        <!-- /article content -->

                        <!-- event-meta -->
                        {{-- <ul class="event-meta">
                            <li><h4>News Details</h4></li>
                            <li><i class="fa fa-clock-o"></i><strong>Date:</strong>  {{$news->date}} | {{$news->start_time}} - {{$events->end_time}}</li>
                            <li><i class="fa fa-map-marker"></i><strong>Location:</strong> {{$events->location}}</li>
                        <li><i class="fa fa-ticket"></i><strong>Ticket:</strong> ₦ {{$news->price}}</li>
                        </ul>
                        <!-- /event-meta --> --}}

                        <!-- article tags share -->
                        {{-- <div class="article-tags-share">
                            <!-- article tags -->
                            <ul class="tags">
                                <li>TAGS:</li>
                                <li><a href="#">Charity</a></li>
                                <li><a href="#">Health</a></li>
                                <li><a href="#">Donation</a></li>
                            </ul>
                            <!-- /article tags -->

                            <!-- article share -->
                            <ul class="share">
                                <li>SHARE:</li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                            <!-- /article share -->
                        </div> --}}
                        <!-- /article tags share -->

                        <!-- article reply form -->

                        <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://ptyif.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript"></a></noscript>
                        {{-- <div class="article-reply">
                            <h3>Leave a reply</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <form>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input class="input" placeholder="Name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input class="input" placeholder="Email" type="email">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input class="input" placeholder="Website" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="input" placeholder="Message"></textarea>
                                        </div>
                                        <button class="primary-button">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div> --}}
                        <!-- /article reply form -->
                    </div>
                    <!-- /article -->
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
                        @foreach ($latestPosts as $latestPost)
                        <!-- single post -->
                        <div class="widget-post">
                            <a href="{{ route('news.show', $latestPost->id) }}">
                                <div class="widget-img">
                                    <img src="{{ Voyager::image($latestPost->image) }}" alt="">
                                </div>
                                <div class="widget-content">
                                        {{$latestPost->title}}
                                </div>
                            </a>
                            <ul class="article-meta">
                                <li>By PTYIF</li>
                                <li>{{$latestPost->created_at->diffForHumans()}}</li>
                            </ul>
                        </div>
                        <hr>
                        @endforeach


                        <!-- /single post -->

                        {{-- <!-- single post -->
                        <div class="widget-post">
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
                        <h3 class="widget-title">Might Also Like</h3>

                        <!-- single causes -->
                        @foreach ($mightAlsoLike as $product)
                        <div class="widget-causes">
                            <a href="{{ route('news.show', $product->id) }}">
                                <div class="widget-img">
                                    <img src="{{ Voyager::image($product->image) }}" alt="">
                                </div>
                                <div class="widget-content">
                                   {{$product->title}}
                                    {{-- <div class="causes-progress">
                                        <div class="causes-progress-bar">
                                            <div style="width: 64%;"></div>
                                        </div>
                                    </div> --}}
                                </div>
                            </a>
                            <div>
                                <span class="causes-raised"><strong>{{$product->created_at->toDayDateTimeString()}}</strong></span> -
                                {{-- <span class="causes-goal">Goal: <strong>90.000$</strong></span> --}}
                            </div>
                        </div>
                        <hr>
                        @endforeach



                          {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> --}}
                          {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> --}}










                        <div class="container">

                                <h2>ARCHIVES</h2>
                                @foreach ($news_by_date as $date => $posts)
                                <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo{{$date}}">{{ $date }}</button>
                        <div id="demo{{$date}}" class="collapse">
                                        @foreach ($posts as $post)
                                        <a href="{{ route('news.show', $post->id) }}">
                                                <h3>{{ $post->title }}</h3>
                                                {{-- {{ $post->content }} --}}
                                            </a>
                                            @endforeach
                                </div>
                                @endforeach
                              </div>




        {{-- {{ $post->content }} --}}



                        <!-- /single causes -->

                        <!-- single causes -->
                        {{-- <div class="widget-causes">
                            <a href="#">
                                <div class="widget-img">
                                    <img src="./img/widget-2.jpg" alt="">
                                </div>
                                <div class="widget-content">
                                    Vix fuisset tibique facilisis cu. Justo accusata ius at
                                    <div class="causes-progress">
                                        <div class="causes-progress-bar">
                                            <div style="width: 75%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div>
                                <span class="causes-raised">Raised: <strong>52.000$</strong></span> -
                                <span class="causes-goal">Goal: <strong>90.000$</strong></span>
                            </div>
                        </div> --}}
                        <!-- /single causes -->

                        <!-- single causes -->
                        {{-- <div class="widget-causes">
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
                        </div> --}}
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
    <script id="dsq-count-scr" src="//ptyif.disqus.com/count.js" async></script>

@endsection
