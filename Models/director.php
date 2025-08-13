<?php
require_once './Settings/db.php';

class Director {
    protected $db;

    public function __construct() {
        $connection = new db();
        $this->db = $connection->connect();
    }

    public function get() {
        $query = "SELECT * FROM director";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $res = $stmt->get_result();
        $data_arr = [];

        while ($data = $res->fetch_assoc()) {
            $data_arr[] = $data;
        }

        return $data_arr ?: ['message' => 'Sin datos'];
    }

    public function create($data) {
        $query = "INSERT INTO director (nombre, apellido, fecnac, nacionalidad) VALUES (?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('ssss', $data['nombre'], $data['apellido'], $data['fecnac'], $data['nacionalidad']);
        $stmt->execute();

        if ($stmt->error) {
            return ['message' => 'Error en la ejecución de la consulta'];
        }

        return ['message' => 'Director agregado con éxito'];
    }

    public function update($id, $data) {
        $query = "UPDATE director SET nombre=?, apellido=?, fecnac=?, nacionalidad=? WHERE id_director=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('ssssi', $data['nombre'], $data['apellido'], $data['fecnac'], $data['nacionalidad'], $id);
        $stmt->execute();

        if ($stmt->error) {
            return ['message' => 'Error en la actualización'];
        }

        return ['message' => 'Director actualizado con éxito'];
    }

    public function delete($id) {
        $query = "DELETE FROM director WHERE id_director=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $id);
        $stmt->execute();

        if ($stmt->error) {
            return ['message' => 'Error al eliminar'];
        }

        return ['message' => 'Director eliminado con éxito'];
    }
}
?>
