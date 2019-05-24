@extends('layouts.app')

@section('content')
<br><br><br><br><br><br><br><br><br>

{{ PollWriter::draw(33) }}



@foreach ($polling as $item)
<a href="{{ route('poll.vote', $item->id) }}">
{{-- {{dd($item->question)}} --}}
{{$item->question}}
</a>
@endforeach

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


@endsection
