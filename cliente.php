<?php 
include 'conecta.php';
//criando a consulta SQL
$consultaCliSql = "SELECT * FROM cliente ORDER BY nome ASC, cod_cliente ASC";

//buscando e listando os dados da tabela (conpleta)
$lista = $conn->query($consultaCliSql);

//separar em linhas
$row = $lista->fetch();
print_r($row);
    
//retornando o númaru de linhas
$num_rows = $lista->rowCount();

if(isset($_POST['bt-enviar']))
{
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $insertSql = "insert cliente (nome, cpf) values('$nome','$cpf')";
    $resultado = $conn->query($insertSql);
    header('location: cliente.php');
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes (<?php echo $num_rows?>)</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <table>
        <thead>
            <th>Cod</th>
            <th>Nome</th>
            <th>CPF</th>
        </thead>
        <tbody>
            <?php do {?>
                <tr>
                    <td><?php echo $row['cod_cliente'];?></td>
                    <td><?php echo $row['nome'];?></td>
                    <td><?php echo $row['cpf'];?></td>
                </tr>
            <?php } while ($row = $lista->fetch())?>
        </tbody>
    </table>
        <form action="#" method="post">
            <div hidden>
                <label for="cod">Código
                    <input type="text" name="cod" id=""></label>
            </div>
            <div class="campo">
                <label for="nome">Nome
                    <input type="text" name="nome" id=""></label>
            </div>
            <div class="campo">
                <label for="cpf">CPF
                    <input type="number" name="cpf" id=""></label>
            </div>
            <div class="campo">
                <button type="reset" name="bt-enviar">Enviar</button>
            </div>
        </form>
</body>
</html>