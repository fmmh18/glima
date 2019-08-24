<div class="col-md-12 bg-white">
<div class="container">
  <div class="row p-4">
  <? foreach ($servicos as $key => $value){ ?>
    <div class="col-md-4 p-3 text-center">
      <img src="assets/images/icons/<?=$value->icon?>"/>
      <h4 class="titulo-color p-2 font-weight-bolder"><?=$value->titulo?></h4>
      <p class="font-italic titulo-color text-justify"><?=$value->descricao?></p>
    </div>
  <? } ?>
  </div>
</div>
</div>