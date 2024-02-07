<?php
require_once 'app/model/usermodel.php';

class userController {
    private $usermodel;

    public function __construct($pdo) {
        $this->usermodel = new usermodel($pdo);
    }
        
    public function criaruser ($nome, $email, $senha, $adm) {
        $this->usermodel->criaruser($nome, $email, $senha, $adm);
    }

    public function listarusers() {
        return $this->usermodel->listarusers();
    }

    public function exibirListausers() {
        $users = $this->usermodel->listarusers();
        include 'views/users/lista.php';
    }
    
    public function atualizaruser($id, $nome, $email, $senha, $adm) {
        $this->usermodel->atualizaruser($id, $nome, $email, $senha, $adm);
    }

    public function deletaruser($id) {
        $this->usermodel->deletaruser($id);
    }

}