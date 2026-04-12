<?php

class Pedido {
    private $numero;
    private $data;
    private $cliente;
    private $itens = [];

    public function __construct($numero, $data, Cliente $cliente) {
        $this->numero = $numero;
        $this->data = $data;
        $this->cliente = $cliente;
    }

    public function adicionarItem(ItemPedido $item) {
        $this->itens[] = $item;
    }

    public function getTotal() {
        $total = 0;
        foreach ($this->itens as $item) {
            $total += $item->getSubtotal();
        }
        return $total;
    }

    public function exibirPedido() {
        echo "Pedido: {$this->numero}\n";
        echo "Data: {$this->data}\n";
        echo "Cliente: " . $this->cliente->getNome() . "\n\n";

        echo "Itens:\n";
        foreach ($this->itens as $item) {
            echo "- " . $item->getProduto()->getNome();
            echo " | Quantidade: " . $item->getQuantidade();
            echo " | Subtotal: R$ " . $item->getSubtotal() . "\n";
        }

        echo "\nTotal: R$ " . $this->getTotal() . "\n";
    }
}