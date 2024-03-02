<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-Qrn36XeA8pGgPMTO3sQVbI3QzGWkPBD54x" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Form Belanja</title>

    <style>
        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            font-weight: bold;
        }

        .custom-control-label {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1>Praktikum Mandiri Form Request POST</h1>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group row">
                <label for="text" class="col-sm-2 col-form-label">Customer:</label>
                <div class="col-sm-10">
                    <input id="text" name="text" placeholder="Nama Customer" type="text" required class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Pilih Produk:</label>
                <div class="col-sm-10">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="produk_0" name="produk" value="laptop" class="custom-control-input" required>
                        <label for="produk_0" class="custom-control-label">Laptop Rp. 5.000.000</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="produk_1" name="produk" value="monitor" class="custom-control-input" required>
                        <label for="produk_1" class="custom-control-label">Monitor Rp. 3.000.000</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="produk_2" name="produk" value="handphone" class="custom-control-input" required>
                        <label for="produk_2" class="custom-control-label">Handphone Rp. 2.000.000</label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="jumlah" class="col-sm-2 col-form-label">Jumlah Produk:</label>
                <div class="col-sm-10">
                    <input id="jumlah" name="jumlah" placeholder="Jumlah Produk" type="number" required class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>

        <div class="container mt-5">
            <h1>Hasil Form Request POST</h1>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $customer = htmlspecialchars($_POST["text"]);
                $produk = htmlspecialchars($_POST["produk"]);
                $jumlah = htmlspecialchars($_POST["jumlah"]);
            if ($customer && $produk && $jumlah) {
                $harga = 0;
                if ($produk == "laptop") {
                    $harga = 5000000;
                } elseif ($produk == "monitor") {
                    $harga = 3000000;
                } elseif ($produk == "handphone") {
                    $harga = 2000000;

                }
                
                $total_belanja = $harga * $jumlah;
            }
                echo "<p><strong>Customer:</strong> $customer</p>";
                echo "<p><strong>Produk:</strong> $produk</p>";
                echo "<p><strong>Jumlah Produk:</strong> $jumlah</p>";
                echo "<p><strong>Total Belanja:</strong> $total_belanja</p>";
            } else {
                echo "<p>Error: Form not submitted.</p>";
            }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>
