<div class="col-sm-3">
    	    
    	    <div class="hero-widget well well-sm">
                <div class="text">
                    <var>{{{$product->name}}}</var>
                    <label class="text-muted">R$ {{{$product->price}}}</label>
                </div>
                <!-- <div class="text">
                    {{ $product->description }}
                </div> -->
                <div class="options">
                    <!-- Link para os Produtos utlizando a action do blade -->
                    <a href="{{ action('ProductsController@show', array('id' => $product->id )) }}" class="btn btn-success "><i class="glyphicon glyphicon-search"></i> </a>
                    <a href="javascript:;" class="btn btn-warning "><i class="glyphicon glyphicon-plus"></i> </a>
                    <a href="javascript:;" class="btn btn-danger "><i class="glyphicon glyphicon-minus"></i> </a>
                </div>
            </div>
		</div>

	