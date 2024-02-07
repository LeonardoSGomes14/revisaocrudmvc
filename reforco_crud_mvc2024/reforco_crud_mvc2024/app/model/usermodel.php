<?php
class usermodel
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    //Método para criar user
    public function criaruser($nome, $email, $senha, $adm)
    {
        $sql = "INSERT INTO cadastro (nome, email, senha, adm)
    VALUES (?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $email, $senha, $adm]);
    }

    //Model para listar users
    public function listarusers()
    {
        $sql = "SELECT * FROM cadastro";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchALL(PDO::FETCH_ASSOC);
    }

    //Model para atualizar users
    public function
    atualizaruser($id, $nome, $email, $senha, $adm)
    {
        $sql = "UPDATE cadastro SET nome = ?, email = ?, senha = ?, adm = ?
    WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $email, $senha, $adm, $id]);
    }


    public function deletaruser($id) {
        $sql = "DELETE FROM cadastro WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }
}
