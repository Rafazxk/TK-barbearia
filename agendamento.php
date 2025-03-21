<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TK Barbearia - Agendamento</title>
    <link rel="stylesheet" href="styles/agendamento.css">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <header class="hero">
       <a href="index.html" id="voltar">voltar</a>
        <h1>TK</h1>
        <nav>
            <a href="index.html" id="btn_home">Home</a>
            <a href="index.html" id="btn_servicos">Serviços</a>            
            <a href="index.html id="btn_contato">contato</a>
        </nav>       
    </header>

    <main>
        <!-- FORMULÁRIO COMEÇA AQUI -->
        
        <form action="contato.php" method="POST">
            <section class="barbeiro">
                <h2>Barbeiro</h2>
                <select name="barbeiro">
                    <option value="">Escolha um barbeiro</option>
                    <option value="Tharsys">Tharsys</option>
                    <option value="Kleiton">Kleiton</option>
                    <option value="Gustavo">Gustavo</option>
                </select>
            </section>

            <section class="agendamento">
                <h2>Agendamento</h2>
   <select name="dia">
     <option value="">Escolha o dia</option>
     <option value="segunda" disabled>SEGUNDA</option>
     <option value="terca">TERÇA</option>
     <option value="quarta">QUARTA</option>
     <option value="quinta">QUINTA</option>
     <option value="sexta">SEXTA</option>
     <option value="sabado">SÁBADO</option>
     <option value="domingo">DOMINGO</option>
     
    </select>            
       </div>

                <select name="horario">
                    <option value="">Escolha um horário</option>
                    <option value="09:00">09:00</option>
                    <option value="10:00">10:00</option>
                    <option value="11:00">11:00</option>
                </select>
            </section>

            <section class="servicos">
                <h2>Escolha um serviço</h2>
                
                
        <select name="servico">
        <option value="" disabled>CORTES</option>
        <option value="degrade">Corte Degradẽ</option>
        <option value="militar">Corte Militar</option>
        <option value="Social">Corte Degradẽ</option>
        <option value="Um Pente">Corte Degradẽ</option>
        
        <option value="" disabled>BARBA</option>
        <option value="barbaecorte">Corte + Barba</option>
        <option value="barba">Barba</option>
        
        </select>
            </section>
            
            <section id="info">
            <h2>Deixe suas Informações aqui!</h2>
            
              <label for="name">Nome:</label>
              <input type="text" name="nome" placeholder="Insira seu nome">
     
              <label for="tel">Telefone:</label> 
              <input type="text" name="telefone" placeholder="Insira seu Telefone">
              
            </section>
             <button type="submit" id="confirmar">Confirmar Agendamento</button>
        </form>
    </main>

    <script>
        // Exemplo de validação no botão antes de enviar o formulário
        document.getElementById("confirmar").addEventListener("click", (event) => {
            let horario = document.querySelector("select[name='horario']").value;
            if (horario === "") {
                alert("Por favor, selecione um horário.");
                event.preventDefault(); // Impede o envio do formulário se não selecionar um horário
            }
        });
    </script>
</body>
</html>
