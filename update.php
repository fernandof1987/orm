<?php

require_once 'vendor/autoload.php';


use App\Ado\TCriteria;
use App\Ado\TSqlUpdate;
use App\Ado\TFilter;

$criteria = new TCriteria();
$criteria->add(new TFilter('id', '=', '4'));

$sql = new TSqlUpdate();
$sql->setEntity('aluno');
$sql->setRowData('nome', 'Fernandos111');
$sql->setRowData('apelido', 'Ssjkshkds');
$sql->setCriteria($criteria);
echo $sql->getInstruction();
echo "<hr />";