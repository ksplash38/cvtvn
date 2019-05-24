<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey;
use App\SurveyOption;
use Session;
class SurveyController extends Controller
{

    public function create()
    {
        $surveys = Survey::all();




        // $events = Event::where('date', '>', Carbon::today()->subDays(3) )->get()->chunk(4);

        return view('survey.create')->with([
            'surveys' => $surveys,

        ]);
    }



    public function store(Request $request)
    {



                 $this->validate($request, [

                    //  'unique_id' => 'required|alpha_dash|unique:products,unique_id',
                    //  'category_id' => 'required|integer',
                    //   'details' => 'required|max:150',
                    //   'product_status' => 'required',
                    //             'tags' => 'required',
                    //             'slug' => 'alpha_dash|min:5|max:255|unique:products,slug',
                    // 'images.*' => 'image|required|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    // 'image' => 'image|required|mimes:jpeg,png,jpg,gif,svg|max:1999'
                 ]);





                  /*Insert your data*/


                            // Create Post
                            $survey = new Survey;
                            $survey->question = $request->input('question');
                            $survey->user_id = auth()->user()->id;
                            // $survey->save();

                            // $survey_option = new SurveyOption;
                            // $survey_option->name = $request->input('name');
                            for($ii = 0; $ii < count($options) ; $ii++) {
                                // $email = $options[$ii];
                                $name = $names[$ii];
                                SurveyOption::create([
                                    'names' => $name
                                    // 'feedback'=>$feedback
                                ]);
                            }
                            $survey->surveyoptions()->save($survey_option);


dd($survey);
// This is what makes each time we save not to override the current id in tags or categories. 'false'

                            Session::flash('success', 'Your Post was successfully save!');

                            return redirect('/survey');

    }


}
