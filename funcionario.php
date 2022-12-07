<?php 
include 'conecta.php';
$consultaFuncSql = 'SELECT * FROM funcionario WHERE demissao is null ORDER BY admissao asc';
$lista = $conn->query($consultaFuncSql);
$row = $lista->fetch();
$num_rows =$lista->rowCount();

if(isset($_POST['bt-enviar']))
{
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $cargo = $_POST['cargo'];
    $escala = $_POST['escala'];
    $turno = $_POST['turno'];
    $admissao = $_POST['admissao'];
    $salario = $_POST['salario'];
    $vt = $_POST['vt'];
    $vr = $_POST['vr'];
    $va = $_POST['va'];
    $insertFuncSql = "insert funcionario (nome, cpf, cargo, escala, turno, admissao, salario, vt, vr, va) 
        values ('$nome','$cpf','$cargo','$escala','$turno','$admissao','$salario','$vt','$vr','$va')";
    $resultado = $conn->query($insertFuncSqlt);
    header('location: funcionario.php');
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionario (<?php echo $num_rows?>)</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <table class="tabelaFunc">
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
        <form action="#" method="post">
        <div hidden>
            <label for="cod">Código
                <input type="text" name="cod" id="">
            </label>
        </div>
        <div>
            <label for="nome">Nome
                <input type="text" name="nome" id="">
            </label>
        </div>
        <div>
            <label for="cpf">CPF
                <input type="number" name="cpf" id="">
            </label>
        </div>
        <div>
            <label for="cargo">Cargo
                <select name="cargo" id="">
                    <option value="gerente">Gerente</option>
                    <option value="rh">RH</option>
                    <option value="adm">ADM</option>
                    <option value="ti">TI</option>
                </select>
            </label>
        </div>
        <div>
            <label for="escala">Escala
                <input type="datetime" name="escala" id="">
            </label>
        </div>
        <div>
            <label for="turno">Turno
                <select name="turno" id="">
                    <option value="manha">Matutino</option>
                    <option value="tarde">Tarde</option>
                    <option value="noite">Noturno</option>
                </select>
            </label>
        </div>
        <div>
            <label for="admissao">Admissão
                <input type="date" name="admissao" id="">
            </label>
        </div>
        <div>
            <label for="salario">Salário
                <input type="number" name="salario" id="">
            </label>
        </div>
        <div>
            <label for="vt">Vale Transporte
                <input type="number" name="vt" id="">
            </label>
        </div>
        <div>
            <label for="vr">Vale Refeição
                <input type="number" name="vr" id="">
            </label>
        </div>
        <div>
            <label for="va">Vale Alimentação
                <input type="number" name="va" id="">
            </label>
        </div>
        <div>
            <button type="reset" name="bt-enviar">Enviar</button>
        </div>
    </form>
</html>