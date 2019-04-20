	@extends('layouts.app')
    
    @section('head')
    	<title>Votre panier</title>
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
        </style>
    @endsection
    
    @section('content')
        <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:50%">Produit</th>
            <th style="width:10%">Prix</th>
            <th style="width:8%">Quantité</th>
            <th style="width:22%" class="text-center">Sous-total</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
        <tbody>
        <?php $total = 0;?>
        @foreach($carts as $cartKey => $cartValue)
        <tr>
            <td data-th="Produit">
                <div class="row">
                    <div class="col-sm-3 hidden-xs"><img src="{{ $cartValue->product->image }}" alt="image indisponible" class="img-responsive" style="width: 100%;"/></div>
                    <div class="col-sm-9">
                        <h4 class="nomargin">{{ $cartValue->product->label }}</h4>
                        <p>{{ $cartValue->product->descr }}</p>
                    </div>
                </div>
            </td>
            <td data-th="Prix">{{ $cartValue->product->price }}€</td>
            <td data-th="Quantité">{{ $cartValue->quantity }}</td>
            <td data-th="Sous-total" class="text-center">{{ ($cartValue->product->price) * ($cartValue->quantity) }}€</td>
            <td class="actions" data-th="">
                <a href="./cart/deleteOne/{{ $cartValue->id }}"class="btn btn-danger btn-sm"><i class="fa fa-trash-o">Enlever un</i></a>
            	<a href="./cart/delete/{{ $cartValue->id }}"class="btn btn-danger btn-sm"><i class="fa fa-trash-o">Enlever tout</i></a>
            </td>
        </tr>
        <?php $total += (($cartValue->product->price) * ($cartValue->quantity));?>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <td><a href="{{ url('/products') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i>Continuer les achats</a></td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong>Total <?php echo $total ?>€</strong></td>
        </tr>
        </tfoot>
    </table>
    @endsection