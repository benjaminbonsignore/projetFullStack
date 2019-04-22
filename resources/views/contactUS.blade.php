	@extends('layouts.app')
    
    @section('head')

<!DOCTYPE html>
<html>
<head>
	<title>Contactez-nous</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<style>
                
                .dropdown{
            float:right;
            padding-right: 30px;
        }
        .btn{
            border:0px;
            margin:10px 0px;
            box-shadow:none !important;
        }
        .dropdown .dropdown-menu{
            padding:20px;
            top:30px !important;
            width:350px !important;
            left:-110px !important;
            box-shadow:0px 5px 30px black;
        }
        .total-header-section{
            border-bottom:1px solid #d2d2d2;
        }
        .total-section p{
            margin-bottom:20px;
        }
        .cart-detail{
            padding:15px 0px;
        }
        .cart-detail-img img{
            width:100%;
            height:100%;
            padding-left:15px;
        }
        .cart-detail-product p{
            margin:0px;
            color:#000;
            font-weight:500;
        }
        .cart-detail .price{
            font-size:12px;
            margin-right:10px;
            font-weight:500;
        }
        .cart-detail .count{
            color:#C2C2DC;
        }
        .checkout{
            border-top:1px solid #d2d2d2;
            padding-top: 15px;
        }
        .checkout .btn-primary{
            border-radius:50px;
            height:50px;
        }
        .dropdown-menu:before{
            content: " ";
            position:absolute;
            top:-20px;
            right:50px;
            border:10px solid transparent;
            border-bottom-color:#fff;
        }
         
        .thumbnail {
            position: relative;
            padding: 0px;
            margin-bottom: 20px;
        }
         
        .thumbnail img {
            width: 100%;
        }
         
        .thumbnail .caption{
            margin: 7px;
        }
         
        .page {
            margin-top: 50px;
        }
         
        .btn-holder{
            text-align: center;
        }
         
        .table>tbody>tr>td, .table>tfoot>tr>td{
            vertical-align: middle;
        }
        @media screen and (max-width: 600px) {
            table#cart tbody td .form-control{
                width:20%;
                display: inline !important;
            }
            .actions .btn{
                width:36%;
                margin:1.5em 0;
            }
         
            .actions .btn-info{
                float:left;
            }
            .actions .btn-danger{
                float:right;
            }
         
            table#cart thead { display: none; }
            table#cart tbody td { display: block; padding: .6rem; min-width:320px;}
            table#cart tbody tr td:first-child { background: #333; color: #fff; }
            table#cart tbody td:before {
                content: attr(data-th); font-weight: bold;
                display: inline-block; width: 8rem;
            }
                 
            table#cart tfoot td{display:block; }
            table#cart tfoot td .btn{display:block;}    
        }
        
        body {
            background: url('img/11.jpg'); 
            }
                
                .container {
                  position: absolute;
                  top: 0;
                  bottom: 0;
                  left: 0;
                  right: 0;
                  max-width: 1000px;
                  width: 90%;
                  margin: auto;
                  background: #c0c2c6;
                  padding: 30px;
                  border-style: solid;
                  border-width: 15px;
                  border-top-color: lighten(#000, 20%);
                  border-right-color: lighten(#000, 0%);
                  border-bottom-color: lighten(#000, 20%);
                  border-left-color: lighten(#000, 0%);
                  box-shadow: 2px 2px 4px rgba(0,0,0,.6);
                            }
                            
          #form{
            text-align:center;
          }
</style>
    @endsection

		 @section('content')
<div class="container">
	<h1><center>Contactez Nous</center></h1>


	@if(Session::has('success'))
	    <div class="alert alert-success">
	      {{ Session::get('success') }}
	    </div>
	@endif


	{!! Form::open(['route'=>'contactus.store']) !!}


		<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
			{!! Form::label('Nom:') !!}
			{!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Entrer votre nom']) !!}
			<span class="text-danger">{{ $errors->first('Nom') }}</span>
		</div>


		<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
			{!! Form::label('Email:') !!}
			{!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Entrer votre Email']) !!}
			<span class="text-danger">{{ $errors->first('Email') }}</span>
		</div>


		<div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
			{!! Form::label('Message:') !!}
			{!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Entrer votre message']) !!}
			<span class="text-danger">{{ $errors->first('Message') }}</span>
		</div>


		<div id="form">
			<button class="btn btn-success">Envoyer</button>
		</div>


	{!! Form::close() !!}


</div>


    @endsection