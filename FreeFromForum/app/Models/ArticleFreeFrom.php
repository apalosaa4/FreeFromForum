<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleFreeFrom extends Model
{
    use HasFactory;
    
    public function article(){
        return $this->belongsTo("\App\Models\Article", 'articleid', 'articleid');
    }

    public function freeFrom(){
        return $this->belongsTo("\App\Models\FreeFrom", 'freefromid', 'freefromid');
    }
}
