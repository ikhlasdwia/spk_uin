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

                    <form method="post" action="<?php echo base_url('Akademik/Mahasiswa/aksi_edit_penilaian');?>" class="form-horizontal form-label-left" enctype="multipart/form-data" novalidate>

                    <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">NIM<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="nim" name="nim" required="required" value="<?php echo $penilaian['nim']?>" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Mahasiswa<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="nama_mhs" name="nama_mhs" value="<?php echo $penilaian['nama_mhs']?>" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Id Mahasiswa<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="id_m" name="id_m" value="<?php echo $penilaian['id_mhs']?>" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div hidden class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">ID Fakultas<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="idFak" id="idFak" required="required" value="<?php echo $penilaian['id_fak']?>" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Fakultas<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="fak" id="fak" required="required" value="<?php echo $penilaian['fak']?>" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div hidden class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">ID Jurusan<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="idJur" id="idJur" required="required" value="<?php echo $penilaian['id_jur']?>" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Jurusan<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="jur" id="jur" required="required" value="<?php echo $penilaian['jur']?>" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Penilaian<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="table-responsive">
                  <table class="table table-bordered table-striped table-hover jambo_table bulk_action js-basic-example dataTable">
                    <thead>
                      <tr class="headings">
                        <th class="column-title">Kriteria </th>
                        <th class="column-title">Nilai </th>
                        <th class="bulk-actions" colspan="7">
                          <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if(!empty($kriteria))
                      {
                        foreach($kriteria as $rk)
                        {
                          $kriteriaid=$rk->id_kriteria;
                          echo '<tr>';
                          echo '<td>'.$rk->nama_kriteria.'</td>';
                        
                          echo '<td>';
                          $query=$this->db->get_where('tb_subkriteria', array('id_kriteria' => $kriteriaid));
                          $dSub=$query->result();
                          if(!empty($dSub))
                          {           
                            echo '<select name="kriteria['.$kriteriaid.']"  class="form-control" data-placeholder="Pilih Nilai" required style="width: 100%">';
                            echo '<option>-- Pilih salah satu --</option>';
                            foreach($dSub as $rSub)
                            {
                              // $o='';
                              $o=$rSub->nama_subkriteria;
                              $nm_krt = $rk->nama_kriteria;
                              $id = $penilaian['id_mhs'];
                              $q = $this->db->query("SELECT id_penilaian, pm.id_penilaian_mhs as id_penilaian_mhs, k.id_kriteria as id_kriteria, k.nama_kriteria as nama_kriteria, id_nilai, nilai
      FROM tb_penilaian_mhs pm
      LEFT JOIN tb_kriteria k ON k.id_kriteria=pm.id_kriteria 
      LEFT JOIN tb_subkriteria s ON s.id_subkriteria=pm.id_nilai
       where pm.id_penilaian=$id
        and k.nama_kriteria='$nm_krt'")->row_array();
                              // echo $q['nama_kriteria'];
                              if ($q['nilai']== $rSub->id_nilai){
                                echo '<option selected="" value="'.$rSub->id_subkriteria.'">'.$o.'</option>';
                              }else{
                              echo '<option value="'.$rSub->id_subkriteria.'">'.$o.'</option>';
                            }
                            }
                            echo '</select>';
                          }
                          echo '</td>';
                          echo '</tr>';
                        }
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
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