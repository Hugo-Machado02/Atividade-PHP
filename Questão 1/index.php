<?php
include("Venda.php");
include("Produtos.php");

$venda1 = new Venda();
$venda1->gerarProdutos();
echo "<strong>Valor Total da Compra:</strong> " . $venda1->getValorCalc();
?>