<?php

require_once "./LiteTestPHP.php";
require_once './GestionPotenciaInyectores.php';

class TestGestionPotenciaInyectores extends TestCase
{

    function test_CrearInyector_1()
    {
        $inyector1 = new GestionPotenciaInyectores();

        $this->assert_true( $inyector1 instanceof GestionPotenciaInyectores );
    }

    function test_CrearInyector_2()
    {
        $inyector2 = new GestionPotenciaInyectores();

        $this->assert_true( $inyector2 instanceof GestionPotenciaInyectores );
    }

    function test_CrearInyector_3()
    {
        $inyector3 = new GestionPotenciaInyectores();

        $this->assert_true( $inyector3 instanceof GestionPotenciaInyectores );
    }

    function test_Caso1( $danio1 = 0, $danio2 = 0, $danio3 = 0, $porcentajeVelocidadLuz = 100 )
    {
        $gestionPotencia = new GestionPotenciaInyectores( $danio1, $danio2, $danio3, $porcentajeVelocidadLuz );

        echo 'CASO 1: <br>';
        echo 'Flujo Inyector A: ' . $gestionPotencia->calculoFlujoFuncionamientoInyector1() . '<br>';
        echo 'Flujo Inyector B: ' . $gestionPotencia->calculoFlujoFuncionamientoInyector2() . '<br>';
        echo 'Flujo Inyector C: ' . $gestionPotencia->calculoFlujoFuncionamientoInyector3() . '<br>';
        echo 'Tiempo de Funcionamiento: ' . $gestionPotencia->calculoTiempoFuncionamientoTotal() . '<hr>';

        $this->assert_true( $gestionPotencia instanceof GestionPotenciaInyectores );
    }

    function test_Caso2( $danio1 = 0, $danio2 = 0, $danio3 = 0, $porcentajeVelocidadLuz = 90 )
    {
        $gestionPotencia = new GestionPotenciaInyectores( $danio1, $danio2, $danio3, $porcentajeVelocidadLuz );

        echo 'CASO 2: <br>';
        echo 'Flujo Inyector A: ' . $gestionPotencia->calculoFlujoFuncionamientoInyector1() . '<br>';
        echo 'Flujo Inyector B: ' . $gestionPotencia->calculoFlujoFuncionamientoInyector2() . '<br>';
        echo 'Flujo Inyector C: ' . $gestionPotencia->calculoFlujoFuncionamientoInyector3() . '<br>';
        echo 'Tiempo de Funcionamiento: ' . $gestionPotencia->calculoTiempoFuncionamientoTotal() . '<hr>';

        $this->assert_true( $gestionPotencia instanceof GestionPotenciaInyectores );
    }

    function test_Caso3( $danio1 = 0, $danio2 = 0, $danio3 = 0, $porcentajeVelocidadLuz = 30 )
    {
        $gestionPotencia = new GestionPotenciaInyectores( $danio1, $danio2, $danio3, $porcentajeVelocidadLuz );

        echo 'CASO 3: <br>';
        echo 'Flujo Inyector A: ' . $gestionPotencia->calculoFlujoFuncionamientoInyector1() . '<br>';
        echo 'Flujo Inyector B: ' . $gestionPotencia->calculoFlujoFuncionamientoInyector2() . '<br>';
        echo 'Flujo Inyector C: ' . $gestionPotencia->calculoFlujoFuncionamientoInyector3() . '<br>';
        echo 'Tiempo de Funcionamiento: ' . $gestionPotencia->calculoTiempoFuncionamientoTotal() . '<hr>';

        $this->assert_true( $gestionPotencia instanceof GestionPotenciaInyectores );
    }

    function test_Caso4( $danio1 = 20, $danio2 = 10, $danio3 = 0, $porcentajeVelocidadLuz = 100 )
    {
        $gestionPotencia = new GestionPotenciaInyectores( $danio1, $danio2, $danio3, $porcentajeVelocidadLuz );

        echo 'CASO 4: <br>';
        echo 'Flujo Inyector A: ' . $gestionPotencia->calculoFlujoFuncionamientoInyector1() . '<br>';
        echo 'Flujo Inyector B: ' . $gestionPotencia->calculoFlujoFuncionamientoInyector2() . '<br>';
        echo 'Flujo Inyector C: ' . $gestionPotencia->calculoFlujoFuncionamientoInyector3() . '<br>';
        echo 'Tiempo de Funcionamiento: ' . $gestionPotencia->calculoTiempoFuncionamientoTotal() . '<hr>';

        $this->assert_true( $gestionPotencia instanceof GestionPotenciaInyectores );
    }

