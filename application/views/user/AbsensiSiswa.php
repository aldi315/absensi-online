<!doctype html>
<html lang="en">
 
<?php $this->load->view('user/partials/head'); ?>
<title>Dashboard Siswa</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <?php $this->load->view('user/partials/navbar'); ?>
        <?php $this->load->view('user/partials/leftsidebar'); ?>
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
                                <h2 class="pageheader-title"><?= PT_NAME; ?> </h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="AbsensiSiswa" class="breadcrumb-link">Absensi Siswa</a></li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <?php $this->load->view('user/layouts/MenuAbsensiSiswa'); ?>
            
                <?php $this->load->view('user/partials/footer'); ?>
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <?php $this->load->view('user/partials/bottom'); ?>
    <script>
     $(document).ready(function() {  
        $('#data_karyawan').DataTable( {  
            dom: 'Bfrtip',  
            buttons: [  
            'copy', 'csv', 'excel', 'pdf', 'print'  
            ]  
        }); 
        $('#adata_karyawan').DataTable( {  
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