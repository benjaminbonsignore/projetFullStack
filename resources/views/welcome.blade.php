@extends('layouts.app')

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    @section('head')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Accueil du site téléphone</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">		
        <!-- Styles -->        
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 1em;;
            }

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
             
            .bloc{
	            transition: transform .4s;
	            box-shadow: 3px 3px 3px black;
            }

            .bloc:hover{
            	transform: scale(1.1);
            	z-index: 2;
            }
        </style>
    	
        <link href="../css/detail.css" rel="stylesheet">
    @endsection
    </head>
    <body>
    <?php $cpt = 0;?>
    	@section('content')
    		<h2>Notre sélection de smartphones !</h2>	
			<div class="card-deck">
                @foreach($products as $product)
                <?php $cpt++;?>    		
                    	<div class="card bloc" style="width: 18rem; text-align: center; margin-top: 1em;">
                           <img src="{{ $product->image }}" class="card-img-top" alt="image indisponible" style="margin-left: auto; margin-right: auto; width: 70%;">
                           <div class="card-body">
                              <h5 class="card-title">{{ $product->label }}</h5>
                              <h6 class="card-title">{{ $product->price }}€</h6>
                              <p class="card-text">{{ $product->description }}</p>
                              <a href="{{ route('detail',[$product->id]) }}" class="btn btn-primary">Détails</a>
                            </div>
        				</div>
        				<?php if($cpt == 4){?>
        				<div class="w-100"></div>
        				<?php } ?>	
               	@endforeach
            </div>
            <!-- <ul style="display: flex; justify-content: space-around; margin-top: 4em;"></ul> -->
        @endsection
    </body>
</html>