    function test_Caso5( $danio1 = 0, $danio2 = 0, $danio3 = 100, $porcentajeVelocidadLuz = 80 )
    {
        $gestionPotencia = new GestionPotenciaInyectores( $danio1, $danio2, $danio3, $porcentajeVelocidadLuz );

        echo 'CASO 5: <br>';
        echo 'Flujo Inyector A: ' . $gestionPotencia->calculoFlujoFuncionamientoInyector1() . '<br>';
        echo 'Flujo Inyector B: ' . $gestionPotencia->calculoFlujoFuncionamientoInyector2() . '<br>';
        echo 'Flujo Inyector C: ' . $gestionPotencia->calculoFlujoFuncionamientoInyector3() . '<br>';
        echo 'Tiempo de Funcionamiento: ' . $gestionPotencia->calculoTiempoFuncionamientoTotal() . '<hr>';

        $this->assert_true( $gestionPotencia instanceof GestionPotenciaInyectores );
    }

    function test_Caso6( $danio1 = 0, $danio2 = 0, $danio3 = 0, $porcentajeVelocidadLuz = 150 )
    {
        $gestionPotencia = new GestionPotenciaInyectores( $danio1, $danio2, $danio3, $porcentajeVelocidadLuz );

        echo 'CASO 6: <br>';
        echo 'Flujo Inyector A: ' . $gestionPotencia->calculoFlujoFuncionamientoInyector1() . '<br>';
        echo 'Flujo Inyector B: ' . $gestionPotencia->calculoFlujoFuncionamientoInyector2() . '<br>';
        echo 'Flujo Inyector C: ' . $gestionPotencia->calculoFlujoFuncionamientoInyector3() . '<br>';
        echo 'Tiempo de Funcionamiento: ' . $gestionPotencia->calculoTiempoFuncionamientoTotal() . '<hr>';

        $this->assert_true( $gestionPotencia instanceof GestionPotenciaInyectores );
    }

    function test_Caso7( $danio1 = 0, $danio2 = 0, $danio3 = 30, $porcentajeVelocidadLuz = 140 )
    {
        $gestionPotencia = new GestionPotenciaInyectores( $danio1, $danio2, $danio3, $porcentajeVelocidadLuz );

        echo 'CASO 7: <br>';
        echo 'Flujo Inyector A: ' . $gestionPotencia->calculoFlujoFuncionamientoInyector1() . '<br>';
        echo 'Flujo Inyector B: ' . $gestionPotencia->calculoFlujoFuncionamientoInyector2() . '<br>';
        echo 'Flujo Inyector C: ' . $gestionPotencia->calculoFlujoFuncionamientoInyector3() . '<br>';
        echo 'Tiempo de Funcionamiento: ' . $gestionPotencia->calculoTiempoFuncionamientoTotal() . '<hr>';

        $this->assert_true( $gestionPotencia instanceof GestionPotenciaInyectores );
    }

    function test_Caso8( $danio1 = 20, $danio2 = 50, $danio3 = 40, $porcentajeVelocidadLuz = 170 )
    {
        $gestionPotencia = new GestionPotenciaInyectores( $danio1, $danio2, $danio3, $porcentajeVelocidadLuz );

        echo 'CASO 8: <br>';
        echo 'Flujo Inyector A: ' . $gestionPotencia->calculoFlujoFuncionamientoInyector1() . '<br>';
        echo 'Flujo Inyector B: ' . $gestionPotencia->calculoFlujoFuncionamientoInyector2() . '<br>';
        echo 'Flujo Inyector C: ' . $gestionPotencia->calculoFlujoFuncionamientoInyector3() . '<br>';
        echo 'Tiempo de Funcionamiento: ' . $gestionPotencia->calculoTiempoFuncionamientoTotal() . '<hr>';

        $this->assert_true( $gestionPotencia instanceof GestionPotenciaInyectores );
    }

}
$runner = new TestRunnerCLI();
$runner->add_test_case( new TestGestionPotenciaInyectores() );

$runner->print_results();
