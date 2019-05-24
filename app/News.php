<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
use Nicolaslopezj\Searchable\SearchableTrait;
class News extends Model
{

    use Resizable , SearchableTrait;

    public function scopeMightAlsoLike($query)
    {
        return $query->inRandomOrder()->take(4);
    }


    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'title' => 10,
            // 'users.last_name' => 10,
            // 'users.bio' => 2,
            // 'users.email' => 5,
            // 'posts.title' => 2,
            // 'posts.body' => 1,
        ],
        // 'joins' => [
        //     'posts' => ['users.id','posts.user_id'],
        // ],
    ];
}
