@extends('layouts.app')

@section('content')
<link href="{{asset('charity/css/custom.css')}}" rel="stylesheet">

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



								{{-- <h1>{{$events->title}} Page</h1> --}}
								<ul class="breadcrumb">
									<li><a href="/">Home</a></li>
									<li><a href="/events">Events</a></li>
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
                    <div class="col-md-12">
                        <div id="minislider" class="hero owl-carousel owl-theme">
                            @if(!empty ($events))
                            @foreach($events as $event)
                        <div class="item">
                            <a href="{{ route('events.show', $event->id) }}">
                                <div class="secion-bg" style="background-image: url({{ Voyager::image($event->image) }}); background-repeat: no-repeat; height:10em"></div>

                                 <div class="hero-title hero-sub-title">
                                   <h4>   {{$event->title}} </h4>
                                 </div>
                                </a>
                        </div>
                        @endforeach
                        @endif
                      </div>

                    </div>




                      <div class="col-md-6">

                        <div class="">
                                <div class="full_con_2col">
                                @if(!empty ($events))
                            @foreach($events as $event)
<a href="{{ route('events.show', $event->id) }}">
                            <div class="teaser">
                                <div class="col-2">
<span class="image">
        <img src=" {{ Voyager::image($event->image) }}" alt="" style="width:8em; height:10em" class="float-left">

</span>

                                </div>

                                <div class="col-4">
                                        <span class="image">

                                                <h3>
                                                    <span class="politics kicker">Events</span>
                                                     <span> {{$event->title}}</span>
                                                </h3>
                                                <p class="class-span">
                                                        {{$event->body}}
                                                </p>


                                        </span>

                                                                        </div>


                        </div>
                    </a>
                            @endforeach
                            @endif
                        </div>

                    </div>











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
                        @foreach ($latestEvents as $latestEvent)
                        <!-- single post -->
                        <div class="widget-post">
                            <a href="{{ route('events.show', $latestEvent->id) }}">
                                <div class="widget-img">
                                    <img src="{{ Voyager::image($latestEvent->image) }}" alt="">
                                </div>
                                <div class="widget-content">
                                        {{-- {{$latestEvent->title}} --}}
                                </div>
                            </a>
                            <ul class="article-meta">
                                <li>By PTYIF</li>
                                <li>{{$latestEvent->created_at->diffForHumans()}}</li>
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
                        {{-- @foreach ($mightAlsoLike as $product)
                        <div class="widget-causes">
                            <a href="{{ route('events.show', $latestEvent->id) }}">
                                <div class="widget-img">
                                    <img src="{{ Voyager::image($product->image) }}" alt="">
                                </div>
                                <div class="widget-content">
                                   {{$product->title}}
                                    {{-- <div class="causes-progress">
                                        <div class="causes-progress-bar">
                                            <div style="width: 64%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div>
                                <span class="causes-raised"><strong>{{$product->created_at->toDayDateTimeString()}}</strong></span>

                            </div>
                        </div>
                        <hr>
                        @endforeach --}}



                          {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> --}}
                          {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> --}}










                        <div class="">

                                <h2>ARCHIVES</h2>

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
