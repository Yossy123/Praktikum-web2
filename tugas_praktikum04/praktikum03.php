<?php
require_once 'header.php';
require_once 'sidebar.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jeniskelamin = $_POST['jenis_kelamin'];
$prodi = $_POST['prodi'];
$keahlian = $_POST['keahlian'];
$domisili = $_POST['domisili'];
$email = $_POST['email'];
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tugas Praktikum</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Praktikum03</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <title>Form Praktikum 03</title>

                            <body>
                                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
                                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

                                <form action="praktikum03.php" method="post">
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
                                    <h1>Terimakasih sudah mendaftar di IT Club Data Science</h1>
                                    <h5>Nama Lengkap: <?php echo $nama ?></h5>
                                    <h5>NIM: <?php echo $nim ?></h5>
                                    <h5>Jenis Kelamin: <?php echo $jeniskelamin ?></h5>
                                    <h5>Prodi: <?php echo $prodi ?></h5>
                                    <h5>Keahlian: <?php echo $keahlian ?></h5>
                                    <h5>Domisili: <?php echo $domisili ?></h5>
                                    <h5>Email: <?php echo $email ?></h5>

                                </form>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    Footer
                                </div>
                                <!-- /.card-footer-->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>