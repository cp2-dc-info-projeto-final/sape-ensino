<?php
    session_start();
    require_once('CadModel.php');
    

    if(!empty($_SESSION)) {
        header('Location: ../../Menus/MenusView.php');
        exit();
    }

 Class cadcontrol {
    public function __construct(){} ////////////////////////////////////////
    public function __clone(){} //////// Funções construtoras //////////////
    public function __destruct(){}////////////////////////////////
    
    //Declarar Váriaveis
    private $nome, $email, $matrticula, $cargo, $senha, $senha2, $senhah;

     ///Pegar Váriaveis//        
    public function getVariaveis() {

    $nome = $_POST["nome_cad"];
    $email = $_POST["email_cad"];
    $matricula = $_POST["matri_cad"];
    isset($_POST['cargo']) ? $cargo = $_POST['cargo'] : $cargo = 'Aluno';
    $senha = $_POST["senha_cad"];
    $senha2 =$_POST["consenha_cad"];
    $senhah = password_hash($senha, PASSWORD_DEFAULT);

    $posts = array('nome' => $nome, 'email' => $email, 'matricula' => $matricula, 'cargo' => $cargo, 'senha1' => $senha, 'senha2' => $senha2, 'senhah' => $senhah);
    return $posts;

    }

    public function cadastrar($posts){
        $cadmodel = new Cadastro();
        if($posts['cargo'] == "Aluno"){
            $cadmodel->cadastrarAluno($posts['nome'], $posts['email'], $posts['matricula'], $posts['senhah']);
        } else {
            $cadmodel->cadastrarDocente($posts['nome'], $posts['email'], $posts['matricula'], $posts['senhah'], $posts['cargo']);
        } 
        $cadmodel->__destruct();
    }

    public function vadSenha($senha1, $senha2){
        if($senha1 != $senha2){
            $_SESSION['system_message'] = "As senhas não coincidem!";
            $_SESSION['alert_type'] = "danger";
            return false;
        } else {
            return true;
        }
    }
    
    public function vadEmail($email){
        $cadmodel = new Cadastro();
        $result = $cadmodel->getEmail($email);
        $cadmodel->__destruct();
        if(isset($result[0])){
            $_SESSION['system_message'] = "Email já utilizado!";
            $_SESSION['alert_type'] = "danger";
            return false;
        } else {
            return true;
        }
        
    }

}
    /////EXECUTAR SE FOR UM SUBMIT DE UM FORM////////////////
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $control = new cadcontrol();
        $posts = $control->getVariaveis();
        if ($control->vadSenha($posts['senha1'], $posts['senha2']) && $control->vadEmail($posts['email'])){
            $control->cadastrar($posts);
        }        
        header('Location: ../Login/LogView.php');
    } 

    $control->__destruct();
    exit();
?>