<?php
require_once ("../models/ClassConexao.php");

class ClassInsercao extends ClassConexao {

    private $Id;
    private $Nome;
    private $Email;
    private $Telefone;
    private $Idade;

    #Método Construtor
    public function  __construct ($Nome, $Email, $Telefone, $Idade) {
        $this->Id=0;
        $this->Nome=$Nome;
        $this->Email=$Email;
        $this->Telefone=$Telefone;
        $this->Idade=$Idade;
    }


    #Método de Inserção
    public function InserirDB() {
        $Crud=$this->Conectar()->prepare("INSERT INTO clientes VALUES (?,?,?,?,?)");
        $Crud->bindParam(1,$this->Id,PDO::PARAM_INT);
        $Crud->bindParam(2,$this->Nome,PDO::PARAM_STR);
        $Crud->bindParam(3,$this->Email,PDO::PARAM_STR);
        $Crud->bindParam(4,$this->Telefone,PDO::PARAM_STR);
        $Crud->bindParam(5,$this->Idade,PDO::PARAM_STR);
        $Crud->execute();
    }
   
}
