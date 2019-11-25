<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Product;

class Categories extends Model
{
    use SoftDeletes;
    protected $guarded = [];
    protected $dates = ['deleted at'];

    public function categories(){
        return $this->belongsToMany("App\Product");
    }
    public function childrens(){
        return $this->belongsToMany(Category::class,'category_parent','category_id','parent_id');
    }
}
