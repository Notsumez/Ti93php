<?php
// dados vindos do formulário de index.php

// "%2C" na url é virgula.
if(isset($_POST['enviar'])){
    $nome = $_POST['txt-nome'];
    $email = $_POST['txt-email'];
    $data_nasc = $_POST['txt-data-nasc'];
    $dataT = new DateTime($data_nasc);
    $data_nasc = date_format($dataT, 'd-M-Y');

    $aluno = array('nome'=>$nome,'email'=>$email, 'datan'=>$data_nasc);
    // chamada para gravar dados na tabela do banco

    

    header('location: index.php');
}
?>
<a href="index.php">Voltar</a>
<script>window.alert('Foi tudo bem!')</script>