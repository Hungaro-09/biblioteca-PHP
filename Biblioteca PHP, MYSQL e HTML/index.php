<!DOCTYPE html>
<?php include("conexao.php");
    $grupo = selectAllPessoa();  
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CRUD com PHP e MYSQL - INSERT</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="style.css">
</head>
<div class="container">
    <body>
     <div class="posicionarCabecalho">
        <img src="images.jfif" alt="teste">
        <h1>Biblioteca - Livros</h1>
    </div>
      <table border="1" class="table">
          <thead class="thead-light">
              <tr>
                  <th>Nome Livro</th>
                  <th>ISBN</th>
                  <th>Quantidade</th>
                  <th>autor</th>
              </tr>
          </thead>
          <tbody>
             <?php 
                foreach($grupo as $livro) { ?>
                <tr>
                    <th><?=$livro["nome_livro"]?></th>
                    <th><?=$livro["ISBN"]?></th>
                    <th><?=$livro["quantidade"]?></th>
                    <th><?=$livro["autor"]?></th>
                    <th>
                        <form name="alterar" action="alterar.php" method="post">
                            <input type="hidden" name="id_livro" value="<?=$livro["id_livro"]?>">
                            <input type="submit" name="editar" value="Editar">
                        </form>
                    </th>
                    <th>
                        <form name="excluir" action="conexao.php" method="post">
                            <input type="hidden" name="id_livro" value="<?=$livro["id_livro"]?>">
                            <input type="hidden" name="acao" value="excluir">
                            <input type="submit" name="excluit" value="Excluir">
                        </form>
                    </th>
                </tr> 
                <?php }
              ?>
          </tbody>
     </table>
      <div class="text-center">
           <button type="button" class="btn btn-primary"><a href="inserir.php">Adicionar Livro</a></button>
           <button type="button" class="btn btn-primary"><a href="inserir_membro.php">Adicionar membro</a></button>
           <button type="button" class="btn btn-primary"><a href="index2.php">Ver Membros</a></button>
      </div>
       <?php
        ?>
    </body>
</div>
</html>