<?php 
include 'conecta.php';
//criando a consulta SQL
$consultaCliSql = "SELECT * FROM cliente";

//buscando e listando os dados da tabela (conpleta)
$lista = $conn->query($consultaCliSql);

//separar em linhas
$row = $lista->fetch();
print_r($row);

//retornando o númaru de linhas
$num_rows = $lista->rowCount();

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes (<?php echo $num_rows?>)</title>
    <style>
        td{
            border-bottom: 1px solid red;
        }
    </style>
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
</body>
</html>