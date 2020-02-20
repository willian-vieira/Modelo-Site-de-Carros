<!DOCTYPE html>
<html lang="pt-br">
  
  <head>
    <?php require_once ("../libraries/head.php"); ?>  

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A WEF Veículos é uma empresa especializada em anúncios de automóveis e motos na região de Campinas.Contamos com milhares de veículos à sua disposição.">
    <meta name="keywords" contet="WEF veículos, empresa de veículos em CPS, anuncios de automéveis, veículos na regão de CPS">
    <script src="../libraries/jquery.cycle.lite.js"></script>
    <title>WEF Veículos - Anúncio de Veículos em Campinas</title>
  </head>
  <body>

    <header>
        <?php require_once ("../libraries/body.php"); ?> 
        
        <div class="ind-slide">
            <picture>
                <source media="(max-width: 480px)" srcset="../Images/mobile/mobile_slide1.jpg">
                <source media="(min-width: 481px) and (max-width: 768px)" srcset="../Images/tablet/tablet_slide1.jpg">
                <source media="(min-width: 769px)" srcset="../Images/desktop/desktopp_slide1.jpg">
                <img src="../Images/mobile/mobile-slide1.jpg" alt="Veículos WEF Slide 1" title="">
            </picture>

            <picture>
                <source media="(max-width: 480px)" srcset="../Images/mobile/mobile_slide2.jpg">
                <source media="(min-width: 481px) and (max-width: 768px)" srcset="../Images/tablet/tablet_slide2.jpg">
                <source media="(min-width: 769px)" srcset="../Images/desktop/desktopp_slide2.jpg">
                <img src="../Images/mobile/mobile-slide2.jpg" alt="Veículos WEF Slide 1" title="">
            </picture>

            <picture>
                <source media="(max-width: 480px)" srcset="../Images/mobile/mobile_slide3.jpg">
                <source media="(min-width: 481px) and (max-width: 768px)" srcset="../Images/tablet/tablet_slide3.jpg">
                <source media="(min-width: 769px)" srcset="../Images/desktop/desktopp_slide3.jpg">
                <img src="../Images/mobile/mobile-slide2.jpg" alt="Veículos WEF Slide 1" title="">
            </picture>
        </div>
    </header>



    <main>
        <div class="ind-anuncio">
          <div class="ind-anuncio-title">Carro 1</div>
          <div class="ind-anuncio-image"><img src="../Images/anuncios/BMW1.jpg" alt="Carro 1"></div>
          <div class="ind-anuncio-texto">Bmw 2019 <br>Nova geração de veiculos fabricados no Brasil</div>
        </div>

        <div class="ind-anuncio">
          <div class="ind-anuncio-title">Carro 2</div>
          <div class="ind-anuncio-image"><img src="../Images/anuncios/BMW2.jpg" alt="Carro 1"></div>
          <div class="ind-anuncio-texto">BMW I9 <br>Nova geração de veiculos fabricados no Brasil</div>
        </div>

        <div class="ind-anuncio">
          <div class="ind-anuncio-title">Carro 3</div>
          <div class="ind-anuncio-image"><img src="../Images/anuncios/BMW3.jpg" alt="Carro 1"></div>
          <div class="ind-anuncio-texto">BMW Série 3 <br>Nova geração da BMW fabricados no Brasil</div>
        </div>

        <div class="ind-anuncio">
          <div class="ind-anuncio-title">Carro 4</div>
          <div class="ind-anuncio-image"><img src="../Images/anuncios/BMW4.jpg" alt="Carro 1"></div>
          <div class="ind-anuncio-texto">BMW Série 5 <br>Nova geração da BMW fabricados no Brasil</div>
        </div>

        <div class="ind-anuncio">
          <div class="ind-anuncio-title">Carro 5</div>
          <div class="ind-anuncio-image"><img src="../Images/anuncios/BMW5.jpg" alt="Carro 1"></div>
          <div class="ind-anuncio-texto">BMW5 - BMW M5 Sport <br>Nova geração da BMW fabricados no Brasil</div>
        </div>

        <div class="ind-anuncio">
          <div class="ind-anuncio-title">Carro 6</div>
          <div class="ind-anuncio-image"><img src="../Images/anuncios/BMW6.jpg" alt="Carro 1"></div>
          <div class="ind-anuncio-texto">BMW X1 <br>Nova geração da BMW fabricados no Brasil</div>
        </div>

        <div class="ind-anuncio">
          <div class="ind-anuncio-title">Carro 7</div>
          <div class="ind-anuncio-image"><img src="../Images/anuncios/BMW7.jpg" alt="Carro 1"></div>
          <div class="ind-anuncio-texto">BMW X6 <br>Nova geração da BMW fabricados no Brasil</div>
        </div>

        <div class="ind-anuncio">
          <div class="ind-anuncio-title">Carro 8</div>
          <div class="ind-anuncio-image"><img src="../Images/anuncios/BMW8.jpg" alt="Carro 1"></div>
          <div class="ind-anuncio-texto">BMW X7 Archives <br>Nova geração da BMW fabricados no Brasil</div>
        </div>
    </main>


    <footer>

      <?php require_once ("../libraries/footer.php"); ?>
    
    </footer>

  </body>
</html>
