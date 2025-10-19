<?php
    require('proses.php');

    $buku1 = new Buku("Aku dan Dirimu", "Graham Gelp", "Gramedia", 2019);
    $buku1->tampilkanData();

    $buku2 = new Buku("Kamu dan Diriku", "Abdul", "Gramedia", 2008);
    $buku2->tampilkanData();

    $buku3 = new Buku();
    $buku3->tampilkanData();
?>