<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/SpeedSensor.php';

class VelocidadTest extends TestCase
{
    public function testMuyLento() {
        $sensor = new SpeedSensor();
        $this->assertEquals("Muy lento", $sensor->checkSpeed(10));
        $this->assertEquals("Muy lento", $sensor->checkSpeed(29));
    }

    public function testVelocidadAdecuada() {
        $sensor = new SpeedSensor();
        $this->assertEquals("Velocidad adecuada", $sensor->checkSpeed(30));
        $this->assertEquals("Velocidad adecuada", $sensor->checkSpeed(60));
    }

    public function testExcesoLeve() {
        $sensor = new SpeedSensor();
        $this->assertEquals("Exceso leve", $sensor->checkSpeed(61));
        $this->assertEquals("Exceso leve", $sensor->checkSpeed(80));
    }

    public function testExcesoModerado() {
        $sensor = new SpeedSensor();
        $this->assertEquals("Exceso moderado", $sensor->checkSpeed(81));
        $this->assertEquals("Exceso moderado", $sensor->checkSpeed(100));
    }

    public function testExcesoGrave() {
        $sensor = new SpeedSensor();
        $this->assertEquals("Exceso grave", $sensor->checkSpeed(101));
        $this->assertEquals("Exceso grave", $sensor->checkSpeed(150));
    }
}