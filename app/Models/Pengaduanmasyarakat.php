<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduanmasyarakat extends Model
{
    use HasFactory;
    protected $fillable = ['nama','email','pengaduancontent'];

    public function posts(){
        return $this->belongsToMany('App\Models\Posts');

    }
}
