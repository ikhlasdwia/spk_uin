<!DOCTYPE html>
    <html>
    <head>
      <title>Periode Lulusan UIN Alauddin Makassar</title>

    </head>
    <body-->
    <!-- page content -->
          <div class="col-md-12 col-sm-12 col-xs-12">
            <h1>Detail Lulusan Periode <?php echo $periode['nama_periode'] ?></h1>
          </div>
            <div class="clearfix"></div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Pilih Fakultas untuk melihat daftar lulusan</h2>

                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div> 

                  <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-0 mail_list_column">
                      
                    </div>

               <!-- CONTENT -->
                  
                  <?php
                    //foreach ($periode as $index) {
                      echo "
                    
                    <div class='col-sm-5 invoice-col'>
                      <br>
                      <a href=".base_url('periode/detail_periode/'.$periode['id_periode']).">
                      <button type='button' class='btn btn-default btn-lg'>Fakultas Syariah dan Hukum</button></a>
                    </div>
                    <div class='col-sm-5 invoice-col'>
                      <br>
                      <a href=".base_url('periode/detail_periode/'.$periode['id_periode']).">
                      <button type='button' class='btn btn-default btn-lg'>Fakultas Ekonomi dan Bisnis Islam</button></a>
                    </div>
                    <div class='col-sm-5 invoice-col'>
                      <br>
                      <a href=".base_url('periode/detail_periode/'.$periode['id_periode']).">
                      <button type='button' class='btn btn-default btn-lg'>Fakultas Tarbiah dan Keguruan</button></a>
                    </div>
                    <div class='col-sm-5 invoice-col'>
                      <br>
                      <a href=".base_url('periode/detail_periode/'.$periode['id_periode']).">
                      <button type='button' class='btn btn-default btn-lg'>Fakultas Ushuluddin dan Filsafat</button></a>
                    </div>
                    <div class='col-sm-5 invoice-col'>
                      <br>
                      <a href=".base_url('periode/detail_periode/'.$periode['id_periode']).">
                      <button type='button' class='btn btn-default btn-lg'>Fakultas Dakwah dan Komunikasi</button></a>
                    </div>
                    <div class='col-sm-5 invoice-col'>
                      <br>
                      <a href=".base_url('periode/detail_periode/'.$periode['id_periode']).">
                      <button type='button' class='btn btn-default btn-lg'>Fakultas Adab dan Humaniora</button></a>
                    </div>
                    <div class='col-sm-5 invoice-col'>
                      <br>
                      <a href=".base_url('periode/detail_periode/'.$periode['id_periode']).">
                      <button type='button' class='btn btn-default btn-lg'>Fakultas Sains dan Teknologi</button></a>
                    </div>
                    <div class='col-sm-5 invoice-col'>
                      <br>
                      <a href=".base_url('periode/detail_periode/'.$periode['id_periode']).">
                      <button type='button' class='btn btn-default btn-lg'>Fakultas Kedokteran dan Ilmu Kesehatan</button></a>
                    </div>
                    ";
                    //}
                    ?>

                    
                      <div class="">
                        <div class="">
                      </div>   
                    </div>
                  </div>
    </body>
    </html>