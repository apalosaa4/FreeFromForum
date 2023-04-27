<!DOCTYPE html><html lang="en" class="html">
<head>
    <base href="/profile">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Profile</title>
</head>

<body class="body">

    <div class="btn back-to-top" id="btn-back-to-top"> 
        <svg class="w-8 inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l7.5-7.5 7.5 7.5m-15 6l7.5-7.5 7.5 7.5" />
        </svg>               
    </div>

@extends('layouts.app')

@section('content')
    <div class="grid md:grid-cols-7">    
        <div class="pt-5 pb-5 md:col-span-1 sm:text-lg md:text-2xl cursor-default font-bold navpic flex justify-center"></div>

        <div class="md:pt-16 md:pb-16 sm:pt-5 sm:pb-5 mr-auto bg-green-background ml-auto md:col-span-5">
            <div class="overflow-hidden rounded-lg  shadow-lg">
                <div class="px-4 py-5 rounded-lg sm:px-6 bg-green-cambridge bg-opacity-40 flex justify-center">
                  <h3 id="nickname-profile" class="text-lg cursor-default font-medium leading-6 text-gray-900">{{$user->$user_name}}'s Profile</h3>       
                </div>
            </div>

            <div class="pb-8"></div>

            <div class="overflow-hidden rounded-lg shadow-lg">
                <div class="border-t rounded-lg cursor-default bg-green-cambridge bg-opacity-20 border-gray-200">
                  <dl>
                    <div class= "px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                      <dt class="text-sm font-medium text-gray-500">Nickname</dt>
                      <dd id="nickname" class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$user->$user_name}}</dd>
                    </div>
                    <div class= "px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                      <dt class="text-sm font-medium text-gray-500">Email address</dt>
                      <dd id="email" class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$user->$user_email}}</dd>
                    </div>
                    <div class=" px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Gender</dt>
                        <dd id="gender" class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0"> {{$user->$user_gender}} </dd>
                      </div>
                  </dl>
                </div>
            </div>           
            <div class="pb-16"></div>
        </div>    

        <div class="md:col-span-1 navpic pt-3">
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