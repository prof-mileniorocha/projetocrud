<?php

namespace App\Controllers;

use App\Lib\Sessao;
use App\Models\DAO\ProdutoDAO;
use App\Models\Entidades\Produto;
use App\Models\Validacao\ProdutoValidador;

class ProdutoController extends Controller
{

    public function index()
    {
        $this->render('produto/index');
    }

    public function cadastro()
    {
        $this->render('produto/cadastro');
        Sessao::limpaFormulario();
        Sessao::limpaMensagem();
        Sessao::limpaErro();
    }

    public function salvar(){
        $produto = new Produto();

        $produto->setDescricao($_POST['descricao']);
        $produto->setMarca($_POST['marca']);
        $produto->setModelo($_POST['modelo']);
        $produto->setCor($_POST['cor']);
        $produto->setVoltagem($_POST['voltagem']);
        $produto->setPeso($_POST['peso']);
        $produto->setAltura($_POST['altura']);
        $produto->setLargura($_POST['largura']);
        $produto->setProfundidade($_POST['profundidade']);
        $produto->setPreco($_POST['preco']);

        Sessao::gravaFormulario($_POST);

        $produtoValidador = new ProdutoValidador();
        $resultadoValidacao = $produtoValidador->validar($produto);

        if ($resultadoValidacao->getErros()) {
            Sessao::gravaErro($resultadoValidacao->getErros());
            $this->redirect('/produto/cadastro');
        }

        Sessao::limpaFormulario();
        Sessao::limpaMensagem();
        Sessao::limpaErro();

        $produtoDAO = new ProdutoDAO();

        $produtoDAO->salvar($produto);

        Sessao::gravaMensagem("Produto cadastrado com Sucesso!");
        $this->redirect('/produto/cadastro');   
    }

    public function edicao()
    {
        $this->render('produto/edicao');
    }

    public function exclusao()
    {
        $this->render('produto/exclusao');
    }

}
