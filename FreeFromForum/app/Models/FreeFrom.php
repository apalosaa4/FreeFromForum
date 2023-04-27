<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreeFrom extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'freefromid';
    public $incrementing = false;

    public function recipeFreeFrom(){
        return $this->hasMany("\App\Models\RecipeFreeFrom", 'freefromid', 'freefromid');
    }

    public function articleFreeFrom(){
        return $this->hasMany("\App\Models\ArticleFreeFrom", 'freefromid', 'freefromid');
    }
}
