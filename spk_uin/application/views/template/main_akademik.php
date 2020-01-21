<!DOCTYPE html>
<html lang="en">
  <head>
   <?php $this->load->view('template/akademik/head');?>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-graduation-cap"></i> <span>Lulusan UINAM</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
           <?php $this->load->view ('template/akademik/sidebar'); ?>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
         <?php $this->load->view ('template/akademik/navigation'); ?>
        <!-- /top navigation -->

        <!-- page content -->
        <?=$contents?>
        <!-- /page content -->

        <!-- footer content -->
        <?php $this->load->view ('template/akademik/footer'); ?>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
        <?php $this->load->view ('template/akademik/js'); ?> 
  
  </body>
</html>
