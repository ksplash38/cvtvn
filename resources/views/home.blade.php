@extends('layouts.app')

@section('content')

<link href="https://vjs.zencdn.net/7.5.4/video-js.css" rel="stylesheet">

<!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
<script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>

<style>
        .video-mask{
            width: 350px;
            border-radius: 10px;
            overflow: hidden;
            padding: 1em 1em 1em 1em
        }

        .grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-column-gap: 10px;
}

.grid2 {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-column-gap: 10px;
}

/* .column {


  text-transform: uppercase;
  font-size: 12px;
 background-color: rgba(0,0,0,.2);
  justify-content: center;
  align-items: center;
  display: flex;
  padding: 0;
  margin: 2em;
} */
        </style>
		<!-- HOME OWL -->
		<div id="home-owl" class="owl-carousel owl-theme">




			<!-- home item -->


                    {{-- <div class="slider">
                            @if(!empty ($sliders))
                              @foreach($sliders as $slider)
                                  <li >
                                    <a href="{{$slider->title}}" >
                                     <img src="{{ Voyager::image($slider->image) }}" title="{{$slider->body}}" style="height:20em ; width:100%" />
                                     </a>
                                </li>
                              @endforeach
                              @endif
                          </div> --}}

                                @if(!empty ($sliders))
                                  @foreach($sliders as $slider)
                                  <div class="home-item">
                                 	<!-- section background -->
				<div class="section-bg" style="background-image: url({{ Voyager::image($slider->image) }});"></div>
				<!-- /section background -->

				<!-- home content -->
				<div class="home">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<div class="home-content">
									<h1 style="color:black">{{$slider->title}}</h1>
									<p class="lead">{{$slider->body}}</p>
									<a href="#" class="primary-button">View Causes</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /home content -->
			</div>
			<!-- /home item -->
                                  @endforeach
                                  @endif
                              </div>


                            </header>


	<!-- ABOUT -->
	<div id="about" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- about content -->
				<div class="col-md-5">
					<div class="section-title">
						<h2 class="title">Welcome to PTYIF</h2>
						<p class="sub-title">Peace & Transformation Youths International Foundation.</p>
					</div>
					<div class="about-content">
						<p>We are bent on giving our youth sensetization. We believe that the youths are the future leaders of tomorrow and can get what ever they want if proper efforts are being added with the right mindset.</p>
						<a href="/aboutus" class="primary-button">Read More</a>
					</div>
				</div>
				<!-- /about content -->

				<!-- about video -->
				<div class="col-md-offset-1 col-md-6">
					{{-- <a href="#" class="about-video">
                            {{-- <i class="play-icon fa fa-play"></i>
                            <video width="320" height="240" autoplay>
                                    <source src="{{ asset('laravel.mp4') }}" type="video/mp4">
                                    <source src="{{ asset('laravel.mp4') }}" type="video/ogg">
                                  Your browser does not support the video tag.
                                  </video>
							{{-- <img src="./img/about.jpg" alt="">
                        </a> --}}

                        <video id='my-video' class='video-js video-mask' controls preload='auto' width='' height='264'
                        poster='MY_VIDEO_POSTER.jpg' data-setup='{}'>
                          <source src='{{ asset('laravel.mp4') }}' type='video/mp4'>
                          <source src='{{ asset('laravel.mp4') }}' type='video/webm'>
                          <p class='vjs-no-js'>
                            To view this video please enable JavaScript, and consider upgrading to a web browser that
                            <a href='https://videojs.com/html5-video-support/' target='_blank'>supports HTML5 video</a>
                          </p>
                        </video>



				</div>
				<!-- /about video -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /ABOUT -->

	<!-- NUMBERS -->
	<div id="numbers" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- number -->
				<div class="col-md-3 col-sm-6">
					<div class="number">
						<i class="fa fa-smile-o"></i>
						<h3>47k</h3>
						<span>Donors</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-md-3 col-sm-6">
					<div class="number">
						<i class="fa fa-heartbeat"></i>
						<h3>154K</h3>
						<span>Children Saved</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-md-3 col-sm-6">
					<div class="number">
						<i class="fa fa-money"></i>
						<h3>785K</h3>
						<span>Donated</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-md-3 col-sm-6">
					<div class="number">
						<i class="fa fa-handshake-o"></i>
						<h3>357</h3>
						<span>Volunteers</span>
					</div>
				</div>
				<!-- /number -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /NUMBERS -->

	{{-- <!-- CAUSESS -->
	<div id="causes" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<!-- section title -->
				<div class="col-md-8 col-md-offset-2">
					<div class="section-title text-center">
						<h2 class="title">Our Causes</h2>
						<p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				<!-- section title -->

				<!-- causes -->
				<div class="col-md-4">
					<div class="causes">
						<div class="causes-img">
							<a href="single-cause.html">
									<img src="./img/post-1.jpg" alt="">
								</a>
						</div>
						<div class="causes-progress">
							<div class="causes-progress-bar">
								<div style="width: 87%;">
									<span>87%</span>
								</div>
							</div>
							<div>
								<span class="causes-raised">Raised: <strong>52.000$</strong></span>
								<span class="causes-goal">Goal: <strong>90.000$</strong></span>
							</div>
						</div>
						<div class="causes-content">
							<h3><a href="single-cause.html">Possit nostro aeterno eu vis, ut cum quem reque</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<a href="single-cause.html" class="primary-button causes-donate">Donate Now</a>
						</div>
					</div>
				</div>
				<!-- /causes -->

				<!-- causes -->
				<div class="col-md-4">
					<div class="causes">
						<div class="causes-img">
							<a href="single-cause.html">
									<img src="./img/post-2.jpg" alt="">
								</a>
						</div>
						<div class="causes-progress">
							<div class="causes-progress-bar">
								<div style="width: 53%;">
									<span>53%</span>
								</div>
							</div>
							<div>
								<span class="causes-raised">Raised: <strong>52.000$</strong></span>
								<span class="causes-goal">Goal: <strong>90.000$</strong></span>
							</div>
						</div>
						<div class="causes-content">
							<h3><a href="single-cause.html">Vix fuisset tibique facilisis cu. Justo accusata ius at</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<a href="single-cause.html" class="primary-button causes-donate">Donate Now</a>
						</div>
					</div>
				</div>
				<!-- /causes -->

				<!-- causes -->
				<div class="col-md-4">
					<div class="causes">
						<div class="causes-img">
							<a href="single-cause.html">
								<img src="./img/post-3.jpg" alt="">
							</a>
						</div>
						<div class="causes-progress">
							<div class="causes-progress-bar">
								<div style="width: 72%;">
									<span>72%</span>
								</div>
							</div>
							<div>
								<span class="causes-raised">Raised: <strong>52.000$</strong></span>
								<span class="causes-goal">Goal: <strong>90.000$</strong></span>
							</div>
						</div>
						<div class="causes-content">
							<h3><a href="single-cause.html">Possit nostro aeterno eu vis, ut cum quem reque</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<a href="single-cause.html" class="primary-button causes-donate">Donate Now</a>
						</div>
					</div>
				</div>
				<!-- /causes -->

				<div class="clearfix visible-md visible-lg"></div>

				<!-- causes -->
				<div class="col-md-4">
					<div class="causes">
						<div class="causes-img">
							<a href="single-cause.html">
								<img src="./img/post-4.jpg" alt="">
							</a>
						</div>
						<div class="causes-progress">
							<div class="causes-progress-bar">
								<div style="width: 64%;">
									<span>64%</span>
								</div>
							</div>
							<div>
								<span class="causes-raised">Raised: <strong>52.000$</strong></span>
								<span class="causes-goal">Goal: <strong>90.000$</strong></span>
							</div>
						</div>
						<div class="causes-content">
							<h3><a href="single-cause.html">Possit nostro aeterno eu vis, ut cum quem reque</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<a href="single-cause.html" class="primary-button causes-donate">Donate Now</a>
						</div>
					</div>
				</div>
				<!-- /causes -->

				<!-- causes -->
				<div class="col-md-4">
					<div class="causes">
						<div class="causes-img">
							<a href="single-cause.html">
								<img src="./img/post-5.jpg" alt="">
							</a>
						</div>
						<div class="causes-progress">
							<div class="causes-progress-bar">
								<div style="width: 72%;">
									<span>72%</span>
								</div>
							</div>
							<div>
								<span class="causes-raised">Raised: <strong>52.000$</strong></span>
								<span class="causes-goal">Goal: <strong>90.000$</strong></span>
							</div>
						</div>
						<div class="causes-content">
							<h3><a href="single-cause.html">Vix fuisset tibique facilisis cu. Justo accusata ius at</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<a href="single-cause.html" class="primary-button causes-donate">Donate Now</a>
						</div>
					</div>
				</div>
				<!-- /causes -->

				<!-- causes -->
				<div class="col-md-4">
					<div class="causes">
						<div class="causes-img">
							<a href="single-cause.html">
								<img src="./img/post-6.jpg" alt="">
							</a>
						</div>
						<div class="causes-progress">
							<div class="causes-progress-bar">
								<div style="width: 53%;">
									<span>53%</span>
								</div>
							</div>
							<div>
								<span class="causes-raised">Raised: <strong>52.000$</strong></span>
								<span class="causes-goal">Goal: <strong>90.000$</strong></span>
							</div>
						</div>
						<div class="causes-content">
							<h3><a href="single-cause.html">Possit nostro aeterno eu vis, ut cum quem reque</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<a href="single-cause.html" class="primary-button causes-donate">Donate Now</a>
						</div>
					</div>
				</div>
				<!-- /causes -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /CAUSESS --> --}}

	<!-- CTA -->
	<div id="cta" class="section">
		<!-- background section -->
		<div class="section-bg" style="background-image: url({{asset('charity/img/background-1.jpg')}});" data-stellar-background-ratio="0.5"></div>
		<!-- /background section -->

		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- cta content -->
				<div class="col-md-offset-2 col-md-8">
					<div class="cta-content text-center">
						<h1>Become A Member</h1>
						<p class="lead">Join Peace & Transformation Youths International Foundation Membership Committee.</p>
						<a href="#" class="primary-button">Join Us Now!</a>
					</div>
				</div>
				<!-- /cta content -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /CTA -->

	<!-- EVENTS -->
	<div id="events" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-8 col-md-offset-2">
					<div class="section-title text-center">
						<h2 class="title">Upcoming Events</h2>
						<p class="sub-title">Catch u with the latest Events</p>
					</div>
				</div>
				<!-- /section title -->

				<!-- event -->
				<div class="col-md-6 col-lg-12 ">
                        <div class="grid">
                 @if(!empty ($upcomingevents))
                  @foreach($upcomingevents as $upcomingevent)




					<div class="event">
                            <a href="{{ route('events.show', $upcomingevent->id) }}">
						<div class="event-img">

								<img src="{{ Voyager::image($upcomingevent->image) }}" alt="" style="width:80% ; height:10em">

						</div>
						<div class="event-content">
							<h3><a href="single-event.html">{{$upcomingevent->title}} </a></h3>
							<ul class="event-meta">
								<li><i class="fa fa-clock-o"></i>  {{$upcomingevent->date}} | {{$upcomingevent->start_time}} - {{$upcomingevent->end_time}} </li>
								<li><i class="fa fa-map-marker"></i> {{$upcomingevent->location}}</li>
							</ul>
							<p class="class-span">{{$upcomingevent->body}} </p>
						</div>	</a>
                    </div>

                    @endforeach
                  @endif
				</div></div>
				<!-- /event -->

				<!-- event -->
				{{-- <div class="col-md-6">
					<div class="event">
						<div class="event-img">
							<a href="single-event.html">
								<img src="./img/event-2.jpg" alt="">
							</a>
						</div>
						<div class="event-content">
							<h3><a href="single-event.html">Vix fuisset tibique facilisis cu. Justo accusata ius at</a></h3>
							<ul class="event-meta">
								<li><i class="fa fa-clock-o"></i> 24 October, 2018 | 8:00AM - 11:00PM</li>
								<li><i class="fa fa-map-marker"></i> 2736 Hinkle Deegan Lake Road</li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div> --}}
				<!-- /event -->

				<div class="clearfix visible-md visible-lg"></div>

				<!-- event -->
				{{-- <div class="col-md-6">
					<div class="event">
						<div class="event-img">
							<a href="single-event.html">
								<img src="./img/event-3.jpg" alt="">
							</a>
						</div>
						<div class="event-content">
							<h3><a href="single-event.html">Possit nostro aeterno eu vis, ut cum quem reque</a></h3>
							<ul class="event-meta">
								<li><i class="fa fa-clock-o"></i> 24 October, 2018 | 8:00AM - 11:00PM</li>
								<li><i class="fa fa-map-marker"></i> 2736 Hinkle Deegan Lake Road</li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div> --}}
				<!-- /event -->

				<!-- event -->
				{{-- <div class="col-md-6">
					<div class="event">
						<div class="event-img">
							<a href="single-event.html">
								<img src="./img/event-4.jpg" alt="">
							</a>
						</div>
						<div class="event-content">
							<h3><a href="single-event.html">Vix fuisset tibique facilisis cu. Justo accusata ius at</a></h3>
							<ul class="event-meta">
								<li><i class="fa fa-clock-o"></i> 24 October, 2018 | 8:00AM - 11:00PM</li>
								<li><i class="fa fa-map-marker"></i> 2736 Hinkle Deegan Lake Road</li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div> --}}
				<!-- /event -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /EVENTS -->

	<!-- TESTIMONIAL -->
	<div id="testimonial" class="section">
		<!-- background section -->
		<div class="section-bg" style="background-image: url({{asset('img/summit.jpg')}} );" data-stellar-background-ratio="0.5"></div>
		<!-- /background section -->

		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- Testimonial owl -->
				<div class="col-md-12">
					<div id="testimonial-owl" class="owl-carousel owl-theme">

                            @if(!empty ($testimonials))
                  @foreach($testimonials as $testimonial)


						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								<div class="testimonial-img">
									{{-- <img src="{{ Voyager::image($testimonial->image) }}" alt=""> --}}
								</div>
								<h3>{{$testimonial->name}}</h3>
								<span>{{$testimonial->position}}</span>
							</div>
							<div class="testimonial-quote">
								<blockquote>
                              <p>{!!$testimonial->body!!}</p>
								</blockquote>
							</div>
                        </div>


                        @endforeach
                        @endif

						<!-- /testimonial -->





					</div>
				</div>
				<!-- /Testimonial owl -->
			</div>
			<!-- /Row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /TESTIMONIAL -->

	<!-- BLOG -->
	<div id="blog" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-8 col-md-offset-2">
					<div class="section-title text-center">
						<h2 class="title">Latest From Our Blog & News</h2>
						<p class="sub-title">Get Yourself Interesting News from Us </p>
					</div>
				</div>
                <!-- /section title -->
                <div class="col-md-4 col-lg-12">
                <div class="grid2">
                @if(!empty ($news))
                @foreach($news as $new)

				<!-- blog -->

					<div class="article column">
						<div class="article-img">
							<a href="{{ route('news.show', $new->id) }}">
								<img src="{{ Voyager::image($new->image) }}" alt="" style="width:370px ; height:250px">
							</a>
						</div>
						<div class="article-content">
							<h3 class="article-title"><a href="{{ route('news.show', $new->id) }}">{{$new->title}}</a></h3>
							<ul class="article-meta">
								<li>{{$new->created_at->diffForHumans()}}</li>
								<li>By PTYIF</li>
								{{-- <li>0 Comments</li> --}}
							</ul>
							<p class="class-span">{{$new->body}}</p>
						</div>
					</div>

				<!-- /blog -->
                @endforeach
                @endif
            </div>
			</div></div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /BLOG -->


    <script src='https://vjs.zencdn.net/7.5.4/video.js'></script>
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
