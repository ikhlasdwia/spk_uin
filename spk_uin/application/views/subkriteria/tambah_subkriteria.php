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
          <h2>Input Kriteria</h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">

          <form method="post" action="<?php echo base_url().'Admin/Subkriteria/aksi_tambah_subkriteria';?>" class="form-horizontal form-label-left" enctype="multipart/form-data" novalidate>
            <div class="item form-group">
              <!-- <label class="control-label col-md-3 col-sm-3 col-xs-12">ID Kriteria<span class="required">*</span>
              </label> -->
              <?php 
                  $id=$_POST['id_kriteria'];
                ?>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="hidden" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="id_kriteria" required="required" value="<?php echo $id; ?>">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Subkriteria<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="nama_subkriteria" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Nilai<span class="required">*</span></label>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-3">
                  <input type="radio" name="nilai"
                    <?php if (isset($nilai) && $nilai=="sb") echo "checked";?>
                    value="Sangat Baik">Sangat Baik
                </label>
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">
                  <input type="radio" name="nilai"
                    <?php if (isset($nilai) && $nilai=="b") echo "checked";?>
                    value="Baik">Baik
                </label>
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">
                  <input type="radio" name="nilai"
                    <?php if (isset($nilai) && $nilai=="c") echo "checked";?>
                    value="Cukup">Cukup
                </label>
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">
                  <input type="radio" name="nilai"
                    <?php if (isset($nilai) && $nilai=="k") echo "checked";?>
                    value="Kurang">Kurang
                </label>
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">
                  <input type="radio" name="nilai"
                    <?php if (isset($nilai) && $nilai=="sk") echo "checked";?>
                    value="Sangat Kurang">Sangat Kurang
                </label>
              </div>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-md-offset-3">
                <input id="send" type="submit" class="btn btn-success" name="simpan" value="Simpan">
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
$(document).ready(function () {
  $(".opsi input").removeAttr('required');
  $(".opsi select").removeAttr('required');
  $(".tipe").each(function(){
    $(this).change(function(){
      var did=$(this).attr('data-id');
      $(".opsi").attr('style','display:none');
      $(".opsi input").removeAttr('required');
      $(".opsi select").removeAttr('required');
      $("#div_"+did).show();
      $("#div_"+did+" input").attr('required','required');
    });
  });
  
});
</script>