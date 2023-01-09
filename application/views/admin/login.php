<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LOGIN-SISKA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
       
                

        <!-- Sign In Start -->
        <div class="container-fluid">
        <div id="logout">
                    <?php if (isset($_GET['signout'])) { ?>
                        <div class="alert alert-success">
                            <small>Anda Berhasil Logout</small>
                        </div>
                    <?php } ?>
                
                
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i> SISKA</h3>
                            </a>
                            <h3>Login</h3>
                        </div>
                        
                        <form method="post" action="<?php echo base_url('index.php/admin/login/aksi_login'); ?>" id="formlogin">
                        <div class="form-floating mb-3">
                            <input name="user" class="form-control" placeholder="Masukkan Username" type="text" required="required" autocomplete="off">
                            <label for="floatingInput">Username</label>
                        </div>
                        <div class="form-floating mb-4">
                             <input name="pass" class="form-control" placeholder="Masukkan Password" type="password" required="required" autocomplete="off">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                           
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>

                        </form>

                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>
    <script>
            // notifikasi gagal di hide
            <?php if (empty($_GET['get'])) { ?>
                $("#notifikasi").hide();
            <?php } ?>
            var logingagal = function() {
                $("#logout").fadeOut('slow');
                $("#notifikasi").fadeOut('slow');
            };
            setTimeout(logingagal, 4000);
        </script>

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>

