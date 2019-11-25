<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Categories;

class Product extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function categories(){
        return $this->belongsToMany("App\Categories");
    }
}
