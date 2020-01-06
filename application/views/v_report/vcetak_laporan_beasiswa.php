
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')?>" rel="stylesheet">


<h1><b>SMK Ma'arif 1 Kalirejo Lampung Tengah</b></h1>
<h2>Laporan Penerima Beasiswa</h2>
<hr>
<table>
  <tr>
        <th>NO</th>
        <th>NIS</th>
        <th>NAMA SISWA</th>
        <th>NILAI PRESTASI</th>
        <th>NILAI DISIPLIN</th>
        <th>NILAI ABSENSI</th>
        <th>NILAI MPE</th>
        <th>KETERANGAN</th>  
        <th>TAHUN</th>      
    </tr>

   <?php $no = 1; ?>
     <?php foreach($databeasiswa as $beasiswa)
     {
        ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td id="nis"><?php echo $beasiswa->nis; ?></td>
        <td><?php echo $beasiswa->nama_siswa; ?></td>
        <td><?php echo $beasiswa->nilai_prestasi; ?></td>
        <td><?php echo $beasiswa->nilai_disiplin; ?></td>
        <td><?php echo $beasiswa->nilai_absensi; ?></td>
        <td><?php echo $beasiswa->nilai_mpe; ?></td>
        <td><?php echo $beasiswa->keterangan; ?></td>
        <td><?php echo $beasiswa->tahun; ?></td>
    </tr>
    <?php 
    }
    ?>
</table>