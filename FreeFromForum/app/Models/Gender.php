<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'genderid';

    public $incrementing = false;

    public function genderUser(){
        return $this->hasMany("\App\Models\User", "genderid", "genderid");
    }
}
