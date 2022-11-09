<?php 
include 'config.php';
$dataAtual = new DateTime();

print_r($dataAtual);
echo '<br>';
echo $dataAtual->format('d/m/Y');
echo '<br>';
for ($i=1; $i < 3; $i++) {
    echo $i.'ª parcela - '.(new DateTime('+'.$i.' mounth'))->format('d/m/Y');
    //$dias += 30; // dias = dias + 30;
    echo 'br';
}
echo '<br>';
$dataSistema = new DateTime();
$dataNasc = new DateTime('2005/9/23');
print_r($dataNasc);
echo '<br>';
$intervalo = $dataNasc->diff($dataSistema);
print_r($intervalo);
echo '<br>';
echo $intervalo->format('%y anos, %m meses e %d dias');

?>