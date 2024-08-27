<?php
require_once 'C:\xampp\htdocs\examenfinalpractica\app\config\database.php';

class Libro {
    private $db;

    public function __construct() {
        $this->db ='pdo';
    }

    public function create($titulo, $autor, $año_publicacion, $genero) {
        $stmt = $this->db->prepare("INSERT INTO libros (titulo, autor, año_publicacion, genero) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$titulo, $autor, $año_publicacion, $genero]);
    }

    public function read() {
        $stmt = $this->db->query("SELECT * FROM Libros");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update($id, $titulo, $autor, $año_publicacion, $genero) {
        $stmt = $this->db->prepare("UPDATE libros SET titulo = ?, autor = ?, año_publicacion = ?, genero = ? WHERE id = ?");
        return $stmt->execute([$titulo, $autor, $año_publicacion, $genero, $id]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM Libros WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>
