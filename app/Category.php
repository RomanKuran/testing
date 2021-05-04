<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'is_deleted',
    ];

    public function testsGroups() {
        return $this->hasMany('App\TestsGroup', 'category_id', 'id');
    }
}
