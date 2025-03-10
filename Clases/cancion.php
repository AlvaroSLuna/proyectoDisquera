<?php
class Canciones {
    public function __construct($id,$nombre,$foto,$duracion,$idArtista) {
        $this->id=$id;
        $this->nombre=$nombre;
        $this->foto=$foto;
        $this->duracion=$duracion;
        $this->idArtista=$idArtista;
    }

    public $id;
    public $nombre;
    public $foto;
    public $duracion;
    public $idArtista;
}
?>