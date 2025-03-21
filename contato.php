<?php


$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$barbeiro_id  =$_POST['barbeiro'];
$hora = $_POST['horario'];
$dia = $_POST['dia'];
$servico = $_POST['servicos'];
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento Concluído</title>
    <link rel="stylesheet" href="styles/contato.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
   <header class="hero">
       <a href="index.html" id="voltar">voltar</a>
        <h1>TK</h1>
        <nav>
            <a href="index.html" id="btn_home">Home</a>
            <a href="index.html" id="btn_servicos">Serviços</a>            
            <a href="index.html" id="btn_contato">contato</a>
        </nav>       
    </header>
   <main class="main">
     <h2 id="concluido">Agendamento Concluído</h2>
     <div class="dados">
  <?php
  echo"<p>Barbeiro: $barbeiro_id</p>";
  echo"<p>Horário: $hora</p>";
   echo"<p>Data: $dia</p>";
   echo"<p>Serviço: $servico</p>";
  ?>
  </div>
  <div class="alterar">
    <button type="submit" value="alterar">Alterar Agendamento</button>
    
    <button type="submit" value="excluir">Excluir Agendamento</button>
  </div>
  </main>
  
  
</body>
</html>
