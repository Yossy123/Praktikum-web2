<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Form Praktikum 03</title>
</head>
<style>
    /* Custom CSS */

body {
    padding: 20px;
}

.form-group {
    margin-bottom: 20px;
}

.input-group-text,
.custom-control-label {
    background-color: white;
    color: black;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}

/* Optional: Style the checkboxes and radio buttons */
.custom-control-input:checked ~ .custom-control-label::before {
    background-color: #007bff;
    border-color: #007bff;
}

.custom-checkbox .custom-control-label::before,
.custom-radio .custom-control-label::before {
    border-color: #007bff;
}

</style>
<body>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <form action="process_form.php" method="POST">
        <div class="form-group row">
            <label for="nim" class="col-4 col-form-label">NIM</label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-address-card-o"></i>
                        </div>
                    </div>
                    <input id="nim" name="nim" type="text" required="required" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-address-book"></i>
                        </div>
                    </div>
                    <input id="nama" name="nama" type="text" required="required" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Jenis Kelamin</label>
            <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" required="required" class="custom-control-input" value="L">
                    <label for="jenis_kelamin_0" class="custom-control-label">Laki-laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" required="required" class="custom-control-input" value="P">
                    <label for="jenis_kelamin_1" class="custom-control-label">Perempuan</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="prodi" class="col-4 col-form-label">Program Studi</label>
            <div class="col-8">
                <select id="prodi" name="prodi" required="required" class="custom-select">
                    <option value="TI">Teknik Informatika</option>
                    <option value="SI">Sistem Informasi</option>
                    <option value="BD">Bisnis Digital</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4 col-form-label">Skill Web Programming</label>
            <div class="col-8">
                <div class="custom-controls-stacked">
                    <div class="custom-control custom-checkbox">
                        <input name="keahlian" id="checkbox_0" type="checkbox" class="custom-control-input" value="html">
                        <label for="checkbox_0" class="custom-control-label">HTML</label>
                    </div>
                </div>
                <div class="custom-controls-stacked">
                    <div class="custom-control custom-checkbox">
                        <input name="keahlian" id="keahlian_1" type="checkbox" class="custom-control-input" value="css">
                        <label for="keahlian_1" class="custom-control-label">CSS</label>
                    </div>
                </div>
                <div class="custom-controls-stacked">
                    <div class="custom-control custom-checkbox">
                        <input name="keahlian" id="keahlian_2" type="checkbox" class="custom-control-input" value="js">
                        <label for="keahlian_2" class="custom-control-label">Java Script</label>
                    </div>
                </div>
                <div class="custom-controls-stacked">
                    <div class="custom-control custom-checkbox">
                        <input name="keahlian" id="keahlian_3" type="checkbox" class="custom-control-input" value="rwdb">
                        <label for="keahlian_3" class="custom-control-label">RWD Bootstrap</label>
                    </div>
                </div>
                <div class="custom-controls-stacked">
                    <div class="custom-control custom-checkbox">
                        <input name="keahlian" id="keahlian_4" type="checkbox" class="custom-control-input" value="php">
                        <label for="keahlian_4" class="custom-control-label">PHP</label>
                    </div>
                </div>
                <div class="custom-controls-stacked">
                    <div class="custom-control custom-checkbox">
                        <input name="keahlian" id="keahlian_5" type="checkbox" class="custom-control-input" value="py">
                        <label for="keahlian_5" class="custom-control-label">Python</label>
                    </div>
                </div>
                <div class="custom-controls-stacked">
                    <div class="custom-control custom-checkbox">
                        <input name="keahlian" id="keahlian_6" type="checkbox" class="custom-control-input" value="java">
                        <label for="keahlian_6" class="custom-control-label">Java</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="domisili" class="col-4 col-form-label">Tempat Domisili</label>
            <div class="col-8">
                <select id="domisili" name="domisili" required="required" class="custom-select">
                    <option value="jakarta">Jakarta</option>
                    <option value="depok">Depok</option>
                    <option value="bogor">Bogor</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-4 col-form-label">Email</label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                    </div>
                    <input id="email" name="email" type="text" class="form-control" required="required">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
