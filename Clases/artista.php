<?php
final class artista
{

    public function __construct($nombre,$foto,$descripcion,$id) {
        $this->nombre=$nombre;
        $this->foto=$foto;
        $this->descripcion=$descripcion;
        $this->id=$id;
    }
    public $nombre;
    public $foto;
    public $descripcion;
    public $id;

}

?>