<?php 

include('configuracao.php');
include('usuarios.php');
include('produtos.php');


function getPaginas(){

	$url    = $_SERVER['REQUEST_URI'];

	$url    = explode("?", $url);
	$url    = $url[0];
	$metodo = $_SERVER['REQUEST_METHOD'];

	if ($metodo == "GET") {

		switch ($url) {
			case '/':
			    $produtos  = getProdutos();
				include('Paginas/home.php');
				break;


				case '/home':
				$produtos  = getProdutos();
				include('Paginas/home.php');
				break;

				// case '/produtos':
				// include('Api/produtos.php');
				// break;

				case '/sobre':
				include('Paginas/sobre.php');
				break;


				case '/contato':
				include('Paginas/contato.php');
				break;


				case '/busca':
				$produtos  = buscaProdutos($_GET['busca']);
				include('Paginas/home.php');
				break;
			
			default:
			    $produtos  = getProdutos();
				include('Paginas/home.php');
				break;
		}
	}
}