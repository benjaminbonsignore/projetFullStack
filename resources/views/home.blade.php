	@extends('template')
     
    @section('contenu')
    	<ul style="display: flex; justify-content: space-around; margin-top: 3em;">
        @foreach($products as $product)  	
            	<div class="card" style="width: 18rem; text-align: center;">
                   <img src="{{ $product->image }}" class="card-img-top" alt="image indisponible" style="margin-left: auto; margin-right: auto; width: 70%;">
                   <div class="card-body">
                      <h5 class="card-title">{{ $product->label }}</h5>
                      <h6 class="card-title">{{ $product->price }}€</h6>
                      <p class="card-text">{{ $product->description }}</p>
                      <a href="{{ route('detail',[$product->id]) }}" class="btn btn-primary">Détails</a>
                    </div>
				</div>
       	@endforeach
       	</ul>
    @endsection
    
