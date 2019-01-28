<?php

function getProdutos(){

	$dados  = array(
		["titulo" =>"Php Básico","descricao"=>"Curso de php Básico","valor"=>"100.90"],
		["titulo" =>"Php com PDO","descricao"=>"Curso de php com PDO","valor"=>"1400000.80"],
		["titulo" =>"Php OO","descricao"=>"Curso de php Orientado Objeto","valor"=>"150.90"]
);

	return $dados;
}


function buscaProdutos($busca){
	$produtos   = getProdutos();
	$resultados  = [];

	foreach ($produtos as $key => $produto) {
		// $existe   = in_array($busca, $produto);
		$existe   = in_array(strtolower($busca),array_map(strtolower, $produto));

		if ($existe) {
			array_push($resultados, $produto);
		}
	}  
	return $resultados;
}