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
          <h2>Input Data Alternatif Penilaian</h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">

          <form method="post" action="<?php echo base_url().'Akademik/Penilaian/aksi_tambah_penilaian';?>" class="form-horizontal form-label-left" enctype="multipart/form-data" novalidate>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">NIM<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select name="nim" onchange="load_c($(this).find('option:selected').attr('value'))" id="id_mhs" class="form-control" required="">
                  <option>-- Pilih salah satu --</option>
                  <?php
                  foreach ($id_mhs as $id) {
                    $nil=0;
                      foreach ($nilai_mhs as $nilai) {
                        if ($id->nim == $nilai->nim) {
                          $nil=1;
                        }
                      }
                      if ($nil==0) {
                        
                      
                    ?>

                    <option value="<?php echo $id->nim;?>"><?php echo $id->nim;?></option>
                <?php }
                 }
                ?>
                </select>
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Mahasiswa<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="nama_mhs" name="nama_mhs" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Id Mahasiswa<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="id_m" name="id_m" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div hidden class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">ID Fakultas<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="idFak" id="idFak" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Fakultas<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="fak" id="fak" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div hidden class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">ID Jurusan<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="idJur" id="idJur" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Jurusan<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="jur" id="jur" required="required" class="form-control col-md-7 col-xs-12">
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
                              echo '<option value="'.$rSub->id_subkriteria.'">'.$o.'</option>';
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
                  <input id="send" type="submit" class="btn btn-success" name="simpan" value="Simpan" />
                </div> 
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="<?=base_url('assets/js/jquery.min.js')?>"></script>
    <script  type="text/javascript">
          function load_c(x){
            console.log("berhasil di load");
            var y={kode:x};
            $.ajax({
              type:"POST",
              url: 'tampil_mhs',
              data:y
            })
            .success(function (data){
            console.log(data);
            if (data=='null'){
              $('#nama_mhs').val(""); 
              $('#id_m').val("");
              $('#idFak').val("");
              $('#fak').val("");
              $('#idJur').val(""); 
              $('#jur').val("");  
            } else {
            var json = data,
            obj = JSON.parse(json);
            $('#nama_mhs').val(obj.nama_mhs); 
            $('#id_m').val(obj.id_mhs);
            $('#idFak').val(obj.idFak);
            $('#fak').val(obj.fak);
            $('#idJur').val(obj.idJur);
            $('#jur').val(obj.jur);}
            });
          }
    </script>    