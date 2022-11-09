<?php 
// comentários de linha
# comentário de linha
/* comentário de bloco */

// declaração de variáveis e matrizes - manipulação de data/hr - manipulação de string

$nome = "Andrey";
$dataNasc = date('2005/09/23');
echo($nome.' - '. $dataNasc);
echo('<br>');
$hoje = date('d/m/Y H:i:s');
echo($hoje. '<br>');

        // definindo timezone
        date_default_timezone_set('America/Sao_Paulo');

$data = new DateTime();
echo('<br>');
//print_r($data);
$hoje = date('d/m/Y H:i:s');
echo('<br>');
$hoje = date('d-M-y H:i:s');
echo('<br>');
$hoje = date('D, d M Y H:i:s');
echo('<br>');
$hoje = date('M H:i');
echo('<br>');
$hoje = date('D-d H:i');
$teste = true;
$idade = 35;
$valor = 458.65;


// estrutura de controle de decisão

// estrutura de repetição

?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <!-- comando abaixo é para definir que o site ficar atualizando a página a todo momento -->
    <!-- <meta http-equiv="refresh" content="1"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu PHP</title>
</head>
<body>
    <!-- criar um botão de formulário  -->
    <!-- (get) atualiza a pagina quando receber a resposta e (post) recebe e não atualiza -->
    <form action="opform.php" method="post" name="frm-aluno">
        <label for="text=nome">
            Nome:
            <input type="text" name="txt-nome" placeholder="digite o nome..." reuquired>
        </label> <br>
        <label for="">
            Email:
            <input type="email" name="txt-email" placeholder="digite o email..." required> <!-- "required" serve para colocar o campo como obrigatório -->
        </label> <br>
        <label for="">
            Data Nascimento:
            <input type="date" name="txt-data-nasc" required>
        </label> <br>
            <button type="submit" name=enviar>Enviar</button>
    </form>
</body>
</html>