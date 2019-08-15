<?php
    session_start();
    require_once('LogModel.php');
    
    if(!empty($_SESSION)){
        header('Location: ../../Menus/MenusView.php');
        exit();
    }

    Class logincontrol {
        public function __construct(){} ////////////////////////////////////////
        public function __clone(){} //////// Funções construtoras //////////////
        public function __destruct(){}////////////////////////////////

        private $matricula, $senha, $hash;
            
        public function setVar() {
            $LogFunc = new Logar();
            $this->$matricula = $_POST['matricula'];
            $this->$senha = $_POST['senha'];
            $this->$hash = $LogFunc->getPassword($matricula);
            $posts = array('matricula' => $matricula, 'senha' => $senha, 'hash' => $hash);
            $LogFunc->__destruct();
            return $posts;
        }

        public function vadSenha($senha, $hash) {
            if (password_verify($senha, $hash)){
                return true;
            } else {
                return false;
            }
        }
    }


    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $logincontrol = new logincontrol;
        $LogFunc = new Logar();
        $posts = $logincontrol->setVar();
        if ($logincontrol->vadSenha($posts['senha'], $posts['hash'])){
            $rows = $LogFunc->validaLogin($matricula, $hash);
            $_SESSION['id'] = $rows['id'];
            $_SESSION['nome'] = $rows['nome'];
            $_SESSION['cargo'] = $rows['cargo'];
            $_SESSION['email'] = $rows['email'];
            $_SESSION['matricula'] = $rows['matricula'];
            header('Location: ../../Menus/MenusView.php');
        } else {
            $_SESSION['system_message'] = "Login Incorreto! Tente novamente.";
            $_SESSION['alert_type'] = "danger";
            header('Location: LogView.php');
        }
    }

exit();


?>