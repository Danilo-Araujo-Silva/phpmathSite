<?php
require_once 'config/includder.php';
require_once VENDOR.'autoload.php';

use Backend\Model\Mathematica\Mathematica;

$mathematica = new Mathematica;
$mathematica->configure();