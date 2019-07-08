<!doctype html>
<html lang="en">
 
<?php $this->load->view('admin/partials/head'); ?>
<title><?= SITE_NAME; ?> - Tambah Siswa</title>
<style type="text/css">
    .container {
    display: block;
    position: relative;
    padding-left: 25px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 15px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 18px;
    width: 18px;
    background-color: #eee;
    border-radius: 50%;
}

.container:hover input ~ .checkmark {
    background-color: #ccc;
}

.container input:checked ~ .checkmark {
    background-color: #2196F3;
}

.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

.container input:checked ~ .checkmark:after {
    display: block;
}

.container .checkmark:after {
     top: 5px;
    left: 5px;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: white;
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
                                <h2 class="pageheader-title">Tambah Siswa</h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item" aria-current="page"><a href="<?=base_url().'siswa'?>" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Tambah Siswa</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <?php $this->load->view('admin/layouts/MenuTambahKaryawan'); ?>

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
    <?= $this->session->flashdata('messageAlert'); ?>
    </script>
</body>
 
</html>