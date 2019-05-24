<?php

namespace App\Http\Controllers;

use Inani\Larapoll\Http\Controllers\PollManagerController;
use Inani\Larapoll\Poll;
use Illuminate\Support\Facades\Auth;

class PollController extends PollManagerController
{
     public function __construct()
    {
        $this->middleware('auth', ['except' => ['result', 'anotherMethod']]);
    }



    public function home()
    {

        return view('dashboard.home',['polls'=>Poll::all()]);
    }
    public function result()
    {

        if(Auth::user()->hasRole('admin')){


        $polls = Poll::all();
    }  else {
$polls = Poll::all();
}

        return view('dashboard.result', compact('polls'));
    }
    public function create()
    {
    	return view('dashboard.create');
    }

    public function edit(Poll $poll)
    {
        return view('dashboard.edit', compact('poll'));
    }

    public function index()
    {
        $polls = Poll::withCount('options', 'votes')->latest()->paginate(
            config('larapoll_config.pagination')
        );

        return view('dashboard.index', compact('polls'));
    }
}
