<?php
include("Venda.php");
include("Produtos.php");

$venda1 = new Venda();
$venda1->gerarProdutos();
echo $venda1->imprimirPagas();
echo $venda1->getPrazoPagas();
echo $venda1->getPrazoNaoPaga();
echo "<strong><font color='green'>Valor Total</font></strong><br>";
echo "R$ " . $venda1->getValorCalc();
?>