<?php

class Kendaraan
{
    public $merk;
    public $warna;
    public $tempatoperasi;

    function __construct($merk, $warna, $tempatoperasi)
    {
        $this->merk = $merk;
        $this->warna = $warna;
        $this->tempatoperasi = $tempatoperasi;
    }
}

$kendaraan = new Kendaraan("Toyota", "Hitam Putih", "Darat");
echo $kendaraan->merk;
echo "</br>";
echo $kendaraan->warna;
echo "</br>";
echo $kendaraan->tempatoperasi;
?>