<?php

require_once 'vendor/autoload.php';

use App\Ado\TFilter;
use App\Ado\TCriteria;
use App\Ado\TExpression;
use App\Ado\TSqlInsert;

$sql = new TSqlInsert();
$sql->setEntity('aluno');
$sql->setRowData('id', 3);
$sql->setRowData('nome', 'Fernando');
$sql->setRowData('nome1', 'Fernando');
$sql->setRowData('nome2', 'Fernando2');
echo $sql->getInstruction();
echo "<hr />";