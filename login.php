<?php include 'layout/header.php' ?>



<div style="width: 500px; padding: 20px">
<h1>LOGIN</h1>
<form action="controller/CadatroController.php" method="POST">
        <div class="form-group">
            <small class="form-text text-muted">Email</small>
            <input type="text" class="form-control" name="email">
        </div>
        <div class="form-group">
            <small class="form-text text-muted">Senha</small>
            <input type="text" class="form-control" name="email">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="descricao" placeholder="descricao da consulta">
        </div>

        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</div>



<?php include 'layout/footer.php' ?>