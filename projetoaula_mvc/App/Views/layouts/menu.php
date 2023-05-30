<nav class="navbar navbar-expand-lg" style="background-color: #9696ff;">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://<?php echo APP_HOST;?>/home/index">My Produto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://<?php echo APP_HOST;?>/home/index">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://<?php echo APP_HOST;?>/produto/cadastro">Cadastro de Produtos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://<?php echo APP_HOST;?>/produto/edicao">Editar Produtos</a>               
        </li>
        <li class="nav-item">
          <a href="http://<?php echo APP_HOST;?>/produto/exclusao" class="nav-link">Excluir Produtos</a>
        </li>
        <li class="nav-item">
          <a href="http://<?php echo APP_HOST;?>/produto/listar" class="nav-link">Listar Produtos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
