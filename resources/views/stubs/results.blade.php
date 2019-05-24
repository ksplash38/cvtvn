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
<br><br><br><br><br>
{{-- @foreach ($pollcounts as $pollcount)
<h5>Poll: {{ $pollcount->question }}</h5>

@endforeach --}}


@foreach($polls as $poll)
    <h5>Question: {{ $poll->question }}</h5>

    @foreach($poll->options as $option)
        <div class='result-option-id'>
            <strong>{{ $option->name }}</strong><span class='pull-right'>{{ $option->votes }} - @if ( $option->votes  == 1 || $option->votes  == 0)
VOTE

@else

VOTES
            @endif </span>
            <div class='progress'>
                <div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuenow='{{ $option->percent }}' aria-valuemin='0' aria-valuemax='100' style='width: {{ $option->votes }}%'>
                    <span class='sr-only'>{{ $option->votes }}% Complete</span>
                </div>
            </div>
        </div>
    @endforeach
@endforeach
