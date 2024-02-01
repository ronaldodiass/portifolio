<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$mensagem = $_POST['mensagem'];
$data_atual = date('d/m/Y');
$hora_atual = date('H:i:s');

$server = 'localhost';
$user = 'root';
$password = '';
$database = 'formulario';

$conn = new mysqli($server, $user, $password, $database);

if($conn->connect_error){
     die('Falha ao se comunicar com o banco de dados: '.$conn->connect_error);
}

$smtp = $conn->prepare("INSERT INTO mensagens (nome, email, celular, mensagem, data, hora) VALUES (?,?,?,?,?,?)");
$smtp->bind_param("ssssss",$nome, $email, $celular, $mensagem, $data_atual, $hora_atual);

if($smtp->execute()){
     echo "Mensagem enviada com sucesso!";
}else{
     echo "Erro no envio da mensagem".$smtp->error;
}

$smtp->close();
$conn->close();

?>