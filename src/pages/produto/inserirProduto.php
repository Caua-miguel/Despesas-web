<!doctype html>
<html lang="en">
  <head>
    <title>Cadastrar Produto</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div class="row">
            <h1>Cadastro de Produtos</h1>
        </div>

            <form action="../../actions/produto.php" method="post">

            <div class="form-group">
              <label for="nome">Nome Produto:</label>
              <input type="text" class="form-control" name="nome" id="nome" placeholder="Infome o nome do produto">
            </div>

            <div class="form-group">
              <label for="descricao">Descrição Produto:</label>
              <input type="text" class="form-control" name="descricao" id="descricao" placeholder="Informe a descrição do produto">
            </div>

            <div class="form-group">
              <label for="quantidade">Quantidade Produto:</label>
              <input type="number" class="form-control" name="quantidade" id="quantidade" placeholder="Informe a quantidade do produto">
            </div>

            <div class="form-group">
              <label for="preco">Preço Produto:</label>
              <input type="number" class="form-control" name="preco" id="preco" placeholder="0.00" step="0.01" min="0">
            </div>

            <div class="form-group">
                <button type="reset" name="limpar" class="btn btn-secondary">Limpar</button>
                <button type="submit" name="inserir" class="btn btn-primary">Cadastrar</button>
            </div>

            </form>
    

    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>