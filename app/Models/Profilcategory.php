<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profilcategory extends Model
{
    use HasFactory;
    protected $fillable = ['profilnamec', 'slug'];
    protected $table = 'profilcategory';

    public function posts(){
        return $this->hasMany('App\Models\Posts');

    }

    public function getRouteKeyName(){
        return 'slug';

    }
}
