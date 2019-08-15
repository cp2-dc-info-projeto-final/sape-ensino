<?php

require_once('../../Database/DB.PHP');

class Logar extends database {

    public function __construct(){} ////////////////////////////////////////
    public function __clone(){} //////// Funções construtoras //////////////
    
    public function getPassword($m){

        try {
            $query = "SELECT id, nome, email, matricula, senha, cargo FROM login WHERE matricula = ?";
            $rows = $this->selectDB($query, array($m));
            return $rows[0]['senha'];
            } catch(PDOException $e){
                die("Erro: <code>" . $e->getMessage() . "</code>");
            }
    }

    public function validaLogin($m, $s) {
        
    try {
            $query = "SELECT id, nome, email, matricula, senha, cargo FROM login WHERE matricula = ?";
            $rows  = $this->selectDB($query, array($m));
            if ($rows[0]['senha'] == $s) {
                return $rows[0];
            } else {
                return false;
            }
        } catch(PDOException $e) {
                die("Erro: <code>" . $e->getMessage() . "</code>");
        }
    }
    
}










?>