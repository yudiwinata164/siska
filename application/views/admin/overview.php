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
            <div class="breadcrumb mb-3">
				<marquee behavior="alternate" direction="left">
                    <h6>Selamat Datang di Sistem Informasi Akademik</h6>
                </marquee>
			</div>
                <!--
 karena ini halaman overview (home), kita matikan partial breadcrumb.
 Jika anda ingin mengampilkan breadcrumb di halaman overview,
 silahkan hilangkan komentar (//) di tag PHP di bawah.
 -->
                <?php //$this->load->view("admin/_partials/breadcrumb.php") 
                ?>
                <!-- Icon Cards-->
                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-user"></i>
                                </div>
                                <div class="mr-5">Mahasiswa</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('admin/student') ?>"><span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-warning o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-user"></i>
                                </div>
                                <div class="mr-5">Dosen</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('admin/dosens') ?>"><span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-success o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-building"></i>
                                </div>
                                <div class="mr-5">Kelas</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('admin/kelas') ?>"><span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-danger o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-book"></i>
                                </div>
                                <div class="mr-5">Matakuliah</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('admin/matakuliah') ?>"><span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-info o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-table"></i>
                                </div>
                                <div class="mr-5">Jadwal Kuliah</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('admin/jadwal') ?>"><span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-secondary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-graduation-cap"></i>
                                </div>
                                <div class="mr-5">Jurusan</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('admin/jurusans') ?>"><span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
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
    <?php $this->load->view("admin/_partials/modal.php") ?>
    <?php $this->load->view("admin/_partials/js.php") ?>
</body>

</html>