<?php

require_once 'Cliente.php';

use PHPUnit\Framework\testCase;

class ClienteTest extends testCase
{
	public function testCriacaoCliente(){
		$cliente = new Cliente('Felipe');
		$this->asserSame("Felipe",$cliente->getNome());
	}
}