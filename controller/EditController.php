<?php include '../layout/header.php' ?>

<?php

include '../database/db.php';

 $user=[];

 $id = filter_input(INPUT_GET, 'id');

    if($id){

        $conexao = $conexao-> prepare("SELECT * FROM exames WHERE id = :id");
        $conexao-> bindValue(':id', $id);
        $conexao -> execute();
        if($conexao->rowCount()> 0 ){
            $user =  $conexao-> fetch(PDO:: FETCH_ASSOC);
        } else{

            header("Location: ListagemController.php");
            exit;
        }
    } else {
        header("Location: ListagemController.php");
    }

    ?>

    <h1>Editar Usuario</h1>
    <form action="AtualizarController.php" method="POST">
    <input type = "hidden" name="id" value="<?=$user['id'];?>">
    <div class="form-group">
            <small class="form-text text-muted">Nome do medico que vai atender</small>
            <input type="text" class="form-control" name="nome_medico" value="<?=$user['nome_medico'];?>">
        </div>
        <div class="form-group">
            <small class="form-text text-muted">Nome paciente</small>
            <input type="text" class="form-control" name="nome_paciente" value="<?=$user['nome_paciente'];?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="descricao" placeholder="descricao da consulta" value="<?=$user['descricao'];?>" >
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
    </form>



    <?php include '../layout/footer.php' ?>