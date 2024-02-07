<?php
class   brincadeiramodel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo; 
    }

    //Método para criar brincadeira
public function criarbrincadeira($nome_brincadeira) {
    $sql = "INSERT INTO brincadeira (nome_brincadeira)
    VALUES (?)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([$nome_brincadeira]);
}

//Model para listar users
public function listarbrincadeiras() {
    $sql = "SELECT * FROM brincadeira";
    $stmt = $this->pdo->query($sql);
    return $stmt->fetchALL(PDO:: FETCH_ASSOC);
}

//Model para atualizar users
public function 
atualizarbrincadeira($id_brincadeira, $nome_brincadeira) {
    $sql = "UPDATE brincadeira SET nome_brincadeira = ?
    WHERE id_brincadeira = ?";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([$nome_brincadeira, $id_brincadeira]);
} 
public function deletarBrincadeira($id_brincadeira) {
    $sql = "DELETE FROM brincadeira WHERE id_brincadeira = ?";
    $stmt = $this->pdo->prepare($sql);
    if (!$stmt->execute([$id_brincadeira])) {
        throw new RuntimeException('Erro ao deletar a brincadeira');
    }
}

}
