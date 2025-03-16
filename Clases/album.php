<?php
final class Album 
{
<<<<<<< HEAD
    public function __construct($id,$nombre,$duracion,$foto,$fechaLanzamiento,$idArtista) {
        $this->id=$id;
        $this->nombre=$nombre;
        $this->duracion=$duracion;
=======
    public function __construct($id,$nombre,$numCanciones,$foto,$fechaLanzamiento,$idArtista) {
        $this->id=$id;
        $this->nombre=$nombre;
        $this->numCanciones=$numCanciones;
>>>>>>> d5904439567b16cdd44390c59b456b1bf3370e29
        $this->foto=$foto;
        $this->fechaLanzamiento=$fechaLanzamiento;
        $this->idArtista=$idArtista;
    }

    public $id;
    public $nombre;
<<<<<<< HEAD
    public $duracion;
=======
    public $numCanciones;
>>>>>>> d5904439567b16cdd44390c59b456b1bf3370e29
    public $foto;
    public $fechaLanzamiento;
    public $idArtista;
}

?>