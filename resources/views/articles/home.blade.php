@extends ('layouts.master')
    
    @section ('head.title')

        Home

    @stop
    @section ('head.css')
        <link rel="stylesheet" href="/css/app.css">
    @stop
    @section ('body.content')
    <header>
        <div class="row1">
            <div class="logo">
                <img src="/img/insect.png">
                
            </div>
            <ul class="main-nav1">
                <li class="active">
                    <a href="{{url('/')}}"> Home </a>
                </li>
                <li>
                    <a href=""> News </a>
                </li>
                <li>
                    <a href=""> FAQ </a>
                </li>
            </ul>
            
        </div> 
        <div class="hero">
            <h1> MY LOVE </h1>
            <div class="button">
                <a href="" class="btn btn-one"> Melody Love </a>
                <a href="{{ route('article.index') }}" class="btn btn-two"> Love Story </a>
                
            </div>
            
        </div>
        
    </header>
    
    @stop
