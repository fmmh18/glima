<? include_once "controller/ServicoController.php"; 
  $servicocontroller = new ServicoController();
  $servicos = $servicocontroller->listarServico();
?>

<? include_once "header.php"; ?>
<? include_once "carrousel.php"; ?>
<? include_once "servico.php"; ?>
<div class="col-md-12">
<div class="container">
  <div class="row p-4">
  <div class="col-md-12 text-center p-4">
      <span><p>Está com necessidade de terceirizar seu condomínio residencial e/ou comercial, entre em contato conosco pelo botão ao lado. </p>
      <a href="javascript:void(0);" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal">Solicite já seu orçamento</a></span>
  </div>
  </div>
</div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Orçamento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> 
      <form>
        <div class="row">
          <div class="col-md-6">
          <div class="form-group">
            <label for="nome">Nome(*)</label>
            <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome completo ... ">
            </div>
            <div class="form-group">
                <label for="nome">E-mail(*)</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="E-mail ... ">
            </div>
            <div class="form-group">
              <label for="nome">Telefone(*)</label>
              <input type="text" name="telefone" class="form-control" id="telefone" placeholder="Telefone ... ">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="nome">Assunto(*)</label>
              <input type="text" name="assunto" class="form-control" id="assunto" placeholder="Assunto ... ">
            </div>
            <div class="form-group">
              <label for="nome">Condomínio(*)</label>
              <input type="text" name="condominio" class="form-control" id="condominio" placeholder="Condomínio ... ">
            </div>
            <div class="form-group">
            <label for="mensagem">Mensagem(*)</label>
            <textarea name="mensagem" class="form-control" rows="5" id="mensagem"></textarea>
            </div>
          </div>
        </div>
        
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Fechar</button>
        <button type="button" class="btn btn-primary"><i class="fa fa-download"></i> Salvar</button>
      </div>
    </div>
  </div>
</div>
<? include_once "footer.php"; ?>