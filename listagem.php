

<?php
include 'layout/header.php';
include 'database/db.php';

// Jogar para o controlador
$dado = $conexao->prepare("SELECT * FROM exames");
$dado->execute();

$exames_cadastrados = $dado->fetchAll(PDO::FETCH_ASSOC);

?>




<div style="width: 500px; padding: 20px">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NM_MEDICO</th>
                <th scope="col">PACIENTE</th>
                <th scope="col">DESCRICAO</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($exames_cadastrados as $exame) : ?>
                <tr>
                    <td><?= $exame['id']; ?></td>
                    <td><?= $exame['nome_medico']; ?></td>
                    <td><?= $exame['nome_paciente']; ?></td>
                    <td><?= $exame['descricao']; ?></td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>

    <hr>
    <a href="index.php"><- voltar</a>
</div>

<?php include 'layout/footer.php' ?>