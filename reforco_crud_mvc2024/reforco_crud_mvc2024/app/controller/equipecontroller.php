<?php
require_once 'app/model/equipemodel.php';

class equipeController {
    private $equipemodel;

    public function __construct($pdo) {
        $this->equipemodel = new equipemodel($pdo);
    }
        
    public function criarequipe($nome_eqp, $cor, $qnt_membros) {
        $this->equipemodel->criarequipe($nome_eqp, $cor, $qnt_membros);
    }

    public function listarequipes() {
        return $this->equipemodel->listarequipes();
    }

    public function exibirListaequipes() {
        $equipes = $this->equipemodel->listarequipes();
        include 'views/equipes/lista.php';
    }
    
    public function atualizarequipe($id_equipe, $nome_eqp, $cor, $qnt_membros) {
        $this->equipemodel->atualizarequipe($id_equipe, $nome_eqp, $cor, $qnt_membros);
    }

    public function deletarequipe($id_equipe) {
        $this->equipemodel->deletarequipe($id_equipe);
    }

}