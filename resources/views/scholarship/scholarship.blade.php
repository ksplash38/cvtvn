@extends('layouts.app')

@section('content')

	<!-- Page Header -->
    <div id="page-header">
			<!-- section background -->
			<div class="section-bg" style="background-image: url({{asset('charity/img/background-2.jpg')}}"></div>
			<!-- /section background -->

			<!-- page header content -->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="header-content">
							<h1>PTYIF SCHOLARSHIP  </h1>
							<ul class="breadcrumb">
								<li><a href="/">Home</a></li>
								<li><a href="/scholarship">Scholarship</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /page header content -->
		</div>
		<!-- /Page Header -->
	</header>
	<!-- /HEADER -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- MAIN -->
				<main id="main" class="col-md-9">
					<!-- article -->
					<div class="article">
						<!-- article img -->
						<div class="article-img">
<h4 class="text-center">
  SCHOLARSHIP
</h4>
                                The organisation is a non governmental organisation (NGO) founded by Ndukwe Bennett Okoh to promote youth enlightenment, empowerment, encouraging entrepreneurship amongst youths and to promote peaceful coexistence of individuals from different religions, background, and race to educate and motivate youths toward becoming national leaders imbued with good qualities and nationalism in Nigeria. the international youth group provides a platform where by youths (young people) are free to share their intuitional wisdom and thoughts on word issues heard without a hovering of an expecting adult. The youths are also free to share their ideas and project their feelings, it is a safe platform where you can freely interact with people from all over the world share ideas and opinions.





						</div>
						<!-- article img -->

						<!-- article content -->
						<div class="article-content">

@if (!empty($scholarship))
@foreach ($scholarships as $scholarship)
{{dd($scholarship)}};
@endforeach

@endif

						</div>
						<!-- /article content -->

						<!-- article tags share -->

						<!-- /article tags share -->



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
						<!-- single post -->
						<div class="widget-post">
							<a href="#">
								<div class="widget-img">
									<img src="./img/widget-1.jpg" alt="">
								</div>
								<div class="widget-content">
									Possit nostro aeterno eu vis, ut cum quem reque
								</div>
							</a>
							<ul class="article-meta">
								<li>By PTYIF</li>
								<li>12 November 2018</li>
							</ul>
						</div>
						<!-- /single post -->

						<!-- single post -->
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
								<li>By PTYIF</li>
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
								<li>By PTYIF</li>
								<li>12 November 2018</li>
							</ul>
						</div>
						<!-- /single post -->
					</div>
					<!-- /posts widget -->

					<!-- causes widget -->
					<div class="widget">
						<h3 class="widget-title">Latest Causes</h3>

						<!-- single causes -->
						<div class="widget-causes">
							<a href="#">
								<div class="widget-img">
									<img src="./img/widget-1.jpg" alt="">
								</div>
								<div class="widget-content">
									Possit nostro aeterno eu vis, ut cum quem reque
									<div class="causes-progress">
										<div class="causes-progress-bar">
											<div style="width: 64%;"></div>
										</div>
									</div>
								</div>
							</a>
							{{-- <div>
								<span class="causes-raised">Raised: <strong>52.000$</strong></span> -
								<span class="causes-goal">Goal: <strong>90.000$</strong></span>
							</div> --}}
						</div>
						<!-- /single causes -->

						<!-- single causes -->
						<div class="widget-causes">
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
							{{-- <div>
								<span class="causes-raised">Raised: <strong>52.000$</strong></span> -
								<span class="causes-goal">Goal: <strong>90.000$</strong></span>
							</div> --}}
						</div>
						<!-- /single causes -->

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
							{{-- <div>
								<span class="causes-raised">Raised: <strong>52.000$</strong></span> -
								<span class="causes-goal">Goal: <strong>90.000$</strong></span>
							</div> --}}
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



@endsection
