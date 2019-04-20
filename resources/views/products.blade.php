@extends('layouts.app')

@section('head')
	<title>Nos produits</title>
@endsection


<?php $cpt = 0; ?>
        	@section('content')
        		<div style="text-align: center;">
            		<label for="mark-select">Filtrer par marque :</label>
            		<select id="mark-select">
            			<option>-- Choisir le filtre --</option>
            			<option value="all">Voir tout</option>
            			<option value="Samsung">Samsung</option>
            			<option value="Apple">Apple</option>
            		</select>
        		</div>	
    			<div class="card-deck">
                    @foreach($products as $product)
                    <?php $cpt++; ?>    		
                        	<div class="card bloc" style="width: 18rem; text-align: center; margin-top: 1em;">
                               <img src="{{ asset($product->image) }}" class="card-img-top" alt="image indisponible" style="margin-left: auto; margin-right: auto; width: 70%;">
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
            @endsection
            
       @section('script')
       	<script type="text/javascript">
			document.getElementById("mark-select").onchange = function filter()
			{
				if(document.getElementById("mark-select").value != "all") window.location.href = "/projetFullStack/public/products/" + document.getElementById("mark-select").value;		
				else window.location.href = "/projetFullStack/public/products";
			}
		</script>
       @endsection     
            
            
            
            
            
            
            
            
            
            
            
            