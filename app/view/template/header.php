
<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?php echo getenv('APP_NAME'); ?></title>
  </head>
  <body>
  <header class="text-white" style="background-color: #2D3246">
  <div class="container-fluid">
  <div class="row">
  <div class="col-6 p-2" style="font-size: 13px"><?php echo getenv('email1'); ?></div>
  <div class="col-6 p-2 text-right" style="font-size: 13px">tel: <?php echo getenv('phone1'); ?></div>
  </div>
  </div>
  </header>
  <div id="carouselExampleIndicators" class="carousel slide carousel-fade carousel-shadow" data-ride="carousel">
  <ol class="carousel-indicators">
    <?php 
        $i = 0;
        foreach($vars['carousels'] as $key):
          if($i == 0):
    ?>
    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $key; ?>" class="active"></li>
    <?php
          else:
    ?>
    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $key; ?>"></li>
    <?php
      $i++;
      endif;
      endforeach;
    ?>
  </ol>
  <div class="carousel-inner">
  <?php 
        $i = 0;
        foreach($vars['carousels'] as $key => $value):
          if($i == 0):
    ?>
    <div class="carousel-item active">
      <img src="<?php echo $value['image']?>" class="d-block w-100" alt="<?php echo $value['description']?>" title="<?php echo $value['title']?>">
    </div>
    <?php
          else:
    ?>
    <div class="carousel-item">
      <img src="<?php echo $value['image']?>" class="d-block w-100" alt="<?php echo $value['description']?>" title="<?php echo $value['title']?>">
    </div>
    <?php
      $i++;
      endif;
      endforeach;
    ?>
  </div>
</div>