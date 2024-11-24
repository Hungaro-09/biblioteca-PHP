<?php

// Verifica se o POST existe antes de inserir uma nova pessoa
if(isset($_POST["acao"])){

    if ($_POST["acao"]=="inserir"){
        inserirPessoa();
    }

    if ($_POST["acao"]=="inserir_membro"){
        inserirMembro();
    }

    if ($_POST["acao"]=="alterar"){
        alterarPessoa();
    }

    if ($_POST["acao"]=="alterar_membro"){
        alterarMembro();
    }

    if($_POST["acao"]=="excluir"){
        excluirPessoa();
    }

    if($_POST["acao"]=="excluir_membro"){
        excluirMembro();
    }
    

}

// Responsável por criar uma conexão com meu banco
function abrirBanco() {
    $conexao = new mysqli("localhost", "root", "", "biblioteca");
    return $conexao;
}

// Função responsável inserir nome, ISBN, quantidade de exemplares e autor do livro
    function inserirPessoa() {
        $banco = abrirBanco();
        $sql = "INSERT INTO livro(nome_livro, ISBN, quantidade,autor) 
        VALUES ('{$_POST["nome_livro"]}','{$_POST["ISBN"]}','{$_POST["quantidade"]}','{$_POST["autor"]}')";
        $banco->query($sql);
        $banco->close();
        voltarIndex();
    }

// Função para inserir membro da biblioteca    
    function inserirMembro(){
        $banco = abrirBanco();
        $sql = "INSERT INTO membros(nome,telefone) 
        VALUES ('{$_POST["nome"]}','{$_POST["telefone"]}')";
        $banco->query($sql);
        $banco->close();
        voltarIndex();

    }

// Função responsável editar um livro no banco de dados
function alterarPessoa() {
    $banco = abrirBanco();
    $sql = "UPDATE livro SET nome_livro='{$_POST["nome_livro"]}',ISBN='{$_POST["ISBN"]}',quantidade='{$_POST["quantidade"]}',autor='{$_POST["autor"]}' WHERE id_livro='{$_POST["id_livro"]}'";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function alterarMembro() {
    $banco = abrirBanco();
    $sql = "UPDATE membros SET nome='{$_POST["nome"]}',telefone='{$_POST["telefone"]}' WHERE id_membro='{$_POST["id_membro"]}'";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}
// Função responsável por excluir um livro no banco de dados
    function excluirPessoa() {
        $banco = abrirBanco();
        $sql = "DELETE FROM livro WHERE id_livro='{$_POST["id_livro"]}'";
        $banco->query($sql);
        $banco->close();
        voltarIndex();
    }

    function excluirMembro(){
        $banco = abrirBanco();
        $sql = "DELETE FROM membros WHERE id_membro='{$_POST["id_membro"]}'";
        $banco->query($sql);
        $banco->close();
        voltarIndex();
    }

// função responsavel por mostrar os livros 
    function selectAllPessoa() {
        $banco = abrirBanco();
        $sql = "SELECT * FROM livro ORDER BY nome_livro";
        $resultado = $banco->query($sql);
        $banco->close();
        // Laço que pega as informações do meu banco, organiza linha a linha e armazena na var $grupo
        while($row = mysqli_fetch_array($resultado)) {
            $grupo[] = $row;
        }
        return $grupo;
    }

// função responsavel por mostrar os livros 
    function selectAllMembro(){
        $banco = abrirBanco();
        $sql = "SELECT * FROM membros ORDER BY nome";
        $resultado = $banco->query($sql);
        $banco->close();
        // Laço que pega as informações do meu banco, organiza linha a linha e armazena na var $grupo
        while($row = mysqli_fetch_array($resultado)) {
            $grupo2[] = $row;
        }
        return $grupo2;
    }

//função que pega os livros pelo ID
    function selectIdPessoa($id_livro) {
        $banco = abrirBanco();
        $sql = "SELECT * FROM livro WHERE id_livro=".$id_livro;
        $resultado = $banco->query($sql);
        $banco->close();
        // Laço que pega as informações do meu banco, organiza linha a linha e armazena na var $grupo
        $livro = mysqli_fetch_assoc($resultado);
        return $livro;
    }

    function selectIdMembro($id_membro) {
        $banco = abrirBanco();
        $sql = "SELECT * FROM membros WHERE id_membro=".$id_membro;
        $resultado = $banco->query($sql);
        $banco->close();
        // Laço que pega as informações do meu banco, organiza linha a linha e armazena na var $grupo
        $membros = mysqli_fetch_assoc($resultado);
        return $livro;
    }

    function voltarIndex(){
        header("Location:index.php");
    }

?>