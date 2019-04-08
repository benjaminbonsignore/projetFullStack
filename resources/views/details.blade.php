    @extends('template')
     
    @section('head')
    	<title>{{ $product->label }}</title>
     	<link rel="stylesheet" href="../css/detail.css">
    @endsection
     
    @section('contenu')
        <div id='main'>
            <img id='imgDetail' src="../{{ $product->image }}" alt="image indisponible" >
            <div id='contenu'>
                <h4>{{ $product->label }}</h4>
                <br>
                <p>{{ $product->longDescr }}</p>
                <a id='achat' class="btn btn-danger">Acheter pour {{ $product->price }}€</a>
            </div>
        </div>
    @endsection