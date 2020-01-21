 <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>ADMIN</h3>
    <ul class="nav side-menu">
      <li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-home"></i> Dashboard </a></li>
      <li><a href="<?php echo base_url('admin/kriteria');?>"><i class="fa fa-group"></i> Data Kriteria </a></li>
      <li><a href="<?php echo base_url('admin/subkriteria');?>"><i class="fa fa-group"></i> Data Subkriteria </a></li>
      <li><a href="<?php echo base_url('admin/periode');?>"><i class="fa fa-calendar"></i> Periode Lulusan </a></li>
      <li><a><i class="fa fa-desktop"></i> Perbandingan <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?php echo base_url('admin/perbandingan');?>"> Kriteria </a></li>
          <li><a href="<?php echo base_url('admin/perbandingan_sub');?>"> Subkriteria </a></li>
        </ul>
      </li>
      <li><a href="<?php echo base_url('login/logout');?>"><i class="fa fa-calendar"></i> Logout </a></li>
    </ul>
  </div>
</div>


