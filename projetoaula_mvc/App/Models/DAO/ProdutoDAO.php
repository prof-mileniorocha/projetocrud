<?php 

namespace App\Models\DAO;
use App\Models\Entidades\Produto;

class ProdutoDAO extends BaseDAO{

    //FUNÇÃO PARA LISTAR OS PRODUTOS
    public function listar($id = null){
        if($id){
            $resultado = $this->select(
                "SELECT * FROM produto WHERE id = $id"
            );

            return $resultado->fetchObject(Produto::class);
        } else {
            $resultado = $this->select(
                'SELECT * FROM produto'
            );
            return $resultado->fetchAll(\PDO::FETCH_CLASS, Produto::class);
        }

        return false;
    }

    //FUNÇÃO PARA SALVAR OS PRODUTOS
    public function salvar(Produto $produto){
        try {
            $descricao = $produto->getDescricao();
            $marca = $produto->getMarca();
            $modelo = $produto->getModelo();
            $cor = $produto->getCor();
            $voltagem = $produto->getVoltagem();
            $peso = $produto->getPeso();
            $altura = $produto->getAltura();
            $largura = $produto->getLargura();
            $profundidade = $produto->getProfundidade();
            $preco = $produto->getPreco();

            return $this->insert(
                'produto',
                ":descricao, :marca, :modelo, :cor, :voltagem, :peso, :altura, :largura, :profundidade, :preco",
                [
                    ':descricao' => $descricao,
                    ':marca' => $marca,
                    ':modelo' => $modelo,
                    ':cor' => $cor,
                    ':voltagem' => $voltagem,
                    ':peso' => $peso,
                    ':altura' => $altura,
                    ':largura' => $largura,
                    ':profundidade' => $profundidade,
                    ':preco' => $preco
                ]
            );
        } catch (\Exception $e) {
            throw new \Exception("Erro ao salvar dados! ", 500);      
        }
    }

    //FUNÇÃO PARA ATUALIZAR OS PRODUTOS
    public function atualizar(Produto $produto){
        try {
            $id = $produto->getId();
            $descricao = $produto->getDescricao();
            $marca = $produto->getMarca();
            $modelo = $produto->getModelo();
            $cor = $produto->getCor();
            $voltagem = $produto->getVoltagem();
            $peso = $produto->getPeso();
            $altura = $produto->getAltura();
            $largura = $produto->getLargura();
            $profundidade = $produto->getProfundidade();
            $preco = $produto->getPreco();

            return $this->update(
                'produto',
                "descricao = :descricao, marca = :marca, modelo = :modelo, cor = :cor, voltagem = :voltagem, peso = :peso, altura = :altura, largura = :largura, profundidade = :profundidade, preco = :preco",
                    [
                        ':id' => $id,
                        ':descricao' => $descricao,
                        ':marca' => $marca,
                        ':modelo' => $modelo,
                        ':cor' => $cor,
                        ':voltagem' => $voltagem,
                        ':peso' => $peso,
                        ':altura' => $altura,
                        ':largura' => $largura,
                        ':profundidade' => $profundidade,
                        ':preco' => $preco
                    ],
                    "id = :id"
            );

        } catch (\Exception $e) {
            throw new \Exception("Erro ao atualizar dados!", 500);
        }
    }

    //FUNÇÃO PARA EXCLUIR OS PRODUTOS
    public function excluir(Produto $produto)
    {
        try {
            $id = $produto->getId();

            return $this->delete('produto', $id);

        } catch (\Exception $e) {
            throw new \Exception("Erro ao deletar", 500);
        }
    }
}
?>