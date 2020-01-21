<?php

    $konek = mysqli_connect("localhost", "root", "", "spt_sppd");
    $no_surat = $_GET['no'];
    $sql="SELECT * FROM tb_spt where no_surat='".$no_surat."'";
    setlocale(LC_ALL, 'id_ID');

    $content = '
    <page>
    ';
        if ($result = mysqli_query($konek,$sql)){
            while ($row = mysqli_fetch_row($result)){ 
                $content .= '

        <div style="padding-top: 4mm; padding-bottom: 4mm; border: 0px solid;" align="center">
            <span></span><br><span></span><br><span></span>
        </div>
        <div align="center">
                <span><strong><b><u>SURAT TUGAS</u></b></strong></span><br>
                <span>Nomor: ST.'.$row[1].'/'.date("m").'/ATKP.Mks-'.date("y").'</span>
        </div>

        <br><br>

        <table align="left" valign="top" width="100"; border="0" color="white">
                <tr style="text-align: left;">
                    <td style="padding: 0px 19px;">I.</td>
                    <td style="padding: 0px 19px;">DASAR</td>
                    <td style="padding: 0px 19px;">:</td>
                    <td colspan="2" align="justify" width="400">Surat dari '.$row[8].'</td>
                </tr>
                <tr style="text-align: left;">
                    <td style="padding: 8px 19px;">II.</td>
                    <td style="padding: 8px 19px;">DIPERINTAHKAN KEPADA</td>
                    <td style="padding: 8px 19px;">:</td>
                    <td colspan="2" align="justify" width="400" style="padding: 8px 0px;">Pegawai sebagaimana tercantum pada lampiran Surat Tugas ini</td>
                </tr>
                <tr style="text-align: left;">
                    <td style="padding: 8px 19px;">III.</td>
                    <td style="padding: 8px 19px;">ISI PERINTAH</td>
                    <td style="padding: 8px 19px;">:</td>
                    <td colspan="2" align="justify" width="400" style="padding: 8px 0px;">Dalam rangka '.$row[7].'</td>
                </tr>
                <tr style="text-align: left;">
                    <td style="padding: 8px 19px;">IV.</td>
                    <td style="padding: 8px 19px;">LAIN-LAIN</td>
                    <td style="padding: 8px 19px;">:</td>
                    <td style="padding: 8px 0px;">1.<br><br><br>2.<br>3.<br>4.</td>
                    <td width="350" align="justify" style="padding: 8px 0px;">
                        Setelah Melaksanakan tugas diwajibkan membuat laporan tertulis dan disampaikan kepada Direktur Akademi Teknik dan Keselamatan Penerbangan Makassar;
                    <br>Harap Dilaksanakan dengan penuh tanggung jawab
                    <br>Surat tugas ini untuk dilaksanakan sebagaimana mestinya
                    <br>Biaya yang diperlukan dibebankan kepada DIPA ATKP Makassar Tahun 2019.</td>
                </tr>
                <tr style="text-align: left">
                    <td style="padding: 8px 19px;">V.</td>
                    <td style="padding: 8px 19px;">PERINTAH SELESAI</td>
                    <td style="padding: 8px 19px;"> </td>
                    <td> </td>
                    <td style="padding: 8px 19px;"> </td>
                </tr> 
        </table>

        <br><br>

        <table align="left" valign="top" width="100" cellpadding="2" cellspacing="2"; border="0" color="white">;
                
                <tr style="text-align: left;">
                    <td width="400" style="padding: 8px 0px;"></td>
                    <td>Ditetapkan</td>
                    <td>:</td>
                    <td>Makassar</td>
                </tr>
                <tr style="text-align: left;">
                    <td width="400" style="padding: 8px 0px;"></td>
                    <u>
                    <td>Pada Tanggal</td>
                    <td>:</td>
                    <td>'.strftime("%e %B %Y").'</td></u>
                </tr>
                <tr style="text-align: left;">
                    <td width="400" style="padding: 8px 0px;"></td><br><br>
                    <td colspan="3" align="center"><br><br><b>DIREKTUR<br><br><br><br><br><u>ACHMAD SETIYO PRABOWO, S.T., M.T.</u></b><br>Pembina (IV/a)<br>NIP. 19740819 199501 1 001</td>
                </tr>';}
    }
    $content .='
        </table>

    </page>
    ';
    require_once('../assets/report/html2pdf.class.php');
    $html2pdf = new HTML2PDF('P', 'A4', 'fr');
    $html2pdf->WriteHTML($content);
    $html2pdf->Output('laporanSPT.pdf');

?>
