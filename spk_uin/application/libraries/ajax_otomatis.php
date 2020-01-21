<?php
    
    $koneksi = mysqli_connect('127.0.0.1', 'root', '', 'spt_sppd' );
    if (!$koneksi) {
        echo 'Koneksi error';
        die('Could not connect: ' . mysqli_error($con));
    }
    $nama=$_GET['nama'];
    $query = mysqli_query($koneksi, "SELECT * FROM tb_pegawai where nama_pegawai=$nama");
    while($row = mysqli_fetch_array($result)){
        echo '<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">NIP<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="nip" required="required" value="'.$row['nip'].'" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pangkat</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="pangkat" class="form-control">
                            <option value="IV/a">IV/a</option>
                            <option value="IV/b">IV/b</option>
                            <option value="IV/c">IV/c</option>
                            <option value="IV/d">IV/d</option>
                            <option value="III/a">III/a</option>
                            <option value="III/b">III/b</option>
                            <option value="III/c">III/c</option>
                            <option value="III/d">III/d</option>
                            <option value="II/a">II/a</option>
                            <option value="II/b">II/b</option>
                            <option value="II/c">II/c</option>
                            <option value="II/d">II/d</option>
                            <option value="I/a">I/a</option>
                            <option value="I/b">I/b</option>
                            <option value="I/c">I/c</option>
                            <option value="I/d">I/d</option>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="jabatan" value="'.$row['jabatan'].'" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>';
    }
    // $row = mysqli_fetch_array($query);
    // $data = array(
    //             'nip') => $row['nip'],  
    //             'pangkat') => $row['pangkat'],
    //             'jabatan') => $row['jabatan']
    //             );
    // echo json_encode($data);
?>