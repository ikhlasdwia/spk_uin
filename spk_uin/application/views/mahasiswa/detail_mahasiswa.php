<div class="right_col" role="main">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="page-title">
      <div class="title_left">
        <h2>Detail Pendaftar Wisuda</h2>
      </div>
    </div>
  </div>
<!-- page content -->
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="clearfix">
    </div>
  
    <div class="x_content">

    <!-- CONTENT MAHASISWA -->
      <div class="col-sm-9 mail_view">
        <div class="col-md-4 text-right">
            <table>
              <thead>
                <tr>
                  <th>NIM </th>
                  <td>&nbsp;</td>
                  <th>: </th>
                  <td>&nbsp;</td>
                  <th><?php echo $mahasiswa['nim'] ?></th>
                </tr>
                <td>&nbsp;</td>
                <tr>
                  <th>Nama Mahasiswa</th>
                  <td>&nbsp;</td>
                  <th>: </th>
                  <td>&nbsp;</td>
                  <th><?php echo $mahasiswa['nama_mhs'] ?></th>
                </tr>
                <td>&nbsp;</td>
                <tr>
                  <th>Fakultas </th>
                  <td>&nbsp;</td>
                  <th>: </th>
                  <td>&nbsp;</td>
                  <th><?php echo $mahasiswa['id_fak'] ?></th>
                </tr>
                <td>&nbsp;</td>
                <tr>
                  <th>Jurusan </th>
                  <td>&nbsp;</td>
                  <th>: </th>
                  <td>&nbsp;</td>
                  <th><?php echo $mahasiswa['id_jur'] ?></th>
                </tr>
                <td>&nbsp;</td>
                <tr>
                  <th>Jenis Kelamin </th>
                  <td>&nbsp;</td>
                  <th>: </th>
                  <td>&nbsp;</td>
                  <th><?php echo $mahasiswa['jk'] ?></th>
                </tr>
                <td>&nbsp;</td>
                <tr>
                  <th>Tempat Lahir </th>
                  <td>&nbsp;</td>
                  <th>: </th>
                  <td>&nbsp;</td>
                  <th><?php echo $mahasiswa['tempat_lahir'] ?></th>
                </tr>
                <td>&nbsp;</td>
                <tr>
                  <th>Tanggal Lahir </th>
                  <td>&nbsp;</td>
                  <th>: </th>
                  <td>&nbsp;</td>
                  <th><?php echo $mahasiswa['tgl_lahir'] ?></th>
                </tr>
                <td>&nbsp;</td>
                <tr>
                  <th>Alamat </th>
                  <td>&nbsp;</td>
                  <th>: </th>
                  <td>&nbsp;</td>
                  <th><?php echo $mahasiswa['alamat'] ?></th>
                </tr>
                <td>&nbsp;</td>
                <tr>
                  <th>Tanggal Terdaftar </th>
                  <td>&nbsp;</td>
                  <th>: </th>
                  <td>&nbsp;</td>
                  <th><?php echo $mahasiswa['tgl_terdaftar'] ?></th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>