<?php
include '../database/db.php';


$id = filter_input(INPUT_GET, 'id');
     
    if($id){

        $conexao = $conexao-> prepare("DELETE FROM exames WHERE id = :id");
        $conexao->bindValue(':id', $id);
        $conexao-> execute();




    }

    header("Location: ListagemController.php");