@section('content')
	
	<h2>Produtos</h2>

	<div class="row">
		
		@foreach ($products as $product)		
			<!-- Include de Outra Viw -->
			@include (  'products._products_title')

		@endforeach

	</div>

@stop