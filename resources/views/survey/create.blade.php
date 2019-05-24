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
							<h1>PTYIF OVERVIEW  </h1>
							<ul class="breadcrumb">
								<li><a href="/">Home</a></li>
								<li><a href="/overview">Overview</a></li>
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
    BRIEF OVERVIEW
</h4>
                                The organisation is a non governmental organisation (NGO) founded by Ndukwe Bennett Okoh to promote youth enlightenment, empowerment, encouraging entrepreneurship amongst youths and to promote peaceful coexistence of individuals from different religions, background, and race to educate and motivate youths toward becoming national leaders imbued with good qualities and nationalism in Nigeria. the international youth group provides a platform where by youths (young people) are free to share their intuitional wisdom and thoughts on word issues heard without a hovering of an expecting adult. The youths are also free to share their ideas and project their feelings, it is a safe platform where you can freely interact with people from all over the world share ideas and opinions.





						</div>
						<!-- article img -->

						<!-- article content -->
						<div class="article-content">

                                <form method="POST" action=" {{ route('survey.store') }}">
                                        {{ csrf_field() }}
                                        <!-- Question Input -->
                                        <div class="form-group">
                                            <label for="question">Question:</label>
                                            <textarea id="question" name="question"  cols="30" rows="2" class="form-control" placeholder="Ex: Who is the best player in the world?">{{ old('question') }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Options</label>
                                            <ul id="options">
                                                <li>
                                                    <input id="option_1" type="text" name="options[0]" class="form-control add-input" value="{{ old('options.0') }}" placeholder="Ex: Cristiano Ronaldo"/>
                                                </li>
                                                <li>
                                                    <input id="option_2" type="text" name="options[1]" class="form-control add-input" value="{{ old('options.1') }}" placeholder="Ex: Lionel Messi" />
                                                </li>
                                            </ul>
                                        </div>
                                        <ul>
                                                <li class="button-add">
                                                    <div class="form-group">
                                                        <a class="btn btn-primary" id="add">
                                                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>

                                        <div class="form-group">
                                            <input name="create" type="submit" value="Create" class="btn btn-primary create-btn"/>
                                        </div>
                                    </form>
						</div>
						<!-- /article content -->

						<!-- article tags share -->

						<!-- /article tags share -->



					</div>
					<!-- /article -->
				</main>
				<!-- /MAIN -->


			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

    <script type="text/javascript">
        function remove(current){
            current.parentNode.remove()
        }
        document.getElementById("add").onclick = function() {
            var e = document.createElement('li');
            e.innerHTML = "<input type='text' name='options[]' class='form-control add-input' placeholder='Insert your option' /> <a class='btn btn-danger' href='#' onclick='remove(this)'><i class='fa fa-minus-circle' aria-hidden='true'></i></a>";
            document.getElementById("options").appendChild(e);
        }
    </script>

@endsection
