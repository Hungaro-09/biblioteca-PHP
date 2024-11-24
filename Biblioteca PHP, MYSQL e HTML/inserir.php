<?php

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="style.css">
<meta charset="UTF-8">
<div class="container">
    <form name="dadosPessoa" action="conexao.php" method="post">
        <table>
            <tbody>
                <tr>
                    <td >Nome Livro: </td>
                    <td><input type="text" name="nome_livro" value=""></td>
                </tr>
                <tr>
                    <td>ISBN: </td>
                    <td><input type="text" name="ISBN" value=""></td>
                </tr>
                <tr>
                    <td>Quantidade: </td>
                    <td><input type="text" name="quantidade" value=""></td>
                </tr>
                <tr>
                    <td>Autor: </td>
                    <td><input type="text" name="autor" value=""></td>
                </tr>
                </tr>
                    <td><input type="hidden" name="acao" value="inserir"></td>
                    <td><input type="submit" name="Enviar" value="Enviar"></td>
                </tr>
            </tbody>
        </table> 
    </form>
</div>