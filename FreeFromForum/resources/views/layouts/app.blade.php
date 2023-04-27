<?php
use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
?>
<!DOCTYPE html>
<html lang="en" class="html">
<head>
    <base href="/recipedemo">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="img/profile.ico" sizes="16x16">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="index.js"></script> 
    <title>FreeFromForum</title>
</head>

<body class="body">
<div>

    <input type="checkbox" id="nav-control" class="sticky nav-control" >
    <label for="nav-control" class="toggle-button">
        <div class="wolverine">
            <div class="claws"></div>
            <span class="text-green-light">menu</span>
        </div>
    </label>

    <!--   { { !!!!

    <nav class="navigation">
        <h1 class="{ { strpos(\Route::currentRouteName(), "welcome") === false ? '' : 'active' }}">
            <a href="{ { route("welcome") }}">{ { strpos(\Route::currentRouteName(), "welcome") === false ? '' : '> ' }} Home</a>
        </h1>
        <h1 class="{ { strpos(\Route::currentRouteName(), "recipes") === false ? '' : 'active' }}">
            <a href="{ { route("recipes") }}">{ { strpos(\Route::currentRouteName(), "recipes") === false ? '' : 'active' }} Recipes</a>
        </h1>
        <h1 class="{ { strpos(\Route::currentRouteName(), "articles") === false ? '' : 'active' }}">
            <a href="{ { route("articles") }}">{ { strpos(\Route::currentRouteName(), "articles") === false ? '' : 'active' }} Articles</a>
        </h1>
        <h1 class="{ { strpos(\Route::currentRouteName(), "badges") === false ? '' : 'active' }}">
            <a href="{ { route("badges") }}">{ { strpos(\Route::currentRouteName(), "badges") === false ? '' : 'active' }} Badges</a>
        </h1>
        <h1 class="{ { strpos(\Route::currentRouteName(), "about") === false ? '' : 'active' }}">
            <a href="{ { route("about") }}">{ { strpos(\Route::currentRouteName(), "about") === false ? '' : 'active' }} About</a>
        </h1>
        <h1 class="{ { strpos(\Route::currentRouteName(), "contact") === false ? '' : 'active' }}">
            <a href="{ { route("contact") }}">{ { strpos(\Route::currentRouteName(), "contact") === false ? '' : 'active' }} Contact</a>
        </h1>
    </nav>

    -->

    <nav class="navigation">
        <h1>
            <a href="#">Home</a>
        </h1>
        <h1>
            <a href="#">Recipes</a>
        </h1>
        <h1>
            <a href="#">Articles</a>
        </h1>
        <h1>
            <a href="#">Socials</a>
        </h1>
        <h1>
            <a href="#">About</a>
        </h1>
    </nav>
</div>
<div class="title">    
    <div class="col-span-4">
    </div>
    <h1 class="fonts">
        <a href="#" class="hovering">FreeFromForum</a>
    </h1>
    <div class="col-span-3">
    </div>
    <div class="profile-icon">
        <!--<a onclick="myFunction()">-->
        <!--
        <a>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
              </svg> 
        </a>
        -->
        
        <!--   { {  @!!!!

        <a href="{ {Auth::check() ? route('profile') : route('login') }}"></a>
        <div>
            @ auth()
                <a href="{ { route('profile')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg> 
                </a>
            @ else
                <a href="{ { route('login')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg> 
                </a>
            @ endauth
        </div>

        -->

        <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
            </svg> 
        </a>
    </div>
</div>
<div class="progress-header">
    <div class="progress-container">
        <div id="myBar" class="progress-bar"></div>
    </div>
</div>
<!-- Header END -->


<!-- ========================= ACTUAL CONTENT STARTS HERE ========================= -->

@yield('content')

<!-- ========================= END CONTENT ========================= -->


<!-- FOOTER STARTS HERE THIS WILL BE THE SAME ON ALL PAGES! -->
<!-- ========================= FOOTER ========================= -->
<footer class="section-footer flex justify-center text-center border-top text-green-light bg-green-basic border-gray-dark">
    <div class="container">
        <section class="footer-top padding-y pb-6"><br>
            <div class="grid md:grid-cols-4 sm:grid-cols-2 row ">
                <aside class=" md:col-span-1 pb-6">
                    <h6 class="text-lg text-center pb-2 cursor-default">Shops</h6>
                    <ul>
                        <a class="text-green-light text-sm cursor-default">
                            <li class="footer">
                                Eger 
                            </li>   
                            <li class="footer">
                                Budapest 
                            </li>
                            <li class="footer">
                                Opening Soon 
                            </li>
                        </a>
                    </ul>
                </aside>
                <aside class="md:col-span-1 pb-6">
                    <h6 class="text-lg text-center pb-2 cursor-default">Content</h6>
                    <ul>
                        <li>
                            <a href="#" class="text-sm footer">
                                Recipes
                            </a> 
                        </li>   
                        <li>
                            <a href="#" class="text-sm footer">
                                Articles
                            </a> 
                        </li> 
                    </ul>
                </aside>
                <aside class="md:col-span-1 pb-6">
                    <h6 class="text-lg text-center pb-2 cursor-default">Info</h6>
                    <ul>
                        <li>
                            <a href="#" class="text-sm footer">
                                About us
                            </a> 
                        </li>   
                    </ul>
                </aside>
                <aside class="md:col-span-1 pb-6">
                    <h6 class="text-lg text-center pb-2 cursor-default">Socials</h6>
                    <ul>
                        <li>
                            <a href="https://www.instagram.com/freefromforum/" class="text-sm footer">
                                Instagram
                            </a> 
                        </li>   
                    </ul>
                </aside>
            </div>
            <!-- row END -->
        </section>
        <!-- footer-top END -->

        <section class="footer-bottom border-bottom row">
            <div class="col-md-12 text-md-center">
                <p class="cursor-default">© 2023 FreeFromForum</p>
            </div>
        </section>
    </div>
    <!-- //container -->
</footer>
<!-- ========================= FOOTER END  ========================= -->


</body>

</html>