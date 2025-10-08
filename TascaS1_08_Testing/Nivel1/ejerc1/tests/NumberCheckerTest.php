<?php
use PHPUnit\Framework\TestCase;
require_once 'NumberChecker.php';

class testNumberChecker extends TestCase {

    public function testNumeroPar() {
        $obj = new NumberChecker(4);
        $this->assertTrue($obj->isEven());
    }

    public function testNumeroImpar() {
        $obj = new NumberChecker(5);
        $this->assertFalse($obj->isEven());
    }

    public function testNumeroPositivo() {
        $obj = new NumberChecker(10);
        $this->assertTrue($obj->isPositive());
    }

    public function testNumeroNegativo() {
        $obj = new NumberChecker(-1);
        $this->assertFalse($obj->isPositive());
    }

    public function testCero() {
        $obj = new NumberChecker(0);
        $this->assertFalse($obj->isPositive());
        $this->assertTrue($obj->isEven());
    }
}
?>