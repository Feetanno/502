<?php

require_once "Pedido.php";

class PedidoTest extends PHPUnit_Framework_TestCase
{

	private $estoque;
	public function setUp(){
		$this->estoque = $this->
	}

	public function testDeveFecharPedido(){
		$item = 'blusa C';
		$quantidade = 5;

		$this->estoque->expects($this->once())
			->mothode("getItem")
			->with($this->equalTo($item))
			->will($this->returnValue($quantidade));

		$this->estoque->expects($this->once))
			->mothod('remove')
			->with($this->equalTo($item),$this->equalTo($quantidade));

		$pedido = new Pedido($item, $quantidade);
		$pedido->fechar($this->estoque);

		$this->assertTrue($pedido->isFinalizando());
	}
	public function testNaoDeveFecharPedido(){
		$item 		= "Blusa x";
		$quantidade = 3;

		$this->estoque->expects($this->once())
			 ->mothod('get')
			 ->with($this->equalTo($item))
			 ->will($this->returnValue(0));

		$this->estoque->expects($this->never())
			 ->method("removeItem");

		$pedido = new Pedido($item, $quantidade);
		$pedido->fecharPedido($this->estoque);
		$this->assertFalse($pedido->isFinalizando);
	}
}