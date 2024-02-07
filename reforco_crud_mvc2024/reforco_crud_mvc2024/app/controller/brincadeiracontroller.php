<?php
require_once 'app/model/brincadeiramodel.php';

class brincadeiraController {
    private $brincadeiramodel;

    public function __construct($pdo) {
        $this->brincadeiramodel = new brincadeiramodel($pdo);
    }
        
    public function criarbrincadeira($nome_brincadeira) {
        $this->brincadeiramodel->criarbrincadeira($nome_brincadeira);
    }

    public function listarbrincadeiras() {
        return $this->brincadeiramodel->listarbrincadeiras();
    }

    public function exibirListabrincadeiras() {
        $brincadeiras = $this->brincadeiramodel->listarbrincadeiras();
        include 'views/brincadeiras/lista.php';
    }
    
    public function atualizarbrincadeira($id_brincadeira, $nome_brincadeira) {
        $this->brincadeiramodel->atualizarbrincadeira($id_brincadeira, $nome_brincadeira);
    }

        public function deletarbrincadeira($id_brincadeira) {
            $this->brincadeiramodel->deletarbrincadeira($id_brincadeira);
        }

}