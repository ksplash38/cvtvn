<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    public function surveyoptions()
    {

        return $this->hasMany('App\SurveyOption', 'survey_id');

    }


    public function user()
    {

        return $this->belongsTo('App\User', 'id');

    }
}
