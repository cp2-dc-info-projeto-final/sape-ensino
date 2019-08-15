<?php
require_once('../../Database/DB.PHP');
class Cadastro extends database{
    
    public function __construct(){} ////////////////////////////////////////
    public function __clone(){} //////// Funções construtoras //////////////

    
    public function cadastrarAluno($n, $e, $m, $s){ // Cadastra os Alunos;
        
        $params = array($n, $m, $e, $s, "Aluno");
        try {
        $query = "INSERT INTO login (nome, matricula, email, senha, cargo) VALUES (?, ?, ?, ?, ?)";
        $id_result = $this->insertDB($query, $params);  
        $query2 = "INSERT INTO aluno (id) VALUES (?)";
        $this->insertDB($query2, array($id_result));
        }catch (PDOException $e){
            die("Erro: <code>" . $e->getMessage() . "</code>");
        }

    }

    public function cadastrarDocente($n, $e, $m, $s, $c){ // Cadastra os Docentes

        $params = array($n, $m, $e, $s, $c); 
        try {
        $query = "INSERT INTO login (nome, matricula, email, senha, cargo) VALUES (?, ?, ?, ?, ?)";
        $id_result = $this->insertDB($query, $params);  
        $query2 = "INSERT INTO docente (id) VALUES (?)";
        $this->insertDB($query2, array($id_result));
        }  catch (PDOException $e){
            die("Erro: <code>" . $e->getMessage() . "</code>");
        }

    }

    public function getEmail($email){

        $params = array($email);
        try {
            $query = "SELECT nome, matricula, email, senha, cargo FROM login WHERE email = ?";
            $result = $this->selectDB($query, $params);
            return $result;
        } catch (PDOException $e){
            die("Erro: <code>" . $e->getMessage() . "</code>");
        }
    }

}




?>