<!doctype html>
<html lang="en">
 
<?php $this->load->view('admin/partials/head'); ?>
<title><?= SITE_NAME; ?> - Absensi</title>
<style type="text/css">
    .overlay:target {
    width: auto;
    height: auto;
    bottom: 0;
    right: 0;
    background: rgba(0,0,0,0.7);
}

.overlay {
    width: 0;
    height: 0;
    overflow: hidden;
    position: fixed;
    top: 0;
    left: 0;
    background: rgba(0,0,0,0);
    z-index: 9999;
    transition: .8s;
    text-align: center;
    padding: 100px 0;
    0 */: ;
}
.overlay .close {
   position: absolute;
   top: 50px;
   left: 50%;
   margin-left: -20px;
   color: white;
   text-decoration: none;
   background-color: black;
   border: 1px solid white;
   line-height: 14px;
   padding: 5px;
   opacity: 1;
}

.overlay:target .close {
    animation: slideDownFade .5s .5s forwards;
}
</style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <?php $this->load->view('admin/partials/navbar'); ?>
        <?php $this->load->view('admin/partials/leftsidebar'); ?>
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Absensi Siswa</h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item" aria-current="page"><a href="<?=base_url().'karyawan'?>" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Absensi Siswa</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <?php $this->load->view('admin/layouts/MenuFullAbsensiKaryawan'); ?>

                    

            <?php $this->load->view('admin/partials/footer'); ?>
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <?php $this->load->view('admin/partials/bottom'); ?>
    <script>
     $(document).ready(function() {  
        $('#data_karyawan').DataTable( {  
            dom: 'Bfrtip',  
            buttons: [  
            'copy', 'csv', 'excel', 'pdf', 'print'  
            ]  
        }); 
    });
    </script>
    <script>
    <?= $this->session->flashdata('messageAlert'); ?>
    </script>
</body>
 
</html>