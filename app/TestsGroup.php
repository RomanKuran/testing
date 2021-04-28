<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestsGroup extends Model
{
    protected $table = 'tests_groups';
    protected $fillable = [
        'category_id', 'name', 'is_deleted',
    ];
}