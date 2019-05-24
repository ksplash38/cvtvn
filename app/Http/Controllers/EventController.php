<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\News;
use Carbon\Carbon;

class EventController extends Controller
{



    public function index()
    {

        $events = Event::all();
        $latestEvents = Event::where('created_at', '>', Carbon::today()->subDays(3) )->inRandomOrder()->take(3)->get();
        return view('events.index')->with([
            'events' => $events,
            // 'mightAlsoLike' => $mightAlsoLike,
            'latestEvents' => $latestEvents,
            // 'events_by_date' => $events_by_date,
        ]);

    }



    public function search(Request $request)
    {

        // $request->validate([
        //     'query' => 'required|min:3',
        // ]);

        $query = $request->input('query');


        // $products = Product::where('name', 'like', "%$query%")
        //                    ->orWhere('details', 'like', "%$query%")
        //                    ->orWhere('description', 'like', "%$query%")
        //                    ->paginate(10);

        $events = Event::search($query)->paginate(10);
        $news = News::search($query)->paginate(10);
        $latestEvents = Event::where('created_at', '>', Carbon::today()->subDays(3) )->inRandomOrder()->take(3)->get();

        return view('events.index')->with([
            'events' => $events,
            'news' => $news,
            'latestEvents' => $latestEvents,

            // 'events_by_date' => $events_by_date,
        ]);
    }

    public function show($id)

    {
        $events = Event::where('id', $id)->firstOrFail();
        $latestEvents = Event::where('created_at', '>', Carbon::today()->subDays(3) )->inRandomOrder()->take(5)->get();
        $mightAlsoLike = Event::where('id', '!=', $id)->mightAlsoLike()->get();
        $events_by_date = Event::all()->groupBy(function($date) {
            return Carbon::parse($date->created_at)->format('Y-m-d');
        });

// $events = Event::all();
return view('events.show')->with([
    'events' => $events,
    'mightAlsoLike' => $mightAlsoLike,
    'latestEvents' => $latestEvents,
    'events_by_date' => $events_by_date,
]);


    }

}
