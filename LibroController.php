<?php
require_once 'C:\xampp\htdocs\examenfinalpractica\app\models\Libro.php';

class LibroController {
    private $libro;

    public function __construct() {
        $this->libro = new Libro();
    }

    public function handleRequest() {
        $method = $_SERVER['REQUEST_METHOD'];

        switch ($method) {
            case 'POST':
                $data = json_decode(file_get_contents("php://input"), true);
                $this->libro->create($data['titulo'], $data['autor'], $data['año_publicacion'], $data['genero']);
                echo json_encode(["message" => "Libro creado"]);
                break;
                
            case 'GET':
                echo json_encode($this->libro->read());
                break;
                
            case 'PUT':
                $data = json_decode(file_get_contents("php://input"), true);
                $this->libro->update($data['id'], $data['titulo'], $data['autor'], $data['año_publicacion'], $data['genero']);
                echo json_encode(["message" => "Libro actualizado"]);
                break;
                
            case 'DELETE':
                $data = json_decode(file_get_contents("php://input"), true);
                $this->libro->delete($data['id']);
                echo json_encode(["message" => "Libro eliminado"]);
                break;
        }
    }
}
?>
