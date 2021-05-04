<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = [
        'tests_group_id', 'name', 'type', 'tests', 'answers', 'is_deleted',
    ];

    public function testsGroups() {
        return $this->hasMany('App\TestsGroup', 'tests_group_id', 'id');
    }
}
