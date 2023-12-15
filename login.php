<?php include 'layout/header.php' ?>



<div style="width: 500px; padding: 20px">
<h1>LOGIN</h1>
<?php if (isset($_GET['erro'])) : ?>
        <div class="alert alert-danger" role="alert">
            Email ou Senha nao encontrado!
        </div>
    <?php endif; ?>
<form action="controller/auth/AuthController.php" method="POST">
        <div class="form-group">
            <small class="form-text text-muted">Email</small>
            <input type="text" class="form-control" name="email">
        </div>
        <div class="form-group">
            <small class="form-text text-muted">Senha</small>
            <input type="password" class="form-control" name="senha">
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</div>



<?php include 'layout/footer.php' ?>