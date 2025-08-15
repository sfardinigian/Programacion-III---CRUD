<?php
require_once __DIR__ . '/../models/Director.php';

class directorController
{
    public function obtenerDirector()
    {
        $director = new Director;
        return $director->get();
    }

    public function crearDirector($data)
    {
        if (!preg_match('^[a-zA-Z-áéíóúÁÉÍÓÚñÑüÜ\s]+$^', $data['nombre']))
        {
            header('Location: index.php?error=nombre');
        }
        if (!preg_match('^[a-zA-Z-áéíóúÁÉÍÓÚñÑüÜ\s]+$^', $data['apellido']))
        {
            header('Location: index.php?error=apellido');
        }
        if (!preg_match('^\d{4}-\d{2}-\d{2}$^', $data['fecnac']))
        {
            header('Location: index.php?error=fecnac');
        }
        if (!preg_match('^[a-zA-Z-áéíóúÁÉÍÓÚñÑüÜ\s]+$^', $data['nacionalidad']))
        {
            header('Location: index.php?error=nacionalidad');
        }

        $director = new Director;

        $director->create($data);

        header('Location: ../index.php?ok=create');
    }
}
?>