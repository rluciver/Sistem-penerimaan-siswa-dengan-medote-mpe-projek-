<!DOCTYPE html>
<html>
<head>
  <title><?=$title?></title>


    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')?>" rel="stylesheet">

</head>
<body>
<div class="container-fluid">
<h1><b>Data Penerima Beasiswa</b></h1><br>
<table class="table table-striped table-bordered" cellspacing="0" width="100%"">
  <tr>
        <th>NO</th>
        <th>NIS</th>
        <th>NAMA SISWA</th>
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
        <td><?php echo $beasiswa->keterangan; ?></td>
        <td><?php echo $beasiswa->tahun; ?></td>
    </tr>
    <?php 
    }
    ?>
</table>
</div><br><br><br><br><br><br><br><br><Br>
</body>
</html>