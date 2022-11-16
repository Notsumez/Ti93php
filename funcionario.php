<?php 
include 'conecta.php';
$consultaFuncSql = 'SELECT * FROM funcionario WHERE demissao is null ORDER BY admissao asc';
$lista = $conn->query($consultaFuncSql);
$row = $lista->fetch();
print_r($row);
$num_rows =$lista->rowCount();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionario (<?php echo $num_rows?>)</title>
    <style>
        td{
            border-bottom: 1px solid blue;
            width: auto;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <th>Cod Funcionário</th>
            <th>Nome</th>
            <th>Cpf</th>
            <th>Cargo</th>
            <th>Escala</th>
            <th>Turno</th>
            <th>Admissão</th>
            <th>Salario</th>
            <th>Vale Transporte</th>
            <th>Vale Refeição</th>
            <th>Vale Alimentação</th>
        </thead>
        <tbody>
            <?php do {?>
                <tr>
                    <td><?php echo $row['cod_func'];?></td>
                    <td><?php echo $row['nome'];?></td>
                    <td><?php echo $row['cpf'];?></td>
                    <td><?php echo $row['cargo'];?></td>
                    <td><?php echo $row['escala'];?></td>
                    <td><?php echo $row['turno'];?></td>
                    <td><?php echo $row['admissao'];?></td>
                    <td><?php echo $row['vt'];?></td>
                    <td><?php echo $row['vr'];?></td>
                    <td><?php echo $row['va'];?></td>
                </tr>
            <?php } while ($row = $lista->fetch());?>
        </tbody>
    </table>
    
</body>
</html>