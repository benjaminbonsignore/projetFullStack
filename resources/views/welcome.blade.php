@extends('layouts.app')

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    @section('head')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">		
        <!-- Styles -->        
        <style>
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
             
            
            
            .header-banner {
                background-image: url('https://www.cooktour.com/wp-content/uploads/2018/10/iphone-app-header-background.jpg');
                background-position: center;
                background-repeat: no-repeat;
                background-size: contain;
                margin-left: auto;
                margin-right: auto;
                height: 500px;
            }
            
            .card-deck{
                margin: 1em;
                margin-bottom: 4em;
            }
        </style>
    	
        <link href="../css/detail.css" rel="stylesheet">
    @endsection
    </head>
    <body>
        <header>
        @section('header')
        	<div class="header-banner">	
        	<h1 style="border-radius: 5px; width: 50%; position: relative; z-index: 2; text-align: center; left: 10em; top: 5.5em; padding: 1em; background-color: rgba(255,255,255,.9);">LoveMyPhone</h1>
    	@endsection
    	</header>
        
        <?php $cpt = 0; ?>
        	@section('content')
        		<h2>Notre sélection de smartphones !</h2>	
    			<div class="card-deck">
                    @foreach($products as $product)
                    <?php $cpt++; ?>    		
                        	<div class="card bloc" style="width: 18rem; text-align: center; margin-top: 1em;">
                               <img src="{{ $product->image }}" class="card-img-top" alt="image indisponible" style="margin-left: auto; margin-right: auto; width: 70%;">
                               <div class="card-body">
                                  <h5 class="card-title">{{ $product->label }}</h5>
                                  <h6 class="card-title">{{ $product->price }}€</h6>
                                  <p class="card-text">{{ $product->descr }}</p>
                                  <a href="{{ route('detail',[$product->id]) }}" class="btn btn-primary">Détails</a>
                                </div>
            				</div>
            				<?php if($cpt == 4){ ?>
            				<div class="w-100"></div>
            				<?php } ?>	
                   	@endforeach
                </div>
                <!-- <ul style="display: flex; justify-content: space-around; margin-top: 4em;"></ul> -->
            @endsection
    </body>
</html>
