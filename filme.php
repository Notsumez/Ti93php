<?php 
include 'conecta.php';
$consultaFilmSql = 'SELECT * FROM filme ORDER BY lancamento DESC';
$lista = $conn->query($consultaFilmSql);
$row = $lista->fetch();
print_r($row);
$num_rows =$lista->rowCount();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filme (<?php echo $num_rows?>)</title>
    <style>
        td{
            border-bottom: 1px solid green;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <th>Cod filme</th>
            <th>Titulo</th>
            <th>Sinopse</th>
            <th>Lancamento</th>
            <th>Pais de origem</th>
            <th>Duração</th>
            <th>Preço</th>
        </thead>
        <tbody>
            <?php do {?>
                <tr>
                    <td><?php echo $row['cod_filme'];?></td>
                    <td><?php echo $row['titulo'];?></td>
                    <td><?php echo $row['sinopse'];?></td>
                    <td><?php echo $row['lancamento'];?></td>
                    <td><?php echo $row['pais_origem'];?></td>
                    <td><?php echo $row['duracao'];?></td>
                    <td><?php echo $row['preco'];?></td>
                </tr>
            <?php } while ($row = $lista->fetch())?>
        </tbody>
    </table>
    
</body>
</html>