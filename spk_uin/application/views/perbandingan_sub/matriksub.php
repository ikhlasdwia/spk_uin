<!-- page content -->
<div class="right_col" role="main">
	<div class="">
	  <div class="page-title">
	    <div class="title_left">
	      <h2>Perbandingan Data Subkriteria</h2>
	    </div>
	  </div>
	</div>
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_content">
			<div class="col-md-3">
				<p style="text-align: center;"><strong>Klik Kriteria untuk melakukan <br>perbandingan Subkriteria</strong></p>
				<ul class="list-group">
				  <?php	  
				  if(!empty($kriteria))
				  {
				  	foreach($kriteria as $rk)
				  	{	
				  ?>

                                 
						<a href="<?php echo base_url('admin/perbandingan_sub_id/'.$rk->id_kriteria); ?>"><li class="list-group-item"><?php echo $rk->nama_kriteria; ?></li></a>
				
				  <?php } 
				} ?>
				</ul>
			</div>

			<div> 
				
			</div>
	   	</div>



	  </div>
		<div class="col-md-9">
			<div id="matriksub"></div>
		</div>

	</div>


</div>

  <script src="<?=base_url('assets/js/jquery.min.js')?>"></script> 