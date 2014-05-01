@section('content')
	{{ Form::open( array('action' => 'ProductsController@store')) }}
		
		{{ Form::label('name', 'Nome do Produto') }}
		{{ Form::text('name') }}

		{{ Form::label('description', 'Descrição do Produto') }}
		{{ Form::textarea('description') }}

		{{ Form::label('price', 'Preço do Produto') }}
		{{ Form::text('price') }}
		
		{{ Form::submit('Salvar') }}

	{{ Form::close() }}
@stop