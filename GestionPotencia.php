<?php

require_once "./LiteTestPHP.php";
require_once './classes/InyectorPlasma.php';

class TestCaseInyectoPlasma extends TestCase
{
    function test_CrearInyector_1()
    {
        $inyector1 = new InyectorPlasma();

        $this->assert_true( $inyector1 instanceof InyectorPlasma );
    }        
    
    function test_CrearInyector_2()
    {
        $inyector2 = new InyectorPlasma();

        $this->assert_true( $inyector2 instanceof InyectorPlasma );
    }
    
    function test_CrearInyector_3()
    {
        $inyector3 = new InyectorPlasma();

        $this->assert_true( $inyector3 instanceof InyectorPlasma );
    }

    function test_Caso1( $porcentajeVelocidadLuz = 100, $danio = 0 )
    {
        $inyector1 = new InyectorPlasma( $porcentajeVelocidadLuz, $danio );
        $inyector2 = new InyectorPlasma( $porcentajeVelocidadLuz, $danio );
        $inyector3 = new InyectorPlasma( $porcentajeVelocidadLuz, $danio );
        
        $this->assert_true( $inyector1 instanceof InyectorPlasma );
        $this->assert_true( $inyector2 instanceof InyectorPlasma );
        $this->assert_true( $inyector3 instanceof InyectorPlasma );
        
        echo 'CASO 1: <br>';
        
        echo 'FlujoMaximo Inyector 1: '. $inyector1->calculoFlujoMaximo() .'<br>';
        echo 'Tiempo Funcionamiento Inyector 1: '. $inyector1->calculoTiempoFuncionamiento() .'br>';

        echo 'FlujoMaximo Inyector 2: '. $inyector2->calculoFlujoMaximo() .'<br>';
        echo 'Tiempo Funcionamiento Inyector 2: '. $inyector2->calculoTiempoFuncionamiento() .'<br>';

        echo 'FlujoMaximo Inyector 3: '. $inyector3->calculoFlujoMaximo() .'<br>';
        echo 'Tiempo Funcionamiento Inyector 3: '. $inyector3->calculoTiempoFuncionamiento() .'<hr>';
    }

    function test_Caso2( $porcentajeVelocidadLuz = 90, $danio = 0 )
    {
        $inyector1 = new InyectorPlasma( $porcentajeVelocidadLuz, $danio );
        $inyector2 = new InyectorPlasma( $porcentajeVelocidadLuz, $danio );
        $inyector3 = new InyectorPlasma( $porcentajeVelocidadLuz, $danio );
        
        $this->assert_true( $inyector1 instanceof InyectorPlasma );
        $this->assert_true( $inyector2 instanceof InyectorPlasma );
        $this->assert_true( $inyector3 instanceof InyectorPlasma );
        
        echo 'CASO 2: <br>';
        
        echo 'FlujoMaximo Inyector 1: '. $inyector1->calculoFlujoMaximo() .'<br>';
        echo 'Tiempo Funcionamiento Inyector 1: '. $inyector1->calculoTiempoFuncionamiento() .'<br>';

        echo 'FlujoMaximo Inyector 2: '. $inyector2->calculoFlujoMaximo() .'<br>';
        echo 'Tiempo Funcionamiento Inyector 2: '. $inyector2->calculoTiempoFuncionamiento() .'<br>';

        echo 'FlujoMaximo Inyector 3: '. $inyector3->calculoFlujoMaximo() .'<br>';
        echo 'Tiempo Funcionamiento Inyector 3: '. $inyector3->calculoTiempoFuncionamiento() .'<hr>';
    }
    
    
    
    function test_Caso3( $porcentajeVelocidadLuz = 30, $danio = 0 )
    {
        $inyector1 = new InyectorPlasma( $porcentajeVelocidadLuz, $danio );
        $inyector2 = new InyectorPlasma( $porcentajeVelocidadLuz, $danio );
        $inyector3 = new InyectorPlasma( $porcentajeVelocidadLuz, $danio );
        
        $this->assert_true( $inyector1 instanceof InyectorPlasma );
        $this->assert_true( $inyector2 instanceof InyectorPlasma );
        $this->assert_true( $inyector3 instanceof InyectorPlasma );
        
        echo 'CASO 3: <br>';

        echo 'FlujoMaximo Inyector 1: '. $inyector1->calculoFlujoMaximo() .'<br>';
        echo 'Tiempo Funcionamiento Inyector 1: '. $inyector1->calculoTiempoFuncionamiento() .'<br>';

        echo 'FlujoMaximo Inyector 2: '. $inyector2->calculoFlujoMaximo() .'<br>';
        echo 'Tiempo Funcionamiento Inyector 2: '. $inyector2->calculoTiempoFuncionamiento() .'<br>';

        echo 'FlujoMaximo Inyector 3: '. $inyector3->calculoFlujoMaximo() .'<br>';
        echo 'Tiempo Funcionamiento Inyector 3: '. $inyector3->calculoTiempoFuncionamiento() .'<hr>';
    }
    
}

$runner = new TestRunnerCLI();
$runner->add_test_case( new TestCaseInyectoPlasma() );

$runner->print_results();
