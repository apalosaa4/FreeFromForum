<!DOCTYPE html><html lang="en" class="html">
<head>
    <base href="/about">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>About</title>
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
        <div class="md:col-span-1 navpic">
        </div>
        <main class="main"> 
            <!-- middle body starts here -->   
            <header>
                <h2 id="top" class="text-lg">About</h2>
            </header>
            <div>
                <div class="card-content">
                
                </div>
                <div class="mt-8">
                </div>
            </div>
        </main>
        <div class="md:col-span-1 navpic ">
        </div>
    </div>
@endsection   
</body>
</html>