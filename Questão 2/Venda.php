<?php
class Venda{
    public $produto;
    public $valor;
    public $vendas;

    public function getValorCalc(){
        for($i=1; $i<=3; $i++){
            $this->valor = $this->valor + $this->produto[$i]->getcalc();
        }
        return $this->valor;
    }

    public function imprimirPagas(){
        echo "<strong><font color='blue'>Vendas a Vista</font></strong><br>";
        for($i=1; $i<=6; $i++){
            if($this->produto[$i]->infoVenda == 1){
                echo "<strong>ID do Produto: </strong>" . $this->produto[$i]->id;
                echo "<br><strong>Nome: </strong>" . $this->produto[$i]->nome;
                echo "<br><strong>Valor: </strong>" . $this->produto[$i]->valor;
                echo "<br><strong>Quantidade: </strong>" . $this->produto[$i]->quantidade;
                echo "<br><br>";
            }
        }
    }

    public function getPrazoPagas(){
        echo "<strong><font color='orange'>Vendas a Prazo - Pagas</font></strong><br>";
        for($i=1; $i<=6; $i++){
            if($this->produto[$i]->infoVenda == 2){
                echo "<strong>ID do Produto: </strong>" . $this->produto[$i]->id;
                echo "<br><strong>Nome: </strong>" . $this->produto[$i]->nome;
                echo "<br><strong>Valor: </strong>" . $this->produto[$i]->valor;
                echo "<br><strong>Quantidade: </strong>" . $this->produto[$i]->quantidade;
                echo "<br><br>";
            }
        }
    }
    public function getPrazoNaoPaga(){
        echo "<strong><font color='red'>Vendas a Prazo - Não Pagas</font></strong><br>";
        for($i=1; $i<=6; $i++){
            if($this->produto[$i]->infoVenda == 3){
                echo "<strong>ID do Produto: </strong>" . $this->produto[$i]->id;
                echo "<br><strong>Nome: </strong>" . $this->produto[$i]->nome;
                echo "<br><strong>Valor: </strong>" . $this->produto[$i]->valor;
                echo "<br><strong>Quantidade: </strong>" . $this->produto[$i]->quantidade;
                echo "<br><br>";
            }
        }
    }

    public function gerarProdutos(){
        $produto1= new Produtos();
        $produto1->id = 1;
        $produto1->nome = "Bolacha";
        $produto1->valor = 10.90;
        $produto1->quantidade = 2;
        $produto1->infoVenda = 1;

        $produto2 = new Produtos();
        $produto2->id = 2;
        $produto2->nome = "Pão";
        $produto2->valor = 2.50;
        $produto2->quantidade = 3;
        $produto2->infoVenda = 2;

        $produto3 = new Produtos();
        $produto3->id = 3;
        $produto3->nome = "Refrigerante";
        $produto3->valor = 3.00;
        $produto3->quantidade = 5;
        $produto3->infoVenda = 3;

        $produto4 = new Produtos();
        $produto4->id = 4;
        $produto4->nome = "Refrsanduiche";
        $produto4->valor = 17.00;
        $produto4->quantidade = 1;
        $produto4->infoVenda = 1;

        $produto5 = new Produtos();
        $produto5->id = 5;
        $produto5->nome = "bolo";
        $produto5->valor = 17.00;
        $produto5->quantidade = 1;
        $produto5->infoVenda = 2;

        $produto6 = new Produtos();
        $produto6->id = 6;
        $produto6->nome = "Lanche";
        $produto6->valor = 17.00;
        $produto6->quantidade = 1;
        $produto6->infoVenda = 3;

        $this->produto[1] = $produto1;
        $this->produto[2] = $produto2;
        $this->produto[3] = $produto3;
        $this->produto[4] = $produto4;
        $this->produto[5] = $produto5;
        $this->produto[6] = $produto6;
    }
}
?>