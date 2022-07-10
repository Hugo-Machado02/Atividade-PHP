<?php

class Produtos{
    public $id;
    public $nome;
    public $valor;
    public $quantidade;
    public $infoVenda;
    public $valorCalc;

    public function getCalc(){
        $this->valorCalc = $this->valor * $this->quantidade;
        return $this->valorCalc;
    }
}


?>