<!DOCTYPE html><html lang="en" class="html">
<head>
    <base href="/recipe/id">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Recipe</title>
</head>

<body class="body">

    <div class="btn back-to-top" id="btn-back-to-top"> 
        <svg class="w-8 inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l7.5-7.5 7.5 7.5m-15 6l7.5-7.5 7.5 7.5" />
        </svg>               
    </div>

@extends('layouts.app')

@section('content')
    <div class="grid md:grid-cols-7 text-green-900">    
        <div class="md:col-span-1 navpic">
        </div>
        <main class="id-main"> 
            <header>
                <h1 id="title" class="py-3 text-5xl text-justify cursor-default">{{$recipe->recipe_name}}</h2>
            </header>
            <div id="summary" class="py-2 text-justify text-lg cursor-default">
                {{$recipe->recipe_summary}}
            </div>
            <div class="sm:grid sm:grid-cols-12 my-4 flex justify-evenly">
                <div class="sm:col-span-2 cursor-default flex justify-center">
                    Free from:
                </div>
                <div class="sm:col-span-6 grid items-center ">
                    <ul class="flex justify-start">
                        <li class="cursor-default mx-1 px-3 bg-green-light bg-opacity-90 text-green-basic text-sm font-bold rounded-full">
                            {{$recipe->recipe_freefrom}}
                        </li>
                    </ul>
                </div>
                <div class="sm:col-span-2"></div>
            </div>
            <div class="my-5">
                <div class="rounded overflow-hidden shadow-md relative transition ease-out duration-300">
                    <div class="flex justify-center">
                        <img id="pic" src={{$recipe->recipe_path}} alt="noimg" class="w-full h-72 object-cover">         
                    </div>
                </div>
            </div>
            <div class="text-2xl mx-5 my-5 py-5 cursor-default">
                <div class="flex items-center py-4">
                    <div class="flex-grow bg-green-basic h-px"></div> 
                    <span class="flex-shrink text-2xl tracking-mwidest px-4">Ingredients</span>
                    <div class="flex-grow bg-green-basic h-px"></div>
                </div>
                <div class=" font-the-girl-next-door">
                    <ul id="ingredients" class=" ml-5 my-3 list-disc text-lg">
                        <li>
                            {{$recipe->recipe_ingredients}}
                        </li>
                    </ul>
                </div>
            </div> 
            <div id="text" class="py-2 text-lg cursor-default text-justify">
                {{$recipe->recipe_text}}
            </div>   
        </main>
        <div class="md:col-span-1 navpic text-green-basic pt-3">
            <a id="translate-button" class="flex justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="pr-2 w-6 h-6">
                    <path d="M17 20H2.5A2.503 2.503 0 0 1 0 17.5v-15C0 1.122 1.122 0 2.5 0h8a.5.5 0 0 1 .473.338l6.5 19A.502.502 0 0 1 17 20zM2.5 1C1.673 1 1 1.673 1 2.5v15c0 .827.673 1.5 1.5 1.5h13.8L10.143 1H2.5z"/>
                    <path d="M21.5 24h-8a.5.5 0 0 1-.468-.324l-1.5-4a.5.5 0 0 1 .936-.352L13.847 23H21.5c.827 0 1.5-.673 1.5-1.5v-15c0-.827-.673-1.5-1.5-1.5H12a.5.5 0 0 1 0-1h9.5C22.878 4 24 5.122 24 6.5v15c0 1.378-1.122 2.5-2.5 2.5z"/>
                    <path d="M13.5 24a.5.5 0 0 1-.376-.83l3.5-4a.5.5 0 1 1 .753.659l-3.5 4A.502.502 0 0 1 13.5 24zM9.5 14a.499.499 0 0 1-.471-.332L7 7.987l-2.029 5.681a.5.5 0 0 1-.942-.336l2.5-7c.142-.398.8-.398.941 0l2.5 7A.5.5 0 0 1 9.5 14z"/>
                    <path d="M8 11H6a.5.5 0 0 1 0-1h2a.5.5 0 0 1 0 1zM21.5 11h-7a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1z"/>
                    <path d="M17.5 11a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 1 0v1a.5.5 0 0 1-.5.5zM16 17a.498.498 0 0 1-.29-.907c2.189-1.555 3.79-4.727 3.79-5.592a.5.5 0 0 1 1 0c0 1.318-1.927 4.785-4.21 6.408A.507.507 0 0 1 16 17z"/>
                    <path d="M20 18a.494.494 0 0 1-.337-.131c-.363-.332-3.558-3.283-4.126-4.681a.5.5 0 0 1 .926-.376c.409 1.007 2.936 3.459 3.875 4.319A.5.5 0 0 1 20 18z"/>
                </svg>
            </a>
            <a id="google_translate_element" class="flex justify-center">
                <script type="text/javascript">
                function googleTranslateElementInit() {
                new google.translate.TranslateElement(
                    {pageLanguage: 'en'},
                    'google_translate_element');
                }
            </script>
            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
            </a>
        </div>
    </div>
@endsection     
</body>
</html>