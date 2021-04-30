<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTestsAnswer extends Model
{
    protected $table = 'user_tests_answers';
    protected $fillable = [
        'user_id', 'tests_group_id', 'answers', 'percentage',
    ];
}
