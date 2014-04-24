<?php

class InyectorPlasma
{

    private $_flujoPlasma;
    private $_puntoDanio;
    private $_sobreFlujoPlasma;

    public function __construct( $flujoPlasma, $puntoDanio )
    {
        $this->_flujoPlasma = $flujoPlasma;
        $this->_puntoDanio  = $puntoDanio;
    }

    public function setFlujoPlasma( $flujoPlasma )
    {
        $this->_flujoPlasma = $flujoPlasma;
    }

    public function setPuntoDanio( $puntoDanio )
    {
        $this->_puntoDanio = ( $puntoDanio < 100 )  ? $puntoDanio 
                                                    : -1;
    }

    public function addSobreFlujoPlasma( $sobreFlujoPlasma )
    {
        $this->_sobreFlujoPlasma = $sobreFlujoPlasma;
        
        $this->_flujoPlasma = ( $this->_sobreFlujoPlasma <= 99 )? $this->calculoFlujoMaximo() + $this->_sobreFlujoPlasma 
                                                                : $this->_flujoPlasma;
    }
    
    public function calculoTiempoFuncionamiento()
    {
        switch( true ){
            case( $this->_sobreFlujoPlasma >= 99 ) : 
                $ctf = 1;
            break;
        
            case( $this->_flujoPlasma > 100 ): 
                $ctf = 100 - ( $this->_flujoPlasma - 100 );
            break;
        
            default: 
                $ctf = 'infinito';
            break;
        }
        
        return $ctf;
    }

    public function calculoFlujoMaximo()
    {
        $cfm = ( $this->_puntoDanio < 100 ) ? $this->_flujoPlasma - $this->_puntoDanio
                                            : 'Unable to comply';

        return $cfm;
    }

}