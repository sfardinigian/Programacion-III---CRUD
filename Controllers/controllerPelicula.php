<?php
require_once __DIR__ . '/../models/pelicula.php';

class peliculaController
{
    public function obtenerPelicula()
    {
        $pelicula = new Pelicula;
        return $pelicula->get();
    }

    public function crearPelicula($data)
    {
        if (!preg_match('^[a-zA-Z-áéíóúÁÉÍÓÚñÑüÜ\s]+$^', $data['nombre']))
        {
            header('Location: index.php?error=nombre');
        }
        if (!preg_match('^\d{4}$^', $data['aniopubli']))
        {
            header('Location: index.php?error=año');
        }

        $pelicula = new Pelicula;

        $pelicula->create($data);

        header('Location: ../index.php?ok=create');
    }
}
?>