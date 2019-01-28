<?php 

function getUsuario(){
    $dados = [
               ["nome"=>"Ernest","email"=>"ernest13@gmail.com"],
               ["nome"=>"Judeline","email"=>"judeline3@gmail.com"],
               ["nome"=>"Pedro","email"=>"pedrao@gmail.com"]
             ];
    
    return $dados;
}

function exibeUsuario(){
    $usuarios = getUsuario();
    
    $html ="";
    
    foreach($usuarios as $key=> $usuario){
        $nome  = $usuario["nome"];
        $email = $usuario["email"];
        
        $html .= "<li>Nome:$nome - Email:$email</li>";
//        $html .= "<li>Nome: $nome - E-mail: $email</li>";
    }
    
    echo $html;
}