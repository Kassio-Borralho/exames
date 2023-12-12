<?php

include '../database/db.php';

    $id = filter_input(INPUT_POST, 'id');
    $nome_medico = filter_input(INPUT_POST, 'nome_medico');
    $nome_paciente = filter_input(INPUT_POST, 'nome_paciente');
    $descricao = filter_input(INPUT_POST, 'descricao');

    if($id && $nome_medico && $nome_paciente && $descricao){
         
        $conexao = $conexao->prepare("UPDATE exames SET nome_medico = :nome_medico, nome_paciente = :nome_paciente, descricao = :descricao WHERE id = :id");
        $conexao-> bindValue(':nome_medico', $nome_medico);
        $conexao-> bindValue(':nome_paciente', $nome_paciente);
        $conexao-> bindValue(':descricao', $descricao);
        $conexao-> bindValue(':id', $id);

            $conexao-> execute();

            header("Location: ListagemController.php");
            exit;

    } else{
        header("Location: ListagemController.php");
    }