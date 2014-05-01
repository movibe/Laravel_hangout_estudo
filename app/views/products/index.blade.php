@section('content')
	
	<h2>Lista de Produtos</h2>

	<div class="row">
		
		@foreach ($products as $product)		
			<!-- Include de Outra Viw -->
			@include (  'products._products_title')

		@endforeach

	</div>

@stop