<div class="right_col" role="main">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="page-title">
      <div class="title_left">
        <h2>Data Pendaftar Wisuda</h2>
      </div>
    </div>
  </div>
    <!-- page content -->
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <a href="<?php
                      echo base_url('akademik/mahasiswa/tambah_mahasiswa');?>" button type="submit" class="btn btn-success"> Tambah Pendaftar </button></a>
                  </small></td>
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
                    <p>Daftar Pendaftar Wisuda UIN Alauddin Makassar</p>
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped table-hover jambo_table bulk_action js-basic-example dataTable">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">No. </th>
                            <th class="column-title">NIM </th>
                            <th class="column-title">Nama Mahasiswa </th>
                            <th class="column-title">Fakultas</th>
                            <th class="column-title">Jurusan</th>
                            <th class="column-title">Jenis Kelamin</th>
                            <th class="column-title">Tanggal Daftar</th>
                            <th class="column-title">Aksi</th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a></th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            $no=1;
                            foreach ($mahasiswa as $index) {
                              
                              echo "<tr>
                                <td>$no</td>
                                <td>$index->nim</td>
                                <td>$index->nama_mhs</td>
                                <td>$index->fak</td>
                                <td>$index->jur</td>
                                <td>$index->jk</td>
                                <td>$index->tgl</td>
                                <td>
                                  <a href=".base_url('akademik/mahasiswa/detail_mahasiswa/'.$index->id_mhs)."><button type=\"button\" class=\"btn btn-info btn-xs\"> Detail </button><a>
                                  <a href=".base_url('akademik/mahasiswa/edit_mahasiswa/'.$index->id_mhs)."><button><i class=\"fa fa-pencil-square\"></i></button><a>
                                  <a href=".base_url('akademik/mahasiswa/hapus_mahasiswa/'.$index->id_mhs)."><button><i class=\"fa fa-trash\"></i></button></a>
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