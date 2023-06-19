<div class="container">
  <br>
    <h1>Cadastro de Produto</h1>
  <br>

  <form class="row g-3">
    <div class="col-md-1">
      <label for="inputCodigo" class="form-label">Código</label>
      <input type="text" class="form-control" id="inputCodigo" disabled>
    </div>

    <div class="col-md-11">
      <label for="inputDescricao" class="form-label">Descrição</label>
      <input type="text" class="form-control" id="inputDescricao" placeholder="Descrição do Produto">
    </div>

    <div class="col-md-6">
      <label for="inputmarca" class="form-label">Marca</label>
      <input type="text" class="form-control" id="inputmarca" placeholder="Marca do Produto">
    </div>

    <div class="col-md-6">
      <label for="inputModelo" class="form-label">Modelo</label>
      <input type="text" class="form-control" id="inputModelo" placeholder="Modelo do Produto">
    </div>

    <div class="col-4">
      <label for="inputCor" class="form-label">Cor</label>
      <input type="text" class="form-control" id="inputCor" placeholder="Cor do Produto">
    </div>

    <div class="col-4">
      <label for="selectVoltagem" class="form-label">Voltagem</label>
        <select class="form-select" aria-label="Selecione a Voltagem" id="selectVoltagem">
          <option selected>Selecione a Voltagem</option>
          <option value="1">110V</option>
          <option value="2">220V</option>
          <option value="3">Bivolt</option>
        </select>
    </div>

    <div class="col-4">
      <label for="inputPeso" class="form-label">Peso</label>
      <input type="text" class="form-control" id="inputPeso" placeholder="Peso do Produto">
    </div>

    <div class="col-md-4">
      <label for="inputAltura" class="form-label">Altura</label>
      <input type="text" class="form-control" id="inputAltura" placeholder="Altura do Produto">
    </div>

    <div class="col-md-4">
      <label for="inputLargura" class="form-label">Largura</label>
      <input type="text" class="form-control" id="inputLargura" placeholder="Largura do Produto">
    </div>

    <div class="col-md-4">
      <label for="inputProfundidade" class="form-label">Profundidade</label>
      <input type="text" class="form-control" id="inputProfundidade" placeholder="Profundidade do Produto">
    </div>

    <div class="col-md-2">
        <label for="inputValor" class="form-label">Valor</label>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">R$</span>
          </div>
          <input type="text" class="form-control">
        </div>
    </div>
    
    <div class="col-md-12 d-flex justify-content-end">
      <button type="button" class="btn btn-success">Cadastrar</button>&nbsp&nbsp
      <button type="button" class="btn btn-danger">Cancelar</button>
    </div>

  </form>

  <br>
</div>  
