<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

    <?php $this->load->view("admin/_partials/navbar.php") ?>
    <div id="wrapper">

        <?php $this->load->view("admin/_partials/sidebar.php") ?>

        <div id="content-wrapper">

            <div class="container-fluid">

                <?php $this->load->view("admin/_partials/breadcrumb.php") ?>

                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?>

                <div class="card mb-3">
                    <div class="card-header">
                        <a href="<?php echo site_url('admin/student/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
                    </div>
                    <div class="card-body">

                        <form action="<?php echo site_url('admin/student/add') ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nama_mahasiswa">Nama Mahasiswa*</label>
                                <input class="form-control <?php echo form_error('nama_mahasiswa') ? 'is-invalid' : '' ?>" type="text" name="nama_mahasiswa" placeholder="Masukkan Nama Mahasiswa" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('nama_mahasiswa') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="NIM">Nomor Induk Mahasiswa*</label>
                                <input class="form-control <?php echo form_error('NIM') ? 'is-invalid' : '' ?>" type="number" name="NIM" min="0" placeholder="Masukkan Nomor Induk Mahasiswa" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('NIM') ?>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir*</label>
                                <input class="form-control <?php echo form_error('tanggal_lahir') ? 'is-invalid' : '' ?>" type="date" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('tanggal_lahir') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="jurusan">Jurusan*</label>
                                <input class="form-control <?php echo form_error('jurusan') ? 'is-invalid' : '' ?>" type="text" name="jurusan" placeholder="Masukkan Jurusan" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('Masukkan Jurusan') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat*</label>
                                <input class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" type="text" name="alamat" placeholder="Masukkan Alamat" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('alamat') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email*</label>
                                <input class="form-control <?php echo form_error('email') ? 'is-invalid' : '' ?>" type="email" name="email" placeholder="Masukkan Email" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('email') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="no_telepon">Nomor Telepon*</label>
                                <input class="form-control <?php echo form_error('no_telepon') ? 'is-invalid' : '' ?>" type="text" name="no_telepon" placeholder="Masukkan Nomor Telepon" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('no_telepon') ?>
                                </div>
                            </div>

                            <input class="btn btn-success" type="submit" name="btn" value="Save" />
                        </form>

                    </div>

                    <div class="card-footer small text-muted">
                        * required fields
                    </div>


                </div>
                <!-- /.container-fluid -->

                <!-- Sticky Footer -->
                <?php $this->load->view("admin/_partials/footer.php") ?>

            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /#wrapper -->


        <?php $this->load->view("admin/_partials/scrolltop.php") ?>

        <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>