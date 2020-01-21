<div class="right_col" role="main">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="page-title">
      <div class="title_left">
        <h2>Penilaian Lulusan Terbaik Tingkat Fakultas</h2>
        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control col-md-7 col-xs-12" name="fak" id="fak">
                            <option value="0">-- Pilih Fakultas --</option>
                            <?php
                              foreach ($fakultas as $k => $v) {
                                echo "<option value='".$v->id_fak."'>".$v->nama_fak."</option>";
                              }
                            ?>
                          </select>
                        </div>

                        <!-- <a href="<?php
                      echo base_url('Akademik/Penilaian/hitung');?>" button type="submit" class="btn btn-success"> Cetak Laporan</button></a> -->
      </div>
    </div>
  </div>
    <!-- page content -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_title">
                  <div class="clearfix"></div>
                </div>
                  <div class="x_content">
                    <p>Daftar Lulusan Terbaik</p>
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped table-hover jambo_table bulk_action js-basic-example dataTable">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">No. </th>
                            <th class="column-title">NIM </th>
                            <th class="column-title">Nama Mahasiswa </th>
                            <th class="column-title">Fakultas</th>
                            <th class="column-title">Jurusan</th>
                            <th class="column-title">Nilai Akhir</th>
                            <th class="column-title">Status</th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a></th>
                          </tr>
                        </thead>
                        <tbody id='hasil'>
                          
                        </tbody>
                      </table>
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
                url : "<?php echo base_url();?>Akademik/Penilaian/get_hasil",
                method : "POST",
                data : {id_fak: id},
                async : false,
                dataType : 'json',
                success: function(data){
                    var html="";
                    var i;
                    var status="Cumlaude";
                    if (data.length<1) {
                      html+='Data Tidak Ada';
                    }
                    for(i=0; i<data.length; i++){
                        var no= i+1;
                        html += '<tr> <td>'+no+'</td><td>'+data[i].nama_mhs+'</td><td>'+data[i].nim+'</td><td>'+data[i].nama_fak+'</td><td>'+data[i].nama_jur+'</td><td>'+data[i].total+'</td><td>'+status+'</td></tr>';
                        status="Sangat Memuaskan";
                        
                    }
                    
                    $('#hasil').html(html);
                     
                }
            });
        });
    });
</script>              