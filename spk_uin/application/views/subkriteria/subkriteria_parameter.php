<div class="right_col" role="main">
  <div class="">
  <div class="page-title">
    <div class="title_left">
    </div>
  </div>
</div>
      <!-- page content -->
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
 
         
          <form method="post" action="<?php echo base_url('admin/subkriteria/tambah_subkriteria'); ?>" class="form-horizontal form-label-left" enctype="multipart/form-data" novalidate>
             <div class="item form-group">
              <div>
                <button type="submit" class="btn btn-success">Tambah Subkriteria</button>
                 
                  <input type="hidden" name="id_kriteria" class="form-control" value="<?php echo $_POST['id'] ?>">
                
              </div> 
            </div>
          </form>
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
              <p>Data Subkriteria</p>
              <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover jambo_table bulk_action js-basic-example dataTable">
                  <thead>
                    <tr class="headings">
                      <th class="column-title">No. </th>
                      <th class="column-title">Nama Subkriteria </th>
                      <th class="column-title">Nilai </th>
                      <th class="column-title">Aksi</th>
                      <th class="bulk-actions" colspan="7">
                        
                    </tr>
                  </thead>
                    <tbody>
                       <?php
                       $no=1; 
                       foreach ($record as $r)
                       { ?>
                        <tr>
                          <td>
                              <?php echo $no++ ?>
                          </td>
                          <td>
                            <?php echo $r->id_kriteria.' - '.$r->nama_kriteria.' - '.$r->nama_subkriteria ; ?>
                          </td>
                          <td>
                            <?php echo $r->nilai ; ?>
                          </td>
                          <td>
                            <a href="<?php echo base_url('admin/subkriteria/edit_subkriteria/'.$r->id_subkriteria);?>"><button><i class="fa fa-pencil-square"></i></button><a>
                             <a href="<?php echo base_url('admin/subkriteria/hapus_subkriteria/'.$r->id_subkriteria);?>"><button><i class="fa fa-trash"></i></button><a>
                          </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>  
          </div>
        </div>
      </div>
    </div>