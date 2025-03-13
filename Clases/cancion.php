<?php
class Canciones {
    public function __construct($id,$nombre,$foto,$reproducciones,$idArtista) {
        $this->id=$id;
        $this->nombre=$nombre;
        $this->foto=$foto;
        $this->reproducciones=$reproducciones;
        $this->idArtista=$idArtista;
    }

    public $id;
    public $nombre;
    public $foto;
    public $reproducciones;
    public $idArtista;
}
?>