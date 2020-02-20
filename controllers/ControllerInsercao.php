<?php
require_once ("../class/ClassInsercao.php");


#Receber as variáveis
$Nome=filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
$Email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
$Telefone=filter_input(INPUT_POST,'telefone',FILTER_SANITIZE_STRING);
$Idade=filter_input(INPUT_POST,'idade',FILTER_SANITIZE_STRING);



#Instanciar nossa Classe
$ObjCrud=new ClassInsercao($Nome, $Email, $Telefone, $Idade);
$ObjCrud->InserirDB();

echo "<script>
        alert('Cadastro efetuado com sucesso!');
        window.location.href='../index.php';    
     </script>";