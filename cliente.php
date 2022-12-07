<?php 
include 'conecta.php';
//criando a consulta SQL
$consultaCliSql = "SELECT * FROM cliente WHERE deleted is null ORDER BY nome ASC, cod_cliente ASC";
$consultaCliSqlArq = "SELECT * FROM cliente WHERE deleted is not null ORDER BY nome asc, cod_cliente asc";

//buscando e listando os dados da tabela (completa)
$lista = $conn->query($consultaCliSql);
$listaArq = $conn->query($consultaCliSqlArq);

//separar em linhas
$row = $lista->fetch();
$rowArq = $conn->query($consultaCliSqlArq);
    
//retornando o númaru de linhas
$num_rows = $lista->rowCount();
$num_rows_arq = $listaArq->rowCount();

// buscar cliente por id
$nome = "";
$cpf = "";
$cod = 0;

if(isset($_POST['codedit']))
{
    $cliente = $conn->query(
        "select * from cliente where cod_cliente = ".$_GET['codedit'])->fetch();
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $cod = $_GET['codedit'];
}

// Arquivando registro de cliente
if(isset($_GET['codearq']))
{
    $cliente - $conn->query(
        "update cliente set deleted = now() where cod_cliente = ".$_GET['codearq'])->fetch();
        header('location: cliente.php');
}

// restaurando registro de clientes
if(isset($_GET['codrest']))
{
    $cliente = $conn->query(
        'update cliente set deleted = null where cod_cliente ='.$_GET['codrest'])->fetch();
    header('location: cliente.php');
}
// excluindo definitivamente registro de clientes
if(isset($_GET['coddel']))
{
    $cliente = $conn->query(
        'delete from cliente where cod_cliente ='.$_GET['coddel'])->fetch();
    header('location: cliente.php');
}
// atualiza o registro de cliente
if(isset($_POST['alterar']))
{
    $cod = $_POST['cod'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $resultado = $conn->query("update cliente set nome = '$nome', cpf = '$cpf' where cod_cliente = $cod");
    header('location: cliente.php');
}

// insere cliente na tabela
if(isset($_POST['inserir']))
{
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $insertSql = "insert cliente (nome, cpf) values('$nome','$cpf');";
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
    <!-- Link para o bootstrap local -->
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <!-- link para o meu estilo -->
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <h4>Clientes Cadastrados</h4>
    <div class="container bg-black">
        <table class="table">
            <?php if ($num_rows>0) {?>
                <thead class="bg-dark text-warning">
                <th>Cod</th>
                <th>Nome</th>
                <th>CPF</th>
                <th colspan="2">Ações</th>
            </thead>
            <tbody>
                <?php do {?>
                    <tr class="text-white">
                        <td><?php echo $row['cod_cliente'];?></td>
                        <td><?php echo $row['nome'];?></td>
                        <td><?php echo $row['cpf'];?></td>
                        <td><a href="cliente.php?codedit=<?php echo $row['cod_cliente'];?>">
                            <span class="material-icons">edit</span></a></td>
                        <td><a href="cliente.php?codarq=<?php echo $row['cod_cliente'];?>">
                            <span class="material-icons">drive_file_move_outline</span></a></td>
                    </tr>
                <?php } while ($row = $lista->fetch());
        }else{
            echo '<td colspan=5>Não há clientes Cadastrados ativos</td>';
        }
            ?>
        </tbody>
    </table>
    </div>
    <h4>Clientes Arquivados</h4>
    <table class="tabelinha">
        <?php if ($num_rows_arq>0) {?>
            <thead>
                <th>Código</th>
                <th>Nome</th>
                <th>CPF</th>
                <th colspan="2">Ações</th>
            </thead>
            <tbody>
                <?php do {?>
                    <tr>
                        <td><?php echo $rowArq['cod_cliente'];?></td>
                        <td><?php echo $rowArq['nome'];?></td>
                        <td><?php echo $rowArq['cpf'];?></td>
                        <td><a href="cliente.php?coderest="><?php echo $rowArq['cod_cliente'];?></a></td>
                        <td><a href="cliente.php?codedel="><?php echo $rowArq['cod_cliente'];?>></a></td>
                    </tr>
                <?php } while ($rowArq = $listaArq->fetch());
                }else { echo '<td colspan="5">Não Há Clientes Arquivados';}?>
            </tbody>
    </table>
</body>
    <script src="JS/bootstrap.min.js"></script>
</html>