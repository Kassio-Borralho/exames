<?php
include '../database/db.php';

// fazer validacao de metodo se e post ou outros
// Pegar o dado e salvar na base de dados  - feito

// dados recebidos

$nome_medico = $_POST['nome_medico'];
$nome_paciente = $_POST['nome_paciente'];
$descricao = $_POST['descricao'];

$transacao = $conexao->prepare("INSERT INTO exames (nome_medico, nome_paciente, descricao) VALUES (?,?,?)");
$transacao->execute([$nome_medico, $nome_paciente, $descricao]);

header("Location: ../index.php?sucesso");
