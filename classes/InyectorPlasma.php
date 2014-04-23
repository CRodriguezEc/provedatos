<?php

class InyectorPlasma
{

    private $_flujoPlasma = 100;
    private $_puntoDanio;

    public function __construct()
    {
        return;
    }

    public function setPuntoDanio( $puntoDanio )
    {
        $this->_puntoDanio = ( $puntoDanio < 100 )  ? $puntoDanio 
                                                    : -1;
    }

    private function _calculoSobreFlujoPlasma()
    {
        $rst = $this->_flujoPlasma;

        if( $this->_flujoPlasma < 199 ){
            $rst = $this->_flujoPlasma - 100;
        }else{
            $rst = 0;
        }

        return $rst;
    }

    public function getTiempoFuncionamiento()
    {
        return $this->_calculoSobreFlujoPlasma();
    }

    public function calculoFlujoFuncionamiento()
    {
        $sobreFlujo = $this->_calculoSobreFlujoPlasma();

        $flujoFuncionamiento = ( $sobreFlujo != 0 ) ? $sobreFlujo - $this->_puntoDanio 
                                                    : 'Unable to cumply';

        return $flujoFuncionamiento;
    }

}