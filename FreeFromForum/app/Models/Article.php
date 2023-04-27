<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'articleid';
    public $incrementing = false;

    public function articleFreeFrom(){
        return $this->hasMany("\App\Models\ArticleFreeFrom", "freefromid", "freefromid");
    }

    public function articleQuiz(){
        return $this->hasOne("\App\Models\Quiz", "quizid", "quizid");
    }
}
