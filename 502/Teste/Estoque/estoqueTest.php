<?php

require_once "estoque.php";

use PHPUnit\Framework\TestCase;

class EsquoteTest extends TestCase
{
	private $estoue;

	public function setUp(){
		$this->estoque = new Estoque();
	}

	public function testeAddItem(){
		$item 		= "Blusa X";
		$quantidade = 10;

		
		$this->estoque->addItem($item,$quantidade);

		$this->assertSame($quantidade, $this->estoque->getItem)

	}
	public function testSomaQuantidade(){
		$item = 'blusa X';
		

		$this->estoque->addItem($item, 1);
		$this->estoque->addItem($item, 2);
		$this->estoque->addItem($item, 3);

		$this->assertSame(6, $this->estoque->getItem($item));
	}
	/*
	 * @ expectedException InvalidArgumentException
	 * @ expectedExceptionMessage Item nao existe no estoque.
	 */

	public function testItemInvalido(){
		
		$this->estoque->getItem("Blusa Y");
	}

	public function testRemoveQuantidade(){
		$this->estoque->addItem("Blusa A", 10);

		$this->estoque->removeItem("Blusa A", 4);

		$this->assertSame(6 $this->estoque->getItem($item));
	}
}