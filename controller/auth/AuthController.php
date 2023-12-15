    <?php
        session_start();
    include '../../database/db.php';


    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $transacao = $conexao->prepare("SELECT * FROM `usuarios` WHERE email = :email and senha = :senha");
    $transacao->bindValue(':email',$email);
    $transacao->bindValue(':senha',$senha);
    $transacao->execute();


    $transacao->fetchAll();

    if($transacao->rowCount()>0){
        $_SESSION['autenticado'] = true;
        header("Location: ../../index.php");

    }else{
        $_SESSION['autenticado'] = false;
        header("Location: ../../login.php?erro");
    }
    

