<?php
require_once ("../class/PHPMailer-master/PHPMailer.php");


#Receber as variáveis
$Nome=filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
$Email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
$Telefone=filter_input(INPUT_POST,'telefone',FILTER_SANITIZE_STRING);
$Mensagem=filter_input(INPUT_POST,'mensagem',FILTER_SANITIZE_STRING);



#Instanciar nossa Classe
$ObjMail = new PHPMailer; 

echo "<script>
        alert('Cadastro efetuado com sucesso!');
        window.location.href='../index.php';    
     </script>";