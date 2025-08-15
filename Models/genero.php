<?php
require_once __DIR__ . '/../settings/db.php';

class Genero 
{
    protected $db;

    public function __construct()
    {
        $connection = new db();
        $this->db = $connection->connect();
    }

    // READ - Obtener todos los géneros

    public function get()
    {
        $query = "SELECT * FROM genero";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $res = $stmt->get_result();
        $data_arr = [];

        while ($data = $res->fetch_assoc())
        {
            $data_arr[] = $data;
        }

        return $data_arr ?: ['message' => 'Sin datos'];
    }

    // CREATE - Agregar nuevo género

    public function create($data)
    {
        $query = "INSERT INTO genero (nombre) VALUES (?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('s', $data['nombre']);
        $stmt->execute();

        if ($stmt->error)
        {
            return ['message' => 'Error en la ejecución de la consulta'];
        }

        return ['message' => 'Género agregado con éxito'];
    }

    // UPDATE - Editar género

    public function update($id, $data)
    {
        $query = "UPDATE genero SET nombre=? WHERE id_genero=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('si', $data['nombre'], $id);
        $stmt->execute();

        if ($stmt->error)
        {
            return ['message' => 'Error en la actualización'];
        }

        return ['message' => 'Género actualizado con éxito'];
    }

    // DELETE - Eliminar género

    public function delete($id)
    {
        $query = "DELETE FROM genero WHERE id_genero=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $id);
        $stmt->execute();

        if ($stmt->error)
        {
            return ['message' => 'Error al eliminar'];
        }

        return ['message' => 'Género eliminado con éxito'];
    }
}
?>