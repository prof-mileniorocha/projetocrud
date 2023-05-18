<?php

namespace App\Controllers;

class ProdutoController extends Controller
{
    public function index()
    {
        $this->render('produto/index');
    }

    public function cadastro()
    {
        $this->render('produto/cadastro');
    }

    public function edicao()
    {
        $this->render('produto/edicao');
    }
    
}