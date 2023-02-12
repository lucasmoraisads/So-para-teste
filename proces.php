<?php

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$date = $_POST['date'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];




if (isset($_POST)){
    echo $nome;
}
elseif($_POST == null){
    echo "Preencha o Formulario!";
}
