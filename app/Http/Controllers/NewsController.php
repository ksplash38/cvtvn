<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Carbon\Carbon;
class NewsController extends Controller
{

    public function index()
    {

        $news = News::paginate(4);
        $latestPosts = News::where('created_at', '>', Carbon::today()->subDays(3) )->inRandomOrder()->take(3)->get();
        return view('news.index')->with([
            'news' => $news,
            // 'mightAlsoLike' => $mightAlsoLike,
            'latestPosts' => $latestPosts,
            // 'events_by_date' => $events_by_date,
        ]);

    }


    public function show($id)

    {
        $news = News::where('id', $id)->firstOrFail();
        $latestPosts = News::where('created_at', '>', Carbon::today()->subDays(3) )->inRandomOrder()->take(3)->get();
        $mightAlsoLike = News::where('id', '!=', $id)->mightAlsoLike()->get();
        $news_by_date = News::all()->groupBy(function($date) {
            return Carbon::parse($date->created_at)->format('Y-m-d');
        });

// $events = Event::all();
return view('news.show')->with([
    'news' => $news,
    'mightAlsoLike' => $mightAlsoLike,
    'latestPosts' => $latestPosts,
    'news_by_date' => $news_by_date,
]);


    }
}
