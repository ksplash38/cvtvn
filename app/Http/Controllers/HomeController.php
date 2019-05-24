<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Poll;
use App\Slider;
use App\Event;
use App\News;
use DB;
use Carbon\Carbon;
use App\Testimonial;

class HomeController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sliders = Slider::all();
        $testimonials = Testimonial::all();
        $news = News::where('created_at', '>', Carbon::today()->subDays(50) )->inRandomOrder()->take(6)->get();
        // dd($news);
        $upcomingevents = Event::orderBy('date', 'desc')->take(4)->get();


        // $events = Event::where('date', '>', Carbon::today()->subDays(3) )->get()->chunk(4);

        return view('home', compact('sliders'))->with([
            'upcomingevents' => $upcomingevents,
              'testimonials' => $testimonials,
              'news' => $news,
        ]);
    }
}
