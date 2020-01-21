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
                    <h2>Edit Subkriteria</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form method="post" action="<?php echo base_url('Admin/Subkriteria/aksi_edit_subkriteria');?>" class="form-horizontal form-label-left" enctype="multipart/form-data" novalidate>

                      <div class="item form-group">
                        <!-- <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Subkriteria<span class="required">*</span>
                        </label> -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" name="id_kriteria" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $subkriteria['id_kriteria']?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <!-- <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Subkriteria<span class="required">*</span>
                        </label> -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" name="id_subkriteria" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $subkriteria['id_subkriteria']?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Subkriteria<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="nama_subkriteria" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $subkriteria['nama_subkriteria']?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nilai<span class="required">*</span></label>
                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-3">
                            <input type="radio" name="nilai"
                              <?php if (isset($nilai) && $nilai=="Sangat Baik") echo "checked";?>
                              value="Sangat Baik">Sangat Baik
                          </label>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">
                            <input type="radio" name="nilai"
                              <?php if (isset($nilai) && $nilai=="Baik") echo "checked";?>
                              value="Baik">Baik
                          </label>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">
                            <input type="radio" name="nilai"
                              <?php if (isset($nilai) && $nilai=="Cukup") echo "checked";?>
                              value="Cukup">Cukup
                          </label>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">
                            <input type="radio" name="nilai"
                              <?php if (isset($nilai) && $nilai=="Kurang") echo "checked";?>
                              value="Kurang">Kurang
                          </label>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">
                            <input type="radio" name="nilai"
                              <?php if (isset($nilai) && $nilai=="Sangat Kurang") echo "checked";?>
                              value="Sangat Kurang">Sangat Kurang
                          </label>
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