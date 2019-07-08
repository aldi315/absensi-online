<!doctype html>
<html lang="en">
 
<?php $this->load->view('admin/partials/head'); ?>
<title><?= SITE_NAME; ?> - Dashboard</title>
<style>
      #isi_chat{height:300px;}
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
                                <h2 class="pageheader-title">Dashboard</h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <?php $this->load->view('admin/layouts/MenuDashboard'); ?>
                    
            
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
        $(document).ready(function(){
         
        function tampildata(){
           $.ajax({
            type:"POST",
            url:"<?=site_url('siswa/ambil_pesan');?>",    
            success: function(data){                 
                     $('#isi_chat').html(data);
                     
            }  
           });
        }
   
   
         $('#kirim').click(function(){
           var pesan = $('#pesan').val(); 
           var user = $('#user').val(); 
           if (pesan) {
               $.ajax({
                type:"POST",
                url:"<?=site_url('siswa/kirim_chat');?>",    
                data: 'pesan=' + pesan + '&user=' + user,        
                success: function(data){                 
                  $('#isi_chat').html(data);
                  $('#pesan').val(''); 
                }  
               });
           }
           
          });
           
           
          setInterval(function(){
                     tampildata();},1000);
        });
    </script>
    <script>
    <?= $this->session->flashdata('messageAlert'); ?>
    </script>
</body>
 
</html>