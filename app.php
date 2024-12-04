<?php

require_once __DIR__ . '/src/Colaborator.php';

echo "Digite o salário do colaborador: ";
$salary = (float) trim(fgets(STDIN));

$colaborator = new Colaborator($salary);
echo $colaborator->makeAdjustment();
?>
