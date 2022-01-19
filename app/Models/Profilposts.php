<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profilposts extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['profiljudul','profilcategory_id', 'profilcontent', 'profilgambar', 'slug', 'users_id' ];

    public function profilcategory(){
        return $this->belongsTo('App\Models\Profilcategory');
    }


    public function users(){
        return $this->belongsTo('App\Models\User');

    }
}
