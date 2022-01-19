<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['namec', 'slug'];
    protected $table = 'category';

    public function posts(){
        return $this->hasMany('App\Models\Posts');

    }

    public function getRouteKeyName(){
        return 'slug';

    }
}
