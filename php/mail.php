<?php
  //Variáveis
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $assunto = $_POST['assunto'];
  $mensagem = $_POST['mensagem'];
  $data_envio = date('d/m/Y');
  $hora_envio = date('H:i:s');

  
  $arquivo = "
    
    Nome: $nome
    E-mail: $email
    Assunto: $assunto
    Mensagem: $mensagem
    Este e-mail foi enviado em $data_envio às $hora_envio
    
  ";
  
  //Emails para quem será enviado o formulário
  $destino = "contato.leonardosaconato@gmail.com";
  $assunto2 = "Contato Site Leonardo";

  //Este sempre deverá existir para garantir a exibição correta dos caracteres
  $headers  = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $headers .= "From: $nome <$email>";

  //Enviar
  $status = mail($destino, $assunto2, $arquivo, $headers);
  
  if ($status) 
  {
    
    echo "<script> alert('Mensagem enviada com Sucesso!');location.href=\"../index.html\";</script>";
  } 
  else 
  {
    
    echo "<script> alert('Falha ao enviar a Mensagem!');location.href=\"../index.html\";</script>";
  }
  
  

?>