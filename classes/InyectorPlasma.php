<?php

class InyectorPlasma
{

    private $_puntoDanio;

    public function __construct( $puntoDanio = 0 )
    {
        $this->_puntoDanio = $puntoDanio;
    }

    public function calculoFlujoPermitido()
    {
        return 100 - $this->_puntoDanio;
    }

    public function calculoFlujoFuncionamiento( $incremento )
    {
        return $this->calculoFlujoPermitido() + $incremento;
    }

}