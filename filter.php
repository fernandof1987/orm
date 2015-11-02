<?php

require_once 'vendor/autoload.php';

use App\Ado\TFilter;

$filter1 = new TFilter('sexo', '=', null);
echo $filter1->dump();
echo "<br />";