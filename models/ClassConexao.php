<?php

 class ClassConexao {


    public function Conectar() {

        try {
            $Pdo = new PDO ("mysql:host=localhost;dbname=wef_db","root","");
            return $Pdo;

        } catch (PDOException $e) {
            echo "Erro com banco de dados: ".$e->getMessage();
        }
    }
}