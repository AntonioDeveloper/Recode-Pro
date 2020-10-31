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
      <h2>Consulte o que precisar</h2>
    </header>
    <hr />

    <!-- Consultar pedidos -->   
 
  <button type="button" onClick="showOrders()">Ver Pedidos</button> 

  <div id="janela_pedidos" style="display: none;">
  <br>
    <?php
        $content = include 'todos_pedidos.php';
       echo "<script>
          showOrders = () => {
            document.getElementById('janela_pedidos').style.display = 'block'
          }
        </script>";
    ?>
  </div>  

    <!-- Consultar produtos cadastrados -->   
 
  <button type="button" onClick="showProducts()">Ver Produtos</button> 

  <div id="janela_produtos" style="display: none;">
  <br>
    <?php
        $content = include 'todos_produtos.php';
       echo "<script>
          showProducts = () => {
            document.getElementById('janela_produtos').style.display = 'block'
          }
        </script>";
    ?>
  </div>   

    
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

    <footer class="rodape">
      <h4>Formas de Pagamento</h4>
      <img src="./imagens/f-pagamento.jpg" alt="formas de pagamento" />
      <p>&copy 2020 Recode Pro.</p>
    </footer>    
  </body>
</html>
