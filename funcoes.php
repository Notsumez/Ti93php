<?php
function geraCoeficiente(float $taxa, int $periodo): float 
{
    return pow( (1+($taxa/100)),$periodo )/ $periodo;
}

function validaMatricula(DateTime $data)
{
    $diff = $data->diff(new DateTime());
    print_r($diff);
    $anos = $diff->format('%y');
    if ($anos < 6) {
        return 'O(a) garoto(a) não pode ser matriculado(a)';
    } else{
        return 'Pode matricula-lo!';
    }
}

validaMatricula((new DateTime('2020-6-23')));
?>