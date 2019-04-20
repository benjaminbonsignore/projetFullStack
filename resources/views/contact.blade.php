@extends('layouts.app')

@section('header')
	<title>Contactez-nous</title>
	<style>	
	   .invalid-feedback {
	       display : block;
	   }
	   
	</style>
@endsection

<body>
	@section('content')
        <div class="container">
            <h1>Contactez-nous !</h1>
            <div class="row">
                <div class="col-md-6">
                	@if(Session::has('flash_message'))
                	<div class="alert alert-success">{{ Session::get('flash_message') }}</div>
                	@endif
                <form method="post" action="{{route('/contact.store') }}">
                		{{ csrf_field()}}
                		
                	<div class="form-group">
                		<label>Nom Complet :</label>
                		<input type="text" class="form-control" name="name">
                    		@if ($errors->has('name'))
                    		<small class="form-test invalid-feedback">{{ $errors->first('name') }}</small>
                    		@endif
                	</div>
                	
                	<div class="form-group">
                		<label>Email :</label>
                		    <input type="text" class="form-control" name="email">
                        		@if ($errors->has('email'))
                        		<small class="form-test invalid-feedback">{{ $errors->first('email') }}</small>
                        		@endif
                </div>
                	<div class="form-group">
                		<label>Message :</label>
                			<textarea name="message" class="form-control"></textarea>
                        		@if ($errors->has('message'))
                        		<small class="form-test invalid-feedback">{{ $errors->first('message') }}</small>
                        		@endif
                </div>
                		<button class="btn btn-primary">Envoyer</button>
                </form>
            	</div>
        	</div>	
    	</div>
	@endsection
		<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
		<script>
      		$(document).foundation();
    	</script>
	</body>
</html>

