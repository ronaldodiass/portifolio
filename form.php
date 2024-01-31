<?php

     $nome = addslashes($_POST['nome']);
     $email = addslashes($_POST['email']);
     $celular = addslashes($_POST['celular']);
     $mensagem = addslashes($_POST['mensagem']);

     $send = "ronaldo_benedito@hotmail.com";
     $assunto = "Coleta de Dados - Portifólio"

     $content = "Nome: ".$nome."\n"."Email: ".email."\n"."Telefone: ".$telefone."\n"."Mensagem: ".$mensagem;

     $header = "From: ronaldo_benedito@hotmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

     if(mail($send,$content,$content,$header)){
          echo("Mensagem enviada com sucesso!");           
     } else{
          echo("Houve um erro ao enviar sua mensagem.");
     }

?>