<?php

require_once 'vendor/autoload.php';

use App\Ado\TFilter;
use App\Ado\TCriteria;
use App\Ado\TExpression;

$criteria = new TCriteria();
$criteria->add(new TFilter('idade', '<', '16'), TExpression::OR_OPERATOR);
$criteria->add(new TFilter('idade', 'NOT IN', '60'), TExpression::OR_OPERATOR);
$criteria->add(new TFilter('idade', 'NOT IN', '60'), TExpression::OR_OPERATOR);
echo $criteria->dump();
echo "<hr />";

$criteria = new TCriteria();
$criteria->add(new TFilter('idade', 'IN', [24, 25, 26]));
$criteria->add(new TFilter('idade', 'NOT IN', [10]));
echo $criteria->dump();
echo "<hr />";