<div class="right_col" role="main">
  <div class="col-md-12 col-sm-12 col-xs-12">
  <div class="page-title">
    <div class="title_left">
      <h2>Data Kriteria</h2>
    </div>
  </div>
</div>
    <!-- page content -->
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <a href="<?php
                echo base_url('admin/kriteria/tambah_kriteria');?>" button type="submit" class="btn btn-success">Tambah Kriteria</button>
            </a>

            <form method="post" action="<?php echo base_url().'Admin/Subkriteria/aksi_tambah_subkriteria';?>" class="form-horizontal form-label-left" enctype="multipart/form-data" novalidate>
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button">Go!</button>
                </span>
              </div>
            </div> 
            <div class="item form-group">
              <!-- <label class="control-label col-md-3 col-sm-3 col-xs-12">ID <span class="required">*</span>
              </label> -->
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="hidden" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="id_kriteria" required="required" value="">
              </div>
            </div>
            </form>
            <div class="clearfix"></div>
          </div>
            <div class="x_content">
              <p>Daftar Kriteria Lulusan UIN Alauddin Makassar</p>
              <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover jambo_table bulk_action js-basic-example dataTable">
                  <thead>
                    <tr class="headings">
                      <th class="column-title">No. </th>
                      <th class="column-title">Nama Kriteria </th>
                     
                      <th class="column-title">Aksi</th>
                      <th class="bulk-actions" colspan="7">
                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a></th>
                    </tr>
                  </thead>
                    <tbody>
                      <?php
                        $no=1;
                        foreach ($kriteria as $index) {
                          ?>
                          <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $index->nama_kriteria; ?></td>
                            <form method="post" action="<?php echo base_url('admin/subkriteria/tampil_subkriteria_by_id/'.$index->id_kriteria) ?>">
                            <td hidden="hidden"><input type="text" name="id" value="<?php echo $index->id_kriteria; ?>"></td>
                            <td>
                              <input type="submit" class="btn btn-info btn-xs" value="Parameter">
                            </form>
                              <a href="<?php echo base_url('admin/kriteria/edit_kriteria/'.$index->id_kriteria) ?>"><button><i class="fa fa-pencil-square"></i></button><a>
                              <a href="<?php echo base_url('admin/kriteria/hapus_kriteria/'.$index->id_kriteria) ?>"><button><i class="fa fa-trash"></i></button></a>
                             
                            </td>
                          
                          <tr>

                        <?php
                        $no++;
                        }
                        ?>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>

<script type="text/javascript">
 function time() {
     $("#message").fadeOut();
 }
  setInterval(time,3000);
  
 function hapus(id_kriteria){
    swal({
            title: "Anda yakin??",
            text: "Data yang di hapus tidak akan kembali!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: '#DD6B55',
            confirmButtonText: 'Ya !',
            cancelButtonText: "Batal !",
            closeOnConfirm: false,
            closeOnCancel: false
        }).then((result)=>{
            if(result.value){
                $.ajax({
                url:  "<?php echo base_url('Admin/Kriteria/hapus') ?>",
                type: "post",
                data: {
                    id_kriteria:id_kriteria
                },
                success:function(){
                    swal("Berhasil!", "Data telah dihapus !", "success").
                        then((value)=>{
                            if(value){
                                location.reload();
                            }else{

                            }
                        });

                  //  location.reload();
                },error:function(){
                    alert('Gagal Menghapus Data');
                }
            });
            }else{

            }
        });
    }
  </script>