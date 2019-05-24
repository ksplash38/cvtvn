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
							<h1>PTYIF VOTING  </h1>
							<ul class="breadcrumb">
								<li><a href="/">Home</a></li>
								<li><a href="/vote">VOTING</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /page header content -->
		</div>

@if(Session::has('errors'))
<div class="alert alert-danger">
        {{ session('errors') }}
</div>
@endif
@if(Session::has('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif



@foreach($polls as $poll)

<form method="POST" action="{{ route('poll.vote', $poll->id) }}" >
    @csrf
    <br>   <br>   <br>   <br>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">
                    <i class="fa fa-check"></i> {{ $poll->question }}

            </h3>
        </div>
    </div>
    <div class="panel-body">
        <ul class="list-group">
            @foreach($poll->options as $option)
                <li class="list-group-item">
                    <div class="radio">
                        <label>
                            <input value="{{ $option->id }}" type="radio" name="options">
                            {{ $option->name }}
                        </label>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="panel-footer">
        <input type="submit" class="btn btn-primary btn-sm" value="Vote" />
    </div>
</form>
@endforeach
