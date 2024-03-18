<?php
class HewanMamalia
{
    public $warna;
    public $namaHewan;
    public $habitat;


    function makan()
    {
        return "Mamalia makan Daging";
    }

    function minum()
    {
        return "Mamalia minum Susu";
    }

    function menyusui()
    {
        return "Mamalia menyusui Kucing";
    }
}

$mamalia = new HewanMamalia();
$mamalia->namaHewan = "Kucing";
$mamalia->warna = "Abu-abu";
$mamalia->habitat = "Dalam rumah";

echo $mamalia->namaHewan; "kucing";
echo "</br>";
echo $mamalia->warna; "Abu-abu";
echo "</br>";
echo $mamalia->habitat; "Dalam rumah";
echo "</br>";
echo $mamalia->makan();
echo "</br>";
echo $mamalia->minum();
echo "</br>";
echo $mamalia->menyusui();
echo "</br>";
?>