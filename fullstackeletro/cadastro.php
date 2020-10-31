<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contato - Full Stack Eletro</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />  
    
  </head>

  <body>
    <!-- Início do menu -->
    <nav class="menu">
      <a href="index.php">
        <img src="./imagens/logo.jpg" alt="logo da loja" width="100px" />
      </a>

      <a href="produtos.php"> Produtos </a>

      <a href="lojas.php"> Nossas Lojas </a>

      <a href="contato.php"> Contato </a>

      <a href="cadastro.php"> Cadastre-se </a>
    </nav>
    <!-- Fim do menu -->

    <header>
      <h2>Cadastre-se</h2>
    </header>
    <hr />

    <!-- Formulário -->

    <div class="formulario">
      <form id='frm1' action="cadastro_clientes.php" method="post">
        <label for='name'>Nome:</label>
        <input type="text" style="width: 400px" id='name' name='name'/> <br><br>
        <label for='end'>Endereço:</label>
        <input type="text" style="width: 400px" id='end' name='end'/> <br><br>
        <label for='phone'>Telefone:</label>
        <input id='phone' type='number' name='phone'> <br><br>
      <!--  <label for='email'>Email:</label>
        <input id='email' type='text' name='email'><br><br>
        -->
        <label for='id_prod'>id Prod:</label>
        <input id='id_prod' type='number' name='id_prod'><br><br>
        <label for='nome_prod'>Nome Prod:</label>
        <input nome='nome_prod' type='text' name='nome_prod'><br><br>
        <label for='val_unit'>Valor Unitário:</label>
        <input nome='val_unit' type='number' name='val_unit'><br><br>
        <label for='quantidade'>Quantidade:</label>
        <input nome='quantidade' type='number' name='quantidade'><br><br>
        
        <br><br>
        <input type="submit" value="Enviar" id="enviar" /><br><br>        
      </form>
    </div>

    <!-- Formulário -->
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

    <footer class="rodape">
      <h4>Formas de Pagamento</h4>
      <img src="./imagens/f-pagamento.jpg" alt="formas de pagamento" />
      <p>&copy 2020 Recode Pro.</p>
    </footer>    
  </body>
</html>
