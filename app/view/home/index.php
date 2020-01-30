<?php include __DIR__ . "/../template/header.php"; ?>
 <div class="container">
     <div class="row">
     <div class="col-12 h3 pt-3">Conheça um pouco da GL Lima.
         <hr style="height:2px; border:none; color:#000; background-color:#000; margin-top: 0px; margin-bottom: 0px;"/>
         </div>
         <div class="col-12"> 
             
            <?php echo substr($vars['pages'][0]['description'],0,464); ?>
         </div>
         <div class="col-12 h3 pt-3">Serviços Prestados
         <hr style="height:2px; border:none; color:#000; background-color:#000; margin-top: 0px; margin-bottom: 0px;"/>
         </div>
         <div class="col-12"> 
             <div class="row">
         <?php foreach($vars['services'] as $key => $value): ?>
            <div class="card m-3" style="width: 18rem;">
            <img src="<?php echo $value['image']; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $value['name']; ?></h5>
                <p class="card-text"><?php echo $value['description']; ?></p>
            </div>
            </div>
         <?php endforeach; ?>
         </div>
         </div>
     </div>
 </div>
<?php include __DIR__ . "/../template/footer.php"; ?>