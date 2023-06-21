<?php 

namespace App\Models\Validacao;

use \App\Models\Validacao\ResultadoValidacao;
use \App\Models\Entidades\Produto;

class ProdutoValidador{

    public function validar(Produto $produto){
        $resultadoValidacao = new ResultadoValidacao();

        if(empty($produto->getDescricao())){
            $resultadoValidacao->addErro('descricao', "Descrição: Este campo não pode ser vazio");
        }
        if(empty($produto->getMarca())){
            $resultadoValidacao->addErro('marca', "Marca: Este campo não pode ser vazio");
        }
        return $resultadoValidacao;
    }
}
?>