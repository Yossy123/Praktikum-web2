@include('admin.header')
@include('layouts.sidebar')

<div class="container-fluid px-4">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Dashboard Pegawai</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Admin Pegawai Card -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Manager</h3>
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
                    <div class="row">
                        <div class="col-md-5">
                            <img src="{{ asset('assets/img/user2-160x160.jpg') }}" alt="Admin Avatar" class="img-fluid rounded-circle img-thumbnail">
                        </div>

                        <div class="col-md-10">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th scope="row">Nama</th>
                                        <td>Yossy Indra Kusuma</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Jabatan</th>
                                        <td>Manager</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Email</th>
                                        <td>Yossykusuma01@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Alamat</th>
                                        <td>PERUM TAMAN BOJONG LESTARI</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nomor Telepon</th>
                                        <td>0851-7410-3353</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card -->

        
            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

@include('pegawai.footer')