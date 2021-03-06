<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestsGroup extends Model
{
    protected $table = 'tests_groups';
    protected $fillable = [
        'category_id', 'name', 'is_deleted',
    ];

    public function tests() {
        return $this->hasMany('App\Test', 'tests_group_id', 'id');
    }

    public function userTestsAnswer() {
        return $this->hasMany('App\UserTestsAnswer', 'tests_group_id', 'id');
    }

    public function categories() {
        return $this->hasMany('App\Category', 'id', 'category_id');
    }
}
