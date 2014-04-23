<?php

require_once './classes/InyectorPlasma.php';

$inyector1 = new InyectorPlasma();
$inyector2 = new InyectorPlasma();
$inyector3 = new InyectorPlasma();

$inyector1->setPuntoDanio( 0 );
$inyector2->setPuntoDanio( 0 );
$inyector3->setPuntoDanio( 0 );

echo 'inyector 1: '. $inyector1->calculoFlujoFuncionamiento() .'<hr>';
echo 'inyector 2: '. $inyector2->calculoFlujoFuncionamiento() .'<hr>';
echo 'inyector 3: '. $inyector3->calculoFlujoFuncionamiento() .'<hr>';