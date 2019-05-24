<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveyOption extends Model
{
    public function surveys()
    {

        return $this->belongsTo('App\Survey', 'id');

    }
}
