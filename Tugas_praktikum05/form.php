<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form Nilai Ujian</title>
    <link rel="stylesheet" href="style.css">

</head>

<style>
    body {
        font-family: sans-serif;
        margin: 20px;
    }

    h1 {
        text-align: center;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="number"],
    select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-bottom: 15px;
    }

    button {
        background-color: #4CAF50;
        /* Green */
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin-bottom: 15px;
        cursor: pointer;
        border-radius: 4px;
    }

    button:hover {
        background-color: #45A049;
    }

    .error {
        color: red;
        font-weight: bold;
        margin-bottom: 10px;
    }
</style>

<body>
    <h1>Form Nilai Ujian</h1>
    <form action="" method="post" id="nilaiForm">
        <label for="nim">NIM:</label>
        <input type="text" name="nim" id="nim" required>
        <br>
        <label for="mk">Pilih MK:</label>
        <select name="mk" id="mk" required>
            <option value="">-- Pilih Mata Kuliah --</option>
            <option value="Statistika">Statistika</option>
            <option value="Pemrograman Web">Pemrograman Web</option>
            <option value="Jaringan Komputer">Jaringan Komputer</option>
        </select>
        <br>
        <label for="nilai">Nilai:</label>
        <input type="number" name="nilai" id="nilai" min="0" max="100" required>
        <br><br>
        <button type="submit">Simpan</button>
    </form>
    <?php
    // Nilai minimum kelulusan
    $nilaiMinimumLulus = 60;

    // Handle form submission (if submitted)
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nim = $_POST['nim'];
        $mk = $_POST['mk'];
        $nilai = $_POST['nilai'];

        require_once "Validasi.php"; // Include Validasi class
        $validasi = new Validasi();

        // Validation logic
        if (!$validasi->validasiNim($nim)) {
            echo "<p style='color: red;'>NIM tidak valid!</p>";
        } elseif (!$validasi->validasiMk($mk)) {
            echo "<p style='color: red;'>Mata Kuliah tidak valid!</p>";
        } elseif (!$validasi->validasiNilai($nilai)) {
            echo "<p style='color: red;'>Nilai tidak valid!</p>";
        } else {
            // Calculate grade (if validation passes)
            $grade = $validasi->hitungGrade($nilai);

            // Display result
            echo "<h2>Hasil Ujian</h2>";
            echo "<p>NIM: $nim</p>";
            echo "<p>Nama Mata Kuliah: $mk</p>";
            echo "<p>Nilai: $nilai</p>";
            echo "<p>Hasil Ujian: $grade</p>";

            // Display kelulusan
            if ($nilai >= $nilaiMinimumLulus) {
                echo "<p>Kelulusan: Lulus</p>";
            } else {
                echo "<p>Kelulusan: Tidak Lulus</p>";
            }
        }
    }
    ?>
</body>

</html>