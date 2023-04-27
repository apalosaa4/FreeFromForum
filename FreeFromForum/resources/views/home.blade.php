<!DOCTYPE html><html lang="en" class="html">
<head>
    <base href="/home">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="img/profile.ico" sizes="16x16">
    <script src="public/index.js"></script> 
    <title>Home</title>
</head>

<body class="body">

    <div class="btn back-to-top" id="btn-back-to-top"> 
        <svg class="w-8 inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l7.5-7.5 7.5 7.5m-15 6l7.5-7.5 7.5 7.5" />
        </svg>               
    </div>

@extends('layouts.app')

@section('content')
<style>
    .effect {
      background-image: url("img/background.jpg");
      min-height: 500px; 
      /*scrolling effect */
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
  
    h3 {
    color: white;
    font-size: 80px;
    padding-top: 150px;
    text-align: center;
    transform: scale(1);
    animation: scale 3s forwards cubic-bezier(0.5, 1, 0.89, 1);
    }
    @keyframes scale {
      100% {
      transform: scale(1);
      }
    }
  
    span {
    display: inline-block;
    opacity: 0;
    filter: blur(8spx);
    }
  
    span:nth-child(1) {
      animation: fade-in 0.8s 0.1s forwards cubic-bezier(0.11, 0, 0.5, 0);
    }
  
    span:nth-child(2) {
      animation: fade-in 0.8s 0.2s forwards cubic-bezier(0.11, 0, 0.5, 0);
    }
  
    span:nth-child(3) {
      animation: fade-in 0.8s 0.3s forwards cubic-bezier(0.11, 0, 0.5, 0);
    }
  
    @keyframes fade-in {
    100% {
      opacity: 1;
      filter: blur(0);
      }
    }
</style>
  
  <div class="effect">
    <h3>
      <span>Welcome</span>
      <span>to</span>
      <span>FreeFromForum</span>
    </h3>
  </div>
@endsection   
</body>
</html>