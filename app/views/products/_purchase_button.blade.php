<form action="#">
	{{ Form::hidden('id_carteira', 'zizaco@gmail.com') }}
	{{ Form::hidden('nome', $product->name ) }}
	{{ Form::hidden('valor', (int)$product->price * 100 ) }}

	{{ Form::submit('Comprar') }}
</form>