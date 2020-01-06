
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/stylelaporan.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>/assets/css/bootstrap.css" rel="stylesheet" />

<div class="content-wrapper">
  
  <section class="content-header">
    <h1>Perhitungan</h1>
  </section>

  <section class="content">
    
<h1><b>SMK Ma'arif 1 Kalirejo Lampung Tengah</b></h1>
<h2>Laporan Perhitungan MPE</h2>
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
     <?php foreach($datampe as $mpe)
     {
        ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td id="nis"><?php echo $mpe->nis; ?></td>
        <td><?php echo $mpe->nama_siswa; ?></td>
        <td><?php echo $mpe->nilai_prestasi; ?></td>
        <td><?php echo $mpe->nilai_disiplin; ?></td>
        <td><?php echo $mpe->nilai_absensi; ?></td>
        <td><?php echo $mpe->nilai_mpe; ?></td>
        <td><?php echo $mpe->keterangan; ?></td>
        <td><?php echo $mpe->tahun; ?></td>
    </tr>
    <?php 
    }
    ?>
</table>

  </section>


</div>  

