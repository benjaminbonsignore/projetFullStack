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
                background: url('img/11.jpg');  
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
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
            
            .hero-section {
                  background: url("https://images.unsplash.com/photo-1493200754321-b1d3cbc969a8?ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80") 50% no-repeat;
                  background-size: cover;
                  height: 90vh;
                  width: 100%;
                  text-align: center;
                  display: flex;
                  justify-content: center;
                  text-align: center;
}

                .titre{
                    padding-bottom:100px;
                }
                
                .container {
    position: relative;
    margin: 0 auto;
    width: 94%;
    max-width: 800px;
    text-align: center;
}

.content {
    position: relative;
    padding: 25px;
    color: #F5F7F7;
    font-weight: 80;
    letter-spacing: 0.4px;
    line-height: 30px;
}

.content p {
    font-weight: 80;
    color: #F5F7F7;
    letter-spacing: 0.40px;
    font-size: 1.18em;
    line-height: 25px;
    text-align: center;
}

.nav {
    max-width: 350px;
    padding: 20px 0;
    margin: 0 auto;
}
        </style>
    	
        <link href="../css/detail.css" rel="stylesheet">
    @endsection
    </head>
    <body>
    
    <header>
    <div class="hero-section"></div>
    </header>
     
   <?php $cpt = 0;?>
    	@section('content')
    		<h2 class="titre" style="margin-top:100px;">Notre sélection de smartphones !</h2>	
			<div class="card-deck" style="justify-content:center;">
                @foreach($products as $product)
                <?php $cpt++;?>    		
                    	<div class="card bloc" style="max-width: 18rem; text-align: center; margin-top: 1em;">
                           <img src="{{ $product->image }}" class="card-img-top" alt="image indisponible" style="margin-left: auto; margin-right: auto; width: 70%;">
                           <div class="card-body">
                              <h5 class="card-title">{{ $product->label }}</h5>
                              <h6 class="card-title">{{ $product->price }}€</h6>
                              <p class="card-text">{{ $product->description }}</p>
                              <a href="{{ route('detail',[$product->id]) }}" class="btn btn-primary">Détails</a>
                            </div>
        				</div>
        				<?php if(($cpt % 4) == 0){?>
        				<div class="w-100"></div>
        				<?php } ?>	
               	@endforeach
            </div>
            <!-- <ul style="display: flex; justify-content: space-around; margin-top: 4em;"></ul> -->
            
        <footer>
    <div class="content">
        <div class="container">
            <h1 style="margin-bottom: 50px;">rejoignez nous !</h1>
            <a href="https://www.facebook.com/lovemyphone.fr/">
           <img src="https://www.facebook.com/images/fb_icon_325x325.png" style="height:70px; width:70px; float:left"/>
        </a>
        
         <a href="https://twitter.com/LoveMyPhone123?lang=fr">
           <img src="https://pbs.twimg.com/profile_images/1111729635610382336/_65QFl7B_400x400.png" style="height:70px; width:70px; float:none;"/>
        </a>
         <a href="https://www.google.com/maps/place/13+Rue+du+11+Novembre+1918,+54270+Essey-l%C3%A8s-Nancy/@48.7042968,6.2208884,17z/data=!3m1!4b1!4m5!3m4!1s0x479499d24e00919b:0x1705a11a9f6d907a!8m2!3d48.7042968!4d6.2230772">
           <img src="http://cdn.onlinewebfonts.com/svg/img_303807.png" style="height:70px; width:70px; float:right;"/>
        </a>
    
        </div>
    </div>
</footer>
        @endsection
        
    </body>
</html>
