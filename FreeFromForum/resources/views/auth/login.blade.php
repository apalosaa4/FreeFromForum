<!DOCTYPE html><html lang="en" class="html">
<head>
    <base href="/login">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/styles.css">
    <script src="public/index.js"></script> 
    <title>Sign in</title>
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
            <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
                <div class="w-full max-w-md space-y-8">
                  <div>
                    <h2 class="text-center text-3xl font-bold tracking-tight text-gray-900">Sign in to your account</h2>
                    <p class="mt-2 text-center text-gray-600">
                      Or
                      <a href="/register" class="font-medium text-green-900 hover:text-black">Register for a new account</a>
                    </p>
                  </div>
                  <form class="mt-8 space-y-6" action="{{ route('login') }}" method="POST">
                    <input type="hidden" name="remember" value="true">
                        <div>
                            <label for="email-address" class="sr-only">{{ __('E-Mail Address') }}</label>
                            <input id="email-address" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" type="email" autocomplete="email" required class="relative block w-full appearance-none rounded-none rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-green-basic focus:outline-none focus:ring-green-basic sm:text-sm" placeholder="Email address">
                        
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                      
                    <div>
                        <label for="password" class="sr-only">{{ __('Password') }}</label>
                        <input id="password" name="password" class=" form-control @error('password') is-invalid @enderror" type="password" autocomplete="current-password" required class="relative block w-full appearance-none rounded-none rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-green-basic focus:outline-none focus:ring-green-basic sm:text-sm" placeholder="Password">
                      
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
              
                    <div class="flex items-center justify-between">
                      <div class="flex items-center">
                        <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" {{ old('remember') ? 'checked' : '' }}>
                        <label for="remember-me" class="ml-2 block text-gray-900">{{ __('Remember Me') }}</label>
                      </div>
                    </div>
              
                    <div class="mt-4">
                      <button type="submit" class="transition ease-in-out duration-300 shadow-sm group relative flex w-full justify-center rounded-md bg-green-basic py-2 px-4 font-medium text-white hover:bg-green-medium">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                          <svg class="h-5 w-5 text-green-background" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
                          </svg>
                        </span>
                        {{ __('Login') }}
                      </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}" style="color: rgba(140, 63, 187, 0.892)">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                  </form>
                </div>
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







@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-transparent">
                <div class="card-header-transparent offset-md-6 mb-4" >
                    <h3 style="color: rgba(140, 63, 187, 0.892)">{{ __('Login') }}</h3>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="background-color: rgba(140, 63, 187, 0.892); border-color:rgba(140, 63, 187, 0.892)">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="color: rgba(140, 63, 187, 0.892)">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
