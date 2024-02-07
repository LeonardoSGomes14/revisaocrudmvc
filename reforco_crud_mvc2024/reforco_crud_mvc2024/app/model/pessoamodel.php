<?php
class pessoamodel
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    //Método para criar pessoa
    public function criarpessoa($nome_pessoa, $idade_pessoa, $cor_equipe)
    {
        $sql = "INSERT INTO pessoa (nome_pessoa, idade_pessoa, cor_equipe)
    VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome_pessoa, $idade_pessoa, $cor_equipe]);
    }

    //Model para listar pessoas
    public function listarpessoas()
    {
        $sql = "SELECT * FROM pessoa";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchALL(PDO::FETCH_ASSOC);
    }

    //Model para atualizar pessoas
    public function
    atualizarpessoa($id_pessoa, $nome_pessoa, $idade_pessoa, $cor_equipe)
    {
        $sql = "UPDATE pessoa SET nome_pessoa = ?, idade_pessoa = ?, cor_equipe = ?
    WHERE id_pessoa = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome_pessoa, $idade_pessoa, $cor_equipe, $id_pessoa]);
    }

    public function deletarpessoa($id_pessoa) {
        $sql = "DELETE FROM pessoa WHERE id_pessoa = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id_pessoa]);
    }
}
