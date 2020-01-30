<?php include __DIR__ . "/../template/header.php"; ?>
 <div class="container">
     <div class="row">
     <div class="col-12 h3 pt-3">Sobre.
         <hr style="height:2px; border:none; color:#000; background-color:#000; margin-top: 0px; margin-bottom: 0px;"/>
         </div>
         <div class="col-12"> 
            <?php echo $vars['pages'][0]['description']; ?>
         </div>
    </div>    
 </div>
<?php include __DIR__ . "/../template/footer.php"; ?>