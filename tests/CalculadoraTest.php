<?php
use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase{
	public function testSoma(){
		$calc = new Calculadora();
		$this->assertEquals(
			2, 
			$calc->soma(1,1)
		);
	}
}