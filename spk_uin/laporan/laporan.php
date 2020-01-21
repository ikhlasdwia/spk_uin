<?php

    $konek = mysqli_connect('localhost', 'root', '', 'spt_sppd2');
    $sql = "SELECT * FROM view_laporan";
    $result = mysqli_query($konek, $sql);


    $content = '
    <page>
        <div style="padding-top: 4mm; padding-bottom: 4mm; border: 1px solid;" align="center">
                <span>LAPORAN SISTEM INFORMASI</span><br>
                <span>SURAT PERINTAH TUGAS DAN SURAT PERJALANAN DINAS</span><br>
                <span>ATKP MAKASSAR</span>
        </div>

        <hr><br>

        <table align="center" cellpadding="2" cellspacing="2" border="1" style="border-collapse: collapse;">
            <tr style="text-align: center; background-color: blue;">
                <th style="padding: 8px 19px;">No</th>
                <th style="padding: 8px 10px; width:30px;">Kode Surat</th>
                <th style="padding: 8px 10px; width:30px;">Nomor Surat</th>
                <th style="padding: 8px 19px;">Tanggal</th>
                <th style="padding: 8px 10px; width:30px;">Nama Pegawai</th>
                <th style="padding: 8px 19px;">NIP</th>
                <th style="padding: 8px 19px;">Pangkat</th>
                <th style="padding: 8px 19px;">Jabatan</th>
                <th style="padding: 8px 10px; width:30px;">Isi Perintah</th>
                <th style="padding: 8px 10px; width:30px;">Pejabat Pemberi Kewenangan</th>
                <th style="padding: 8px 19px;">Biaya</th>
                <th style="padding: 8px 19px;">Angkutan</th>
                <th style="padding: 8px 10px; width:30px;">Tempat Berangkat</th>
                <th style="padding: 8px 10px; width:30px;">Tempat Tujuan</th>
                <th style="padding: 8px 10px; width:30px;">Tanggal Berangkat</th>
                <th style="padding: 8px 10px; width:30px;">Tanggal Kembali</th>
                <th style="padding: 8px 19px;">Anggaran</th>
            </tr>';
             $no=1;
            while ($row = mysqli_fetch_array($result)) {
                $content .= '

                <tr style="text-align: center;"">
                    <td>'.$no.'</td>
                    <td>'.$row['kd_surat'].'</td>
                    <td>'.$row['no_surat'].'</td>
                    <td>'.$row['tgl'].'</td>
                    <td>'.$row['nama_pegawai'].'</td>
                    <td>'.$row['nip'].'</td>
                    <td>'.$row['pangkat'].'</td>
                    <td>'.$row['jabatan'].'</td>
                    <td>'.$row['isi_perintah'].'</td>
                    <td>'.$row['pejabat_pk'].'</td>
                    <td>'.$row['biaya'].'</td>
                    <td>'.$row['angkutan'].'</td>
                    <td>'.$row['tempat_berangkat'].'</td>
                    <td>'.$row['tempat_tujuan'].'</td>
                    <td>'.$row['tgl_berangkat'].'</td>
                    <td>'.$row['tgl_kembali'].'</td>
                    <td>'.$row['anggaran'].'</td>
                </tr>
                ';
                $no++;
            }

        $content .= '
            </table>
    </page>

    ';

    require_once('../assets/report/html2pdf.class.php');
    $html2pdf = new HTML2PDF('L', 'A4', 'en');
    $html2pdf->WriteHTML($content);
    $html2pdf->Output('laporanSPTSPPD.pdf');

?>
