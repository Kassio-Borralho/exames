<?php include 'layout/header.php' ?>

<div style="width: 500px; padding: 20px">


    <?php if (isset($_GET['sucesso'])) : ?>
        <div class="alert alert-success" role="alert">
            Sucesso ao cadastrar!
        </div>
    <?php endif; ?>

    <form action="controller/CadatroController.php" method="POST">
        <div class="form-group">
            <small class="form-text text-muted">Nome do medico que vai atender</small>
            <input type="text" class="form-control" name="nome_medico">
        </div>
        <div class="form-group">
            <small class="form-text text-muted">Nome paciente</small>
            <input type="text" class="form-control" name="nome_paciente">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="descricao" placeholder="descricao da consulta">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <hr>
    <a href="Controller/ListagemController.php">Visualizar agendamentos</a>
</div>

<?php include 'layout/footer.php' ?>