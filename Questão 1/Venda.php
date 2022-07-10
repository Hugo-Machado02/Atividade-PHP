<?php
class Venda{
    public $produto;
    public $valor;

    public function getValorCalc(){
        for($i=1; $i<=3; $i++){
            $this->valor = $this->valor + $this->produto[$i]->getcalc();
        }
        return $this->valor;
    }

    public function gerarProdutos(){
        $this->produto[1] = new Produtos();
        $this->produto[1]->id = 1;
        $this->produto[1]->nome = "Bolacha";
        $this->produto[1]->valor = 7.90;
        $this->produto[1]->quantidade = 2;
        $this->produto[1]->infoVenda = 1;

        $this->produto[2] = new Produtos();
        $this->produto[2]->id = 2;
        $this->produto[2]->nome = "Pão";
        $this->produto[2]->valor = 2.50;
        $this->produto[2]->quantidade = 3;
        $this->produto[2]->infoVenda = 2;

        $this->produto[3] = new Produtos();
        $this->produto[3]->id = 3;
        $this->produto[3]->nome = "Refrigerante";
        $this->produto[3]->valor = 3.00;
        $this->produto[3]->quantidade = 5;
        $this->produto[3]->infoVenda =  3;

        for($i=1; $i<=3; $i++){
            if($this->produto[$i]->infoVenda == 1){
                $this->produto[$i]->infoVenda = "Venda a Vista";
            }
            if($this->produto[$i]->infoVenda == 2){
                $this->produto[$i]->infoVenda = "Venda a Prazo - Paga";
            }
            if($this->produto[$i]->infoVenda == 3){
                $this->produto[$i]->infoVenda = "Venda a Prazo - Não Paga";
            }

            echo "<strong>Produtos: </strong>";
            echo "<strong>ID do Produto: </strong>" . $this->produto[$i]->id;
            echo "<br><strong>Nome: </strong>" . $this->produto[$i]->nome;
            echo "<br><strong>Valor: </strong>" . $this->produto[$i]->valor;
            echo "<br><strong>Quantidade: </strong>" . $this->produto[$i]->quantidade;
            echo "<br><strong>Venda: </strong>" . $this->produto[$i]->infoVenda;
            echo "<br><br>";
        }
    }
}
?>