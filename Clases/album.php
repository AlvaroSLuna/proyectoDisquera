<?php
final class Album 
{
    public function __construct($id,$nombre,$numCanciones,$foto,$fechaLanzamiento,$idArtista) {
        $this->id=$id;
        $this->nombre=$nombre;
        $this->numCanciones=$numCanciones;
        $this->foto=$foto;
        $this->fechaLanzamiento=$fechaLanzamiento;
        $this->idArtista=$idArtista;
    }

    public $id;
    public $nombre;
    public $numCanciones;
    public $foto;
    public $fechaLanzamiento;
    public $idArtista;
}

?>