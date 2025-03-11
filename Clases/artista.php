<?php
final class artista
{

    public function __construct($nombre,$foto,$descripcion,$id,$instagram,$youtube,$facebook,$x,$spotify,$deezer,$tidal,$music,$videoclip) {
        $this->nombre=$nombre;
        $this->foto=$foto;
        $this->descripcion=$descripcion;
        $this->id=$id;
        $this->instagram=$instagram;
        $this->youtube=$youtube;
        $this->facebook=$facebook;
        $this->x=$x;
        $this->spotify=$spotify;
        $this->deezer=$deezer;
        $this->tidal=$tidal;
        $this->music=$music;
        $this->videoclip=$videoclip;
    }
    public $nombre;
    public $foto;
    public $descripcion;
    public $id;
    public $instagram;
    public $youtube;
    public $facebook;
    public $x;
    public $spotify;
    public $deezer;
    public $tidal;
    public $music;
    public $videoclip;

}

?>