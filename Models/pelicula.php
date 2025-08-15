<?php
require_once __DIR__ . '/../settings/db.php';

class Pelicula
{
    protected $db;

    public function __construct()
    {
        $connection = new db();
        $this->db = $connection->connect();
    }

    // READ - Obtener todas las películas

    public function get()
    {
        $query = "SELECT p.id, p.nombre, p.aniopubli, g.nombre AS genero, d.nombre AS director, p.descripcion
        FROM peliculas p
        INNER JOIN genero g ON p.id_genero = g.id_genero
        INNER JOIN director d ON p.id_director = d.id_director";
        
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        if ($stmt->error)
        {
            return ['message' => 'Error en la lectura'];
        }

        $res = $stmt->get_result();
        $data_arr = [];

        while ($data = $res->fetch_assoc())
        {
            $data_arr[] = $data;
        }

        return $data_arr ?: ['message' => 'Sin datos'];
    }

    // CREATE - Agregar nueva película

    public function create($data)
    {
        $query = "INSERT INTO peliculas (nombre, aniopubli, id_genero, id_director, descripcion) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('ssii', $data['nombre'], $data['aniopubli'], $data['id_genero'], $data['id_director'], $data['descripcion']);
        $stmt->execute();

        if ($stmt->error)
        {
            return ['message' => 'Error en la ejecución de la consulta'];
        }

        return ['message' => 'Película agregada con éxito'];
    }

    // UPDATE - Editar película

    public function update($id, $data)
    {
        $query = "UPDATE peliculas SET nombre=?, aniopubli=?, id_genero=?, id_director=?, descripcion=? WHERE id_pelicula=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('ssiii', $data['nombre'], $data['aniopubli'], $data['id_genero'], $data['id_director'], $data['descripcion'], $id);
        $stmt->execute();

        if ($stmt->error)
        {
            return ['message' => 'Error en la actualización'];
        }

        return ['message' => 'Película actualizada con éxito'];
    }

    // DELETE - Eliminar película

    public function delete($id)
    {
        $query = "DELETE FROM peliculas WHERE id_pelicula=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $id);
        $stmt->execute();

        if ($stmt->error)
        {
            return ['message' => 'Error al eliminar'];
        }

        return ['message' => 'Película eliminada con éxito'];
    }
}
?>