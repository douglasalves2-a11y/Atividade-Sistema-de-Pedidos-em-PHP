<?php
require_once 'Cliente.php';
require_once 'Produto.php';
require_once 'ItemPedido.php';
require_once 'Pedido.php';

$cliente = new Cliente("David", "david@email.com");

$produto1 = new Produto("Notebook", 3000);
$produto2 = new Produto("Mouse", 100);


$item1 = new ItemPedido($produto1, 1);
$item2 = new ItemPedido($produto2, 2);


$pedido = new Pedido(1, date("d/m/Y"), $cliente);


$pedido->adicionarItem($item1);
$pedido->adicionarItem($item2);

// Exibindo pedido
$pedido->exibirPedido();