<div class="right_col" role="main">
  <div class="">
  <div class="page-title">
    <div class="title_left">
      <h2>Data Subkriteria</h2>
    </div>
  </div>
  </div>
<!-- page content -->
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <div class="clearfix"></div>
          </div>
            <div class="x_content">
              <p>Daftar Subkriteria Lulusan UIN Alauddin Makassar</p>
              <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover jambo_table bulk_action js-basic-example dataTable">
                  <thead>
                    <tr class="headings">
                      <th class="column-title">No. </th>
                      <th class="column-title">Nama Subkriteria </th>
                      <th class="column-title">Nilai </th>
                      <th class="column-title">Aksi</th>
                      <th class="bulk-actions" colspan="7">
                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a></th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                        $no=1;
                        foreach ($subkriteria as $index) {
                          
                          echo "<tr>
                            <td>$no</td>
                            <td>$index->nama_subkriteria</td>
                            <td>$index->nilai</td>
                            <td>
                              <a href=".base_url('admin/subkriteria/edit_subkriteria/'.$index->id_subkriteria)."><button><i class=\"fa fa-pencil-square\"></i></button><a>
                              <a href=".base_url('admin/subkriteria/hapus_subkriteria/'.$index->id_subkriteria)."><button><i class=\"fa fa-trash\"></i></button></a>
                              
                            </td>
                          <tr>";
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
