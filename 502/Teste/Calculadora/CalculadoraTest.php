<?php

require_once 'Calculadora.php';

use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase
{
	private $calculadora;

	public function setUp(){
		$this->calculadora = new Calculadora(3,3);
	}
	public function testSomar(){
		$this->assertSame(6,$this->calculadora->somar());
		$this->asserEquals(6,$this->calculadora->somar());
	}
	public function testSubitrair(){
		$this->assertSame(0,$this->calculadora->subtrair());
		$this->asserEquals(6,$this->calculadora->subtrair());
	}
	public function testMultiplicar(){
		$this->assertSame(9,$this->calculadora->multiplicar());
		$this->asserEquals(6,$this->calculadora->multiplicar());
	}
	public function testDividir(){
		$this->assertSame(1,$this->calculadora->dividir());
		$this->asserEquals(6,$this->calculadora->dividir());
	}

}