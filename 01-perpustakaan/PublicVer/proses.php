<?php
    class Buku{
        public string $judul;
        public string $penulis;
        public string $penerbit;
        public int $tahunTerbit;
        
        public function __construct($judul = "", $penulis = "", $penerbit = "", $tahunTerbit = 0000){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->tahunTerbit = $tahunTerbit;
        }

        public function tampilkanData(){


            echo $this->judul . ", " . $this->penulis . ", " . $this->penerbit . ", " . $this->tahunTerbit . "<br>";
        }
    }
?>