<footer class="section footer-classic context-dark bg-image p-3" style="background: #2d3246;">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              <div class="pr-xl-4 text-center"><a class="brand" href="/"><img class="brand-logo-light" src="<?php echo getenv('APP_LOGO')?>" alt="<?php echo getenv('APP_NAME'); ?>" title="<?php echo getenv('APP_NAME'); ?>" srcset="images/agency/logo-retina-inverse-280x74.png 2x"></a>
                <p class="text-left">O Grupo Lima Prime terceirização LTDA, junto com nossos colaboradores garantimos um serviço de qualidade, confiança e tranquilidade nos serviços que prestamos.</p>
                 </div>
            </div>
            <div class="col-md-4">
              <h5>Contato</h5>
              <dl class="contact-list">
                <dt>Endereço:</dt>
                <dd><?php echo getenv('address'); ?></dd>
              </dl>
              <dl class="contact-list">
                <dt>Email:</dt>
                <dd><a href="mailto:<?php echo getenv('email1'); ?>"><?php echo getenv('email1'); ?></a></dd>
              </dl>
              <dl class="contact-list">
                <dt>Telefone:</dt>
                <dd><a href="tel:<?php echo getenv('phone1'); ?>"><?php echo getenv('phone1'); ?></a>  
                </dd>
              </dl>
            </div>
            <div class="col-md-4 col-xl-3">
              <h5>Menu</h5>
              <ul class="nav-list">
                <li><a href="/sobre">Sobre</a></li>
                <li><a href="/contato">Contato</a></li>
                <li><a href="/orcamento">Orçamento</a></li> 
                <li><a href="/trabalhe-conosco">Trabalhe Conosco</a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
      <div class="container p-3">
      <div class="row">
        <div class="col-6" style="font-size:13px;color:#686868" style="padding-top:10px !important">© <?php echo date('Y'); ?> - Grupo <b><?php echo getenv("APP_NAME")?></b>.</div>
        <div class="col-6 text-right" style="font-size:11px;color:#686868"><img src="<?php echo getenv('APP_DEV'); ?>" class="img"/> Desenvolvidor por <b>AFD Solution</b></div>
      </div>
      </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>