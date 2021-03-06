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
      <h2>Contato</h2>
    </header>
    <hr />

    <section class="email-whats">
      <div class="email-whats_blocos">
        <img src="imagens/carta.png" alt="e-mail" width="40px" />
        contato@fullstackeletro.com.br
      </div>

      <div class="email-whats_blocos" style="float: right">
        <img src="imagens/whatsapp.png" alt="whatsapp" width="40px" />
        (11) 97815-3254
      </div>
    </section>

    <!-- Formulário -->

    <div class="formulario">
      <form>
        <h4>Nome:</h4>
        <input type="text" style="width: 400px" />
        <h4>Mensagem:</h4>
        <textarea style="width: 400px"></textarea>
        <input type="submit" value="Enviar" id="enviar" />
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
