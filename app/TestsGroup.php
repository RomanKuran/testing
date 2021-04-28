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
}
