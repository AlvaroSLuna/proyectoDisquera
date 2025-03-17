<?php
final class Album
{
    public function __construct($id, $nombre, $duracion, $foto, $fechaLanzamiento, $idArtista)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->duracion = $duracion;
        $this->foto = $foto;
        $this->fechaLanzamiento = $fechaLanzamiento;
        $this->idArtista = $idArtista;
    }

    public $id;
    public $nombre;
    public $duracion;
    public $foto;
    public $fechaLanzamiento;
    public $idArtista;
}
