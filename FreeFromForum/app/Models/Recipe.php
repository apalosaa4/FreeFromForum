<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'recipeid';

    public $incrementing = false;

    public function recipeIngredient(){
        return $this->hasMany("\App\Models\RecipeIngredient", "recipeid", "recipeid");
    }

    public function recipeFreeFrom(){
        return $this->hasMany("\App\Models\RecipeFreeFrom", "recipeid", "recipeid");
    }

    public function like(){
        return $this->belongsTo("\App\Models\Likes", "recipeid", "likes");
    }
}
