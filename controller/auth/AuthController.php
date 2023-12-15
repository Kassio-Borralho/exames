    <?php
    include '../../database/db.php';


    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $transacao = $conexao->prepare("SELECT * FROM `usuarios` WHERE email = :email and senha = :senha");
    $transacao->bindValue(':email',$email);
    $transacao->bindValue(':senha',$senha);
    $transacao->execute();


    $transacao->fetchAll();

    if($transacao->rowCount()>0){

        header("location: ../../index.php");

    }else{

        header("location: ../../login.php?erro");
    }
    

