<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
      </div>
    </div>
  </div>
<!-- page content -->

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Data Mahasiswa</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form method="post" action="<?php echo base_url('Akademik/Mahasiswa/aksi_edit_mahasiswa');?>" class="form-horizontal form-label-left" enctype="multipart/form-data" novalidate>

                      <div class="item form-group">
                        <!-- <label class="control-label col-md-3 col-sm-3 col-xs-12">ID Mahasiswa<span class="required">*</span>
                        </label> -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="id_mhs" required="required" value="<?php echo $mahasiswa['id_mhs']?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">NIM<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nim" required="required" type="text" value="<?php echo $mahasiswa['nim']?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Mahasiswa<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="nama_mhs" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $mahasiswa['nama_mhs']?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Fakultas<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control col-md-7 col-xs-12" name="fak" id="fak">
                            <option value="0">-- Pilih Fakultas --</option>
                            <?php 
                              $con = mysqli_connect('localhost', 'root', '', 'spk_uin');
                              $sql = mysqli_query($con, "SELECT * FROM fakultas");
                              foreach ($sql as $s) {
                              
                             ?>
                            <option value="<?php echo $s['id_fak'];?>"><?php echo $s['nama_fak'];?></option>

                            <?php } ?>
                          </select>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jurusan<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control col-md-7 col-xs-12" name="jur" id="jur">
                            <option value="0">-- Pilih Jurusan --</option>
                           
                           
                          </select>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin<span class="required">*</span></label>
                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">
                            <input type="radio" name="jk"
                              <?php if (isset($jk) && $jk=="Laki-laki") echo "checked";?>
                              value="Laki-laki">Laki-laki
                            <input type="radio" name="jk"
                              <?php if (isset($jk) && $jk=="Perempuan") echo "checked";?>
                              value="Perempuan">Perempuan
                          </label>
                        </div>
                      </div>
                      <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Lahir<span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="tempat_lahir" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $mahasiswa['tempat_lahir']?>">
                          </div>
                        </div>
                      <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir<span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="date" name="tgl_lahir" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $mahasiswa['tgl_lahir']?>">
                          </div>
                        </div>
                      <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Alamat <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea id="textarea" required="required" name="alamat" class="form-control col-md-7 col-xs-12" value="<?php echo $mahasiswa['alamat']?>"></textarea>
                          </div>
                        </div>
                      <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Terdaftar<span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="date" name="tgl_terdaftar" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $mahasiswa['tgl_terdaftar']?>">
                          </div>
                        </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button id="send" type="submit" name="simpan" class="btn btn-success" value="simpan">Simpan</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
   </div>

   <script src="<?=base_url('assets/js/jquery.min.js')?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#fak').change(function(){
            var id=$('#fak').val();
            $.ajax({
                url : "<?php echo base_url();?>Akademik/Mahasiswa/get_jurusan",
                method : "POST",
                data : {id: id},
                async : false,
                dataType : 'json',
                success: function(data){
                    var html;
                    var i;
                    html = "'<option>-- Pilih Jurusan --</option>'"
                    for(i=0; i<data.length; i++){

                        html += '<option value="'+data[i].id_jur+'">'+data[i].nama_jur+'</option>';
                    }
                    $('#jur').html(html);
                     
                }
            });
        });
    });
</script>