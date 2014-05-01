@section('content')
	
	<div class="row">
		<h1> {{{ $product->name }}} </h1>
		<p> {{{ $product->description }}} </p>
		<h3><b>R$ {{ $product->price }} </b></h3>

		@include('products._purchase_button')
	</div>

@stop