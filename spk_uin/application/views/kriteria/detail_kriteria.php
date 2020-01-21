<!DOCTYPE html>
    <html>
    <head>
      <title>ATKP Makassar - Detail Pegawai </title>

    </head>
    <body-->
    <!-- page content -->
               <div class="col-md-12 col-sm-12 col-xs-12">
            <h1>Detail Pegawai</h1>
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div> 
              </div>
            <div class="clearfix"></div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Pegawai ATKP Makassar</h2>
                  <div class="clearfix"></div>
                </div>

                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-3 mail_list_column">
                      
                    </div>

               <!-- CONTENT ANGGOTA -->
                      <div class="col-sm-9 mail_view">
                          <div class="col-md-4 text-right">
                                <table>
                                  <thead>
                                    <tr>
                                      <th>ID Pegawai </th>
                                      <th>&nbsp;</th>
                                      <th>: </th>
                                      <th><?php echo $pegawai['id_pegawai'] ?></th>
                                    </tr>
                                    <td>&nbsp;</td>
                                    <tr>
                                      <th>NIP </th>
                                      <td>&nbsp;</td>
                                      <th>: </th>
                                      <th><?php echo $pegawai['nip'] ?></th>
                                    </tr>
                                    <td>&nbsp;</td>
                                    <tr>
                                      <th>Nama Pegawai </th>
                                      <td>&nbsp;</td>
                                      <th>: </th>
                                      <th><?php echo $pegawai['nama_pegawai'] ?></th>
                                    </tr>
                                    <td>&nbsp;</td>
                                    <tr>
                                      <th>Pangkat </th>
                                      <td>&nbsp;</td>
                                      <th>: </th>
                                      <th><?php echo $pegawai['pangkat'] ?></th>
                                    </tr>
                                    <td>&nbsp;</td>
                                    <tr>
                                      <th>Jabatan </th>
                                      <td>&nbsp;</td>
                                      <th>: </th>
                                      <th><?php echo $pegawai['jabatan'] ?></th>
                                    </tr>
                                </thead>
                              </table>
                            </div>
                          </div>
                        </div>
    </html>