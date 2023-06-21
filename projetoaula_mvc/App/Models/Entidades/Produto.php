<?php 

namespace App\Models\Entidades;

class Produto{
     private $id;
     private $descricao;
     private $marca;
     private $modelo;
     private $cor;
     private $voltagem;
     private $peso;
     private $altura;
     private $largura;
     private $profundidade;
     private $preco;

     public function getI(){
          return $this->id;
     }

     public function setId($id){
          $this->id = $id;
     }

     public function getDescricao(){
          return $this->descricao;
     }

     public function setDescricao($descricao){
          $this->descricao = $descricao;
     }

     public function getMarca(){
          return $this->marca;
     }

     public function setMarca($marca){
          $this->marca = $marca;
     }

     public function getModelo(){
          return $this->modelo;
     }

     public function setModelo($modelo){
          $this->modelo = $modelo;
     }

     public function getCor(){
          return $this->cor;
     }

     public function setCor($cor){
          $this->cor = $cor;
     }

     public function getVoltagem(){
          return $this->voltagem;
     }

     public function setVoltagem($voltagem){
          $this->voltagem = $voltagem;
     }

     public function getPeso(){
          return $this->peso;
     }

     public function setPeso($peso){
          $this->peso = $peso;
     }

     public function getAltura(){
          return $this->altura;
     }

     public function setAltura($altura){
          $this->altura = $altura;
     }

     public function getLargura(){
          return $this->largura;
     }

     public function setLargura($largura){
          $this->largura = $largura;
     }

     public function getProfundidade(){
          return $this->profundidade;
     }

     public function setProfundidade($profundidade){
          $this->profundidade = $profundidade;
     }

     public function getPreco(){
          return $this->preco;
     }

     public function setPreco($preco){
          $this->preco = $preco;
     }
}
?>
