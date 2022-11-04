<?php 
// declarando variáveis
$anon = 1989;
$anoa = 2022;
$idade = $anoa - $anon;
$idade = "Dezenove";
echo ("<h1> A idade do pião é: ".$idade." </h1>");
$times = array();
$times[0] = "Palmeiras";
$times[1] = "Internacional";
$times[2] = "Flamengo";

echo ("<br>");
print_r($times);
echo ("<br>");
foreach ($times as $time) {
    echo($time."<br>");
}

?>
<table>
    <th>Id</th>
    <th>Nome</th>
    <?php foreach ($times as $Id => $nome) { ?>
        <tr>
            <td> <?php  echo($Id + 1); ?></td>
            <td> <?php  echo($nome); ?></td>
        </tr>
    <?php }  ?>
</table>