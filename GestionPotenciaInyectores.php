<?php

require_once './classes/InyectorPlasma.php';

class GestionPotenciaInyectores
{

    private $_inyector1;
    private $_inyector2;
    private $_inyector3;
    private $_porcentajeVelocidadLuz;
    private $_incrementoFlujo;
    private $_numInyectoresValidos;

    public function __construct( $porcentajeDanio1, $porcentajeDanio2, $porcentajeDanio3, $porcentajeVelocidad )
    {
        $this->_porcentajeVelocidadLuz = $porcentajeVelocidad;
        $this->_inyector1 = new InyectorPlasma( $porcentajeDanio1 );
        $this->_inyector2 = new InyectorPlasma( $porcentajeDanio2 );
        $this->_inyector3 = new InyectorPlasma( $porcentajeDanio3 );

        $this->_incrementoFlujo = $this->_calculoIncremento();
        $this->_numInyectoresValidos = $this->_getNumeroInyectoresValidos();
    }

    private function _calculoDelta()
    {
        return ( $this->_porcentajeVelocidadLuz * 300 ) / 100;
    }

    private function _calculoDañoTotalInyectores()
    {
        $capacidadInyector1 = $this->_inyector1->calculoFlujoPermitido();
        $capacidadInyector2 = $this->_inyector2->calculoFlujoPermitido();
        $capacidadInyector3 = $this->_inyector3->calculoFlujoPermitido();

        return $capacidadInyector1 + $capacidadInyector2 + $capacidadInyector3;
    }

    private function _calculoIncremento()
    {        
        return ( $this->_calculoDelta() - $this->_calculoDañoTotalInyectores() ) / 3;
    }

    private function _getNumeroInyectoresValidos()
    {
        $numInyectoresValidos = 3;

        if( $this->_inyector1->calculoFlujoPermitido() == 0 ){
            $numInyectoresValidos = $numInyectoresValidos - 1;
        }

        if( $this->_inyector2->calculoFlujoPermitido() == 0 ){
            $numInyectoresValidos = $numInyectoresValidos - 1;
        }

        if( $this->_inyector3->calculoFlujoPermitido() == 0 ){
            $numInyectoresValidos = $numInyectoresValidos - 1;
        }
        
        return $numInyectoresValidos;
    }

    public function calculoFlujoFuncionamientoInyector1()
    {
        return $this->_inyector1->calculoFlujoFuncionamiento( $this->_incrementoFlujo );
    }

    public function calculoFlujoFuncionamientoInyector2()
    {
        return $this->_inyector2->calculoFlujoFuncionamiento( $this->_incrementoFlujo );
    }

    public function calculoFlujoFuncionamientoInyector3()
    {
        return $this->_inyector3->calculoFlujoFuncionamiento( $this->_incrementoFlujo );
    }

    public function calculoTiempoFuncionamientoTotal()
    {
        return ( $this->_incrementoFlujo > 0 )  ? 100 - $this->_incrementoFlujo 
                                                : 'infinito';
    }

}