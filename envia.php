<?php

$nome = addcslashes($_POST['nome']);
$email = addcslashes($_POST['email']);
$celular = addcslashes($_POST['celular']);

    $para = "eltonjunior20231@poli.ufrj.br"
    $assunto = "coleta de dados - portifolio ";

    $corpo = "Nome: ".$nome. "\n". "Email : "$email."\n". "Celular: ".$celular;

    $cabeca = "From: eltonmar12@gmail.com"."\n"."reply-to: "$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("Email enviado com sucesso");
    }else{
        echo("Houve um erro ao enviar o email");
    }
    
?>