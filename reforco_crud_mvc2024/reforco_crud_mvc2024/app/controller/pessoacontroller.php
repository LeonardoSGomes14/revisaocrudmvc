<?php
require_once 'app/model/pessoamodel.php';

class pessoaController {
    private $pessoamodel;

    public function __construct($pdo) {
        $this->pessoamodel = new pessoamodel($pdo);
    }
        
    public function criarpessoa ($nome_pessoa, $idade_pessoa, $cor_equipe) {
        $this->pessoamodel->criarpessoa($nome_pessoa, $idade_pessoa, $cor_equipe);
    }

    public function listarpessoas() {
        return $this->pessoamodel->listarpessoas();
    }

    public function exibirListapessoas() {
        $pessoas = $this->pessoamodel->listarpessoas();
        include 'views/pessoas/lista.php';
    }
    
    public function atualizarpessoa($id_pessoa, $nome_pessoa, $idade_pessoa, $cor_equipe) {
        $this->pessoamodel->atualizarpessoa($id_pessoa, $nome_pessoa, $idade_pessoa, $cor_equipe);
    }

    public function deletarpessoa($id_pessoa) {
        $this->pessoamodel->deletarpessoa($id_pessoa);
    }
}