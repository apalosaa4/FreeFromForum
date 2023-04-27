<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(){
        if(!Auth::check())
            abort(403);
        return AppHelper::viewWithGuestId('profile.profile', ['user'=>Auth::user()]);
    }
}
