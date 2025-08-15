<?php
require_once __DIR__ . '/../models/Genero.php';

class generoController
{
    public function obtenerGenero()
    {
        $genero = new Genero;
        return $genero->get();
    }

    public function crearGenero($data)
    {
        if (!preg_match('^[a-zA-Z-áéíóúÁÉÍÓÚñÑüÜ\s]+$^', $data['nombre']))
        {
            header('Location: index.php?error=nombre');
        }

        $genero = new Genero;

        $genero->create($data);

        header('Location: ../index.php?ok=create');
    }
}
?>