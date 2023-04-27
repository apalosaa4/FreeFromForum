<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecipeIngredient extends Model
{
    use HasFactory;
    
    public function recipe(){
        return $this->belongsTo("\App\Models\Recipe", 'recipeid', 'recipeid');
    }

    public function ingredient(){
        return $this->belongsTo("\App\Models\Ingredient", 'ingredientid', 'ingredientid');
    }
}
