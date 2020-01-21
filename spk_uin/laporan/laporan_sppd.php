<?php

    $konek = mysqli_connect("localhost", "root", "", "spt_sppd");
    $nomor_surat = $_GET['no'];
    $sql="SELECT * FROM tb_sppd where nomor_surat='".$nomor_surat."'";
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

        <table align="center" valign="top" width="100" cellpadding="2" cellspacing="2"; border="0" color="white">
                
                <tr>
                    <td width="500" align="center">KEMENTERIAN PERHUBUNGAN</td>
                    <td>Lembar Ke</td>
                    <td>:</td>
                    <td>-1-</td>
                </tr>
                <tr>
                    <td width="500" align="center">BADAN PENGEMBANGAN SDM PERHUBUNGAN</td>
                    <td>Kode No.</td>
                    <td>:</td>
                    <td> </td>
                </tr>
                <tr >
                    <td width="500" align="center">AKADEMI TEKNIK DAN KESELAMATAN PENERBANGAN MAKASSAR</td>
                    <td>Nomor</td>
                    <td>:</td>
                    <td>'.$row[0].' </td>
                </tr>
                ';
            $content .= '
            </table>

             <table style="font-size: 12px;" align="center" valign="top" width="100" border="0" color="white">
                
                <tr>
                    <td width="220">JL. Salodong No.1 Kel.Untia</td>
                    <td>Telp</td>
                    <td>:</td>
                    <td>(0411) 373 212 / 373 213</td>
                    <td width="230"></td>
                </tr>
                <tr>
                    <td width="210">Kec. Biring Kanaya Kota Makassar</td>
                    <td>E-Mail</td>
                    <td>:</td>
                    <td>atkp.makassar@gmail.com</td>
                </tr>
                <tr>
                    <td width="210">Propinsi Sul-Sel Kode Pos : 90241</td>
                    <td>Website</td>
                    <td>:</td>
                    <td>www.atkp-makassar.ac.id</td>
                </tr>
                ';
            $content .= '
            </table>
            <br><br>

        <div align="center">
                <span>SURAT PERJALANAN DINAS (SPD)</span>
        </div>

        <br>

        <table align="center" valign="top" cellpadding="2" cellspacing="2" border="1" style="border-collapse: collapse;">
            <tr style="text-align: center; background-color: white;">
                <td style="padding: 8px 19px;" align="left">1</td>
                <td style="padding: 8px 19px;" align="left">Pejabat Pembuat Komitmen</td>
                <td style="padding: 8px 19px;" align="left">'.$row[2].'</td>
            </tr>
            <tr style="text-align: center; background-color: white;">
                <td style="padding: 8px 19px;" align="left">2</td>
                <td style="padding: 8px 19px;" align="left">Nama / NIP Pegawai yang melaksanakan perjalanan dinas</td>
                <td style="padding: 8px 19px;" align="left">'.$row[3].'</td>
            </tr>
            <tr style="text-align: center; background-color: white;">
                <td style="padding: 8px 19px;" align="left">3</td>
                <td style="padding: 8px 19px;" align="left">a. Pangkat<br>b. Jabatan<br>c. Tingkat Biaya Perjalanan Dinas</td>
                <td style="padding: 8px 19px;" align="left">a. -<br>b. '.$row[6].'<br>c. -</td>
            </tr>
            <tr style="text-align: center; background-color: white;">
                <td style="padding: 8px 19px;" align="left">4</td>
                <td style="padding: 8px 19px;" align="left">Maksud Perjalanan Dinas</td>
                <td style="padding: 8px 19px;" align="left">Dalam rangka '.$row[8].'</td>
            </tr>
            <tr style="text-align: center; background-color: white;">
                <td style="padding: 8px 19px;" align="left">5</td>
                <td style="padding: 8px 19px;" align="left">Alat Angkutan yang dipergunakan</td>
                <td style="padding: 8px 19px;" align="left">'.$row[9].'</td>
            </tr>
            <tr style="text-align: center; background-color: white;">
                <td style="padding: 8px 19px;" align="left">6</td>
                <td style="padding: 8px 19px;" align="left">a. Tempat Berangkat <br>b. Tempat  Tujuan</td>
                <td style="padding: 8px 19px;" align="left">a. '.$row[10].'<br> b. '.$row[11].'</td>
            </tr>
            <tr style="text-align: center; background-color: white;">
                <td style="padding: 8px 19px;" align="left">7</td>
                <td style="padding: 8px 19px;" align="left">a. Lama Perjalanan Dinas<br>b. Tanggal Berangkat<br>c. Tanggal Harus Kembali</td>
                <td style="padding: 8px 19px;" align="left">a. '.$row[12].' '.$row[13].'<br>b. '.$row[14].'<br>c. '.$row[15].'</td>
            </tr>
            <tr style="text-align: center; background-color: white;">
                <td style="padding: 8px 19px;" align="left">8</td>
                <td style="padding: 8px 19px;" align="left">Pengikut:<br>1. '.$row[16].'<br>2. <br>3. <br>4. <br>5. </td>
                <td style="padding: 8px 19px;" align="left">Pengikut:<br>6. <br>7. <br>8. <br>9. <br>10. </td>
            </tr>
            <tr style="text-align: center; background-color: white;">
                <td style="padding: 8px 19px;" align="left">9</td>
                <td style="padding: 8px 19px;" align="left">Pembebanan Anggaran<br>a. Instansi<br>b. Akun</td>
                <td style="padding: 8px 19px;" align="left">-<br>a. '.$row[17].'<br>b. </td>
            </tr>
            <tr style="text-align: center; background-color: white;">
                <td style="padding: 8px 19px;" align="left">10</td>
                <td style="padding: 8px 19px;" align="left">Keterangan Lain-lain</td>
                <td style="padding: 8px 19px;" align="left"> </td>
            </tr>';

        $content .= '
            </table>

        <br><br>

        <table align="left" valign="top" width="100" cellpadding="2" cellspacing="2"; border="0" color="white">;
                
                <tr style="text-align: left;">
                    <td width="400" style="padding: 8px 0px;"></td>
                    <td>Dikeluarkan di</td>
                    <td>:</td>
                    <td>Makassar</td>
                </tr>
                <tr style="text-align: left;">
                    <td width="400" style="padding: 8px 0px;"></td>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td>'.strftime("%e %B %Y").'</td>
                </tr>
                <tr style="text-align: left;">
                    <td width="400" style="padding: 8px 0px;"></td><br><br>
                    <td colspan="3" align="left"><br><br>Pejabat Pembuat Komitmen<br><br><br><br><br><b><u>('.$row[2].')</u></b><br>Pembina (IV/a)<br>NIP.</td>
                </tr>
                ';
            $content .= '
            </table>

    </page>


        <page>
        <div class="font1" style="font-size: 13px">
        <div align="center">
                <span>-2-</span>
        </div>

        <br>

        <table align="center" cellpadding="2" cellspacing="2" border="1" style="border-collapse: collapse;">
            <tr style="text-align: center; background-color: white;">
                <td style="padding: 8px 19px;" align="left"></td>
                <td style="padding: 8px 19px;" align="left"></td>
                <td style="padding: 8px 19px;" align="left">I</td>
                <td style="padding: 8px 19px;" align="left">Berangkat dari : Makassar<br>(Tempat kedudukan)<br>Ke<br>Pada Tanggal<br>Kepala<br><br><br><br>(..........................              )<br>NIP.</td>
            </tr>
            <tr style="text-align: top; background-color: white;">
                <td style="padding: 0px 19px;" align="left">II</td>
                <td style="padding: 0px 19px;" align="left">Tiba di     : JAKARTA<br>Pada Tanggal :<br>Kepada<br><br><br><br><br><br>(..........................              )<br>NIP.</td>
                <td style="padding: 8px 19px;" align="left"> </td>
                <td style="padding: 8px 19px;" align="left">Berangkat dari : MAKASSAR<br>(Tempat kedudukan)<br>Ke<br>Pada Tanggal<br>Kepala<br><br><br><br>(..........................              )<br>NIP.</td>
            </tr>
            <tr style="text-align: center; background-color: white;">
                <td style="padding: 8px 19px;" align="left">III</td>
                <td style="padding: 8px 19px;" align="left">Tiba di     :<br>Pada Tanggal :<br>Kepada<br><br><br><br><br><br>(..........................              )<br>NIP.</td>
                <td style="padding: 8px 19px;" align="left"> </td>
                <td style="padding: 8px 19px;" align="left">Berangkat dari<br>(Tempat kedudukan)<br>Ke<br>Pada Tanggal<br>Kepala<br><br><br><br>(..........................              )<br>NIP.</td>
            </tr>
            <tr style="text-align: center; background-color: white;">
                <td style="padding: 8px 19px;" align="left">IV</td>
                <td style="padding: 8px 19px;" align="left">Tiba di     :<br>Pada Tanggal :<br>Kepada<br><br><br><br><br><br>(..........................              )<br>NIP.</td>
                <td style="padding: 8px 19px;" align="left"> </td>
                <td style="padding: 8px 19px;" align="left">Berangkat dari<br>(Tempat kedudukan)<br>Ke<br>Pada Tanggal<br>Kepala<br><br><br><br>(..........................              )<br>NIP.</td>
            </tr>
            <tr style="text-align: center; background-color: white;">
                <td style="padding: 8px 19px;" align="left">IV</td>
                <td style="padding: 8px 19px;" align="left">Tiba di     :<br>Pada Tanggal :<br>Kepada<br><br><br><br><br><br>(..........................              )<br>NIP.</td>
                <td style="padding: 8px 19px;" align="left"> </td>
                <td style="padding: 8px 19px;" align="left">Berangkat dari<br>(Tempat kedudukan)<br>Ke<br>Pada Tanggal<br>Kepala<br><br><br><br>(..........................              )<br>NIP.</td>
            </tr>
            <tr style="text-align: center; background-color: white;">
                <td style="padding: 8px 19px;" align="left">V</td>
                <td style="padding: 8px 19px;" align="left">Tiba di     :<br>Pada Tanggal :<br>Kepada<br><br><br><br><br><br>(..........................              )<br>NIP.</td>
                <td style="padding: 8px 19px;" align="left"> </td>
                <td style="padding: 8px 19px;" align="left">Berangkat dari<br>(Tempat kedudukan)<br>Ke<br>Pada Tanggal<br>Kepala<br><br><br><br>(..........................              )<br>NIP.</td>
            </tr>
            <tr style="text-align: center; background-color: white;">
                <td style="padding: 8px 19px;" align="left">VI</td>
                <td style="padding: 8px 19px;" align="left">Tiba di     :<br>(Tempat Kedudukan)<br>Pada Tanggal :<br><br>Pejabat Pembuat  Komitmen<br><br><br><br>('.$row[2].')<br>NIP</td>
                <td style="padding: 8px 19px;" align="left"> </td>
                <td style="padding: 8px 19px;" align="left">Telah diperiksa dengan keterangan bahwa<br>perjalanan tersebut atas perintahnya dan<br>semata-mata untuk kepentingan jabatan<br>dalam waktu yang sesingkat-singkatnya<br><br>Pejabat Pembuat  Komitmen<br><br><br><br>('.$row[2].')<br>NIP</td>
            </tr>
            <tr style="text-align: center; background-color: white;">
                <td style="padding: 8px 19px;" align="left">VII</td>
                <td colspan="3" style="padding: 8px 19px;" align="left">Catatan Lain-lain</td>
            </tr>
            <tr style="text-align: center; background-color: white;">
                <td style="padding: 8px 19px;" align="left">VIII</td>
                <td width="500" colspan="3" style="padding: 8px 19px;" align="left">PERHATIAN:<br>PPK yang menerbitkan SPD, pegawai yang melakukan perjalanan dinas, para pejabat yang mengesahkan tanggal keberangkatan/tiba, serta bendahara pengeluaran bertanggung jawab berdasarkan peraturan -peraturan Keuangan Negara apabila negara menderita rugi akibat kesalahan, kelalaian dan kealpaannya.</td>
            </tr>';}
        }

        $content .= '
            </table>
            </div>
    </page>

    

    ';

    require_once('../assets/report/html2pdf.class.php');
    $html2pdf = new HTML2PDF('P', 'LEGAL', 'fr');
    $html2pdf->WriteHTML($content);
    $html2pdf->Output('laporanSPTSPPD.pdf');

?>
