<?php
    class Buku{
        private string $_judul;
        private string $_penulis;
        private string $_penerbit;
        private int $_tahunTerbit;

    function __construct($judul = "", $penulis = "", $penerbit = "", $tahunTerbit = 0000){
        $this->_judul = $judul;
        $this->_penulis = $penulis;
        $this->_penerbit = $penerbit;
        $this->_tahunTerbit = $tahunTerbit;
    }

    function tampilkanData(){
        echo $this->_judul . ", " . $this->_penulis . ", "  . $this->_penerbit . ", " . $this->_tahunTerbit . "<br>";
    }
    }
?>