<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Scholarship;
class AboutusController extends Controller
{

    public function overview()
    {

        // $events = Event::all();
        // $latestEvents = Event::where('created_at', '>', Carbon::today()->subDays(3) )->inRandomOrder()->take(3)->get();
        return view('aboutus.overview')->with([
            // 'events' => $events,
            // 'mightAlsoLike' => $mightAlsoLike,
            // 'latestEvents' => $latestEvents,
            // 'events_by_date' => $events_by_date,
        ]);

    }

    public function scholarship()
    {

        $scholarships = Scholarship::all();
        // $latestEvents = Event::where('created_at', '>', Carbon::today()->subDays(3) )->inRandomOrder()->take(3)->get();
        return view('scholarship.scholarship')->with([
            'scholarship' => $scholarship,
            // 'mightAlsoLike' => $mightAlsoLike,
            // 'latestEvents' => $latestEvents,
            // 'events_by_date' => $events_by_date,
        ]);

    }
}
