<?php
class equipemodel
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    //Método para criar ingresso
    public function criarequipe($nome_eqp, $cor, $qnt_membros)
    {
        $sql = "INSERT INTO equipe (nome_eqp, cor, qnt_membros)
    VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome_eqp, $cor, $qnt_membros]);
    }

    //Model para listar equipes
    public function listarequipes()
    {
        $sql = "SELECT * FROM equipe";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchALL(PDO::FETCH_ASSOC);
    }

    //Model para atualizar equipes
    public function
    atualizarequipe($id_equipe, $nome_eqp, $cor, $qnt_membros)
    {
        $sql = "UPDATE equipe SET nome_eqp = ?, cor = ?, qnt_membros = ?
    WHERE id_equipe = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome_eqp, $cor, $qnt_membros, $id_equipe]);
    }

public function deletarequipe($id_equipe) {
    $sql = "DELETE FROM equipe WHERE id_equipe = ?";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([$id_equipe]);
}
}
