<?php
require __DIR__."/../model/conection.php";
//Recebe os dados do formulário e cadastra no banco de dados

    //verifica se os dados estão sendo recebidos via post
    function recebeDadosFormulario()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tipo = $_POST['tipo'];
            $nome = $_POST['nome'];
            $qtd = $_POST['quantidade'];
            $estado = $_POST['estado'];

            $dados = [
                "tipo" => $tipo,
                "nome" => $nome,
                "qtd" => $qtd,
                "estado" => $estado
            ];
        }
    }
recebeDadosFormulario();
