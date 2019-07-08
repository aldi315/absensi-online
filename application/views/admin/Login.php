<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= SITE_NAME; ?> - Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="<?= base_url(); ?>assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/libs/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <meta name="description" content="Management Karyawan" />
	<meta name="keywords" content="management, karyawan, karyawan management, management karyawan, kantor management" />
	<meta name="author" content="Fansa" />
	<link rel="icon" href="https://cdn2.iconfinder.com/data/icons/science-set-3/512/5-512.png" type="image/gif">
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "3072e41e-338e-4844-a476-ba659df392d9",
    });
  });
</script>
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #00bcd45c;
    }
    </style>
</head>

<body>
    
        
      <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
        
    <div class="splash-container">
        <h2 class="text-center"><font color="white" style="font:50px/35px 'Bebas Neue', 'Arial Narrow', arial, sans-serif;">SMK PELITA CIAMPEA</font></h2>
        <div class="card">
            <div class="card-header text-center"><a class="navbar-brand" href="#" ><?= SITE_NAME ?></a><span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body">
                <form method="POST" action="<?= base_url(); ?>auth/loginKaryawan">
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="nik" type="number" placeholder="NIS" autocomplete="off" autofocus="">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="password" type="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
  
                       
                        <!-- ============================================================== -->
                        <!-- end content  -->
                        <!-- ============================================================== -->
                    </div>
                </div>
  
    <!-- Optional JavaScript -->
    <?php $this->load->view('admin/partials/bottom'); ?>
    <script>
    <?= $this->session->flashdata('messageAlert'); ?>
    </script>
</body>
 
</html>