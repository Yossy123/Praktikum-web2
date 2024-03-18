<?php

class Mahasiswa
{
    public $namaMahasiswa, $nim, $prodi, $domisili, $ipk;

    function __construct($namaMahasiswa, $nim, $prodi, $domisili, $ipk)
    {
        $this->namaMahasiswa = $namaMahasiswa;
        $this->nim = $nim;
        $this->prodi = $prodi;
        $this->domisili = $domisili;
        $this->ipk = $ipk;
    }

    function setPredikatIPK($ipk)
    {
        if ($ipk > 3.75) {
            return "Cumlaude";
        } else {
            echo "You did a great job!!!!";
        }
    }
}
$mahasiswa = new Mahasiswa("Yoshi", "0110223073", "Teknik Informatika", "Bojong", 4.00);
echo "Nama Lengkap :"  . $mahasiswa->namaMahasiswa;
echo "</br>";
echo "NIM :" . $mahasiswa->nim;
echo "</br>";
echo "Prodi :" . $mahasiswa->prodi;
echo "</br>";
echo "Domisili :" . $mahasiswa->domisili;
echo "</br>";
echo "Predikat IPK :" . $mahasiswa->setPredikatIPK($mahasiswa->ipk);
?>