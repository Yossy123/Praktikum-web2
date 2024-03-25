<?php
class Validasi {
    public function validasiNim($nim) {
        return preg_match("/^[0-9]{1,10}$/", $nim);
    }

    public function validasiMk($mk) {
        $mataKuliah = ["Statistika", "Pemrograman Web", "Jaringan Komputer"];
        return in_array($mk, $mataKuliah);
    }

    public function validasiNilai($nilai) {
        return $nilai >= 0 && $nilai <= 100;
    }

    public function hitungGrade($nilai) {
        if ($nilai >= 80) {
            return "A";
        } elseif ($nilai >= 70) {
            return "B";
        } elseif ($nilai >= 60) {
            return "C";
        } else {
            return "D";
        }
    }
}
