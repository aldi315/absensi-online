<!doctype html>
<html lang="en">
 
<?php $this->load->view('user/partials/head'); ?>
<title><?= SITE_NAME; ?> - Teras</title>
<style>
      #isi_chat{height:300px;}
    </style>
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
                                <h2 class="pageheader-title">Management Siswa</h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="<?=base_url().'user'?>" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Teras</li>
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
                    <?php $this->load->view('admin/layouts/MenuOrganisasi'); ?>
                    <?php $this->load->view('admin/layouts/MenuJadwalPiket'); ?>
                    
            
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
        $(document).ready(function(){
         
        function tampildata(){
           $.ajax({
            type:"POST",
            url:"<?=site_url('user/ambil_pesan');?>",    
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
                url:"<?=site_url('user/kirim_chat');?>",    
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
</body>
 
</html>