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
                <?php $this->load->view("admin/_partials/breadcrumb.php")
                ?>
                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?>
                <div class="card mb-3">
                    <div class="card-header">
                        <a href="<?php echo site_url('admin/dosens/')
                                    ?>"><i class="fas fa-arrow-left"></i> Back</a>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo
                                        site_url('admin/dosens/add') ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="NIP">Nomor Induk Pegawai*</label>
                                    <input class="form-control <?php echo form_error('NIP') ? 'is-invalid' : '' ?>" type="text" name="NIP" placeholder="Masukkan Nomor Induk Pegawai" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('NIP') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama Dosen*</label>
                                    <input class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" type="text" name="nama" placeholder="Masukkan Nama Dosen" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('nama') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="matkul">Mata Kuliah*</label>
                                    <input class="form-control <?php echo form_error('matkul') ? 'is-invalid' : '' ?>" type="text" name="matkul" placeholder="Masukkan Mata Kuliah" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('matkul') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat*</label>
                                    <input class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" type="text" name="alamat" placeholder="Masukkan Alamat" />
                                <div class="invalid-feedback">
                                    <?php echo
                                    form_error('alamat') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="no_hp">Nomor HP*</label>
                                    <input class="form-control <?php echo form_error('no_hp') ? 'is-invalid' : '' ?>" type="text" name="no_hp" placeholder="Masukkan Nomor HP" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('no_hp') ?>
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