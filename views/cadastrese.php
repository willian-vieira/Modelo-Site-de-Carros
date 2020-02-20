<!DOCTYPE html>
<html lang="pt-br">
  
  <head>
    <?php require_once ("../libraries/head.php"); ?>  

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A WEF veiculos é uma empresa especializada na venda de vepiculos. Temos muitos anos de experiência na área">
    <meta name="keywords" contet="sobre a wef veículos, about wef carros na cidade de CPS">
    <title>Sobre a WEF Veículos</title>
  </head>
  <body>

    <header>

        <?php require_once ("../libraries/body.php"); ?> 
        
        <div class="ind-banner">
            <picture>
                <source media="(max-width: 480px)" srcset="../Images/mobile/mobile_cadastrese.jpg">
                <source media="(min-width: 481px) and (max-width: 768px)" srcset="../Images/tablet-cadastrese.jpg">
                <source media="(min-width: 769px)" srcset="../Images/desktop/desktop_cadastrese.jpg">
                <img src="../Images/mobile-cadastrese.jpg" alt="Banner Cadastrase - WEF Veículos" title="Banner Cadastrese - WEF Veículos">
            </picture>
        </div>

    </header>



    <main>
       <div class="TextoResponsivo">
            Cadastre-se para obter maiores informações<br><br>

            <form name="FormularioCadastro" id="FormularioCadstro" method="post" action="../controllers/ControllerInsercao.php">
                
                <div class="Formulario">
                    <label for="nome">Nome: *</label><br>
                    <input type="text" id="nome" name="nome" required>
                 </div>

                 <div class="Formulario">
                    <label for="email">E-mail: *</label><br>
                    <input type="email" id="email" name="email" required>
                 </div>

                 <div class="Formulario">
                    <label for="telefone">Telefone: *</label><br>
                    <input type="tel" id="telefone" name="telefone" required>
                 </div>

                 <div class="Formulario">
                    <label for="idade">Idade: *</label><br>
                    <input type="text" id="idade" name="idade" required>
                 </div>

                 <div class="Formulario">
                    <input type="submit" id="botao" name="botao" value="Cadastrar">
                 </div>    
            </form>
            
        </div>
    </main>


    <footer>

      <?php require_once ("../libraries/footer.php"); ?>
    
    </footer>

  </body>
</html>
