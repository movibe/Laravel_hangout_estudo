<?php

class ProductsController extends \BaseController {

	// Chamo o Template que está na pasta View/Layout/main.blade.php
	protected $layout = 'layout.main';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		// SELECT * FORM products
		$queryProducts = Product::all();
		// Coloco o retorno um array
		$produtos = array('products' => $queryProducts );
		// Passo o Array para o meu Content
		$this->layout->content = View::make('products.index', $produtos);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		// Formulario para Cadastrar Produtos
		$this->layout->content = View::make('products.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// Crio um Novo Produto
		$product = new Product;
		// Alimento com o get dos dados do Post
		$product->name = Input::get('name');
		$product->description = Input::get('description');
		$product->price = Input::get('price');
		// Salvo o Produto
		$product->save();
		// Faço um Redirecionametno para o index 
		return Redirect::action('ProductsController@index');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
