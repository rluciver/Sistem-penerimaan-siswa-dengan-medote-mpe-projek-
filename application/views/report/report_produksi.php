<!DOCTYPE html>
<html>
<head>

    <title>Laporan Produksi - Malika.com</title>
    <link href="<?php echo base_url();?>/assets4/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>/assets4/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>/assets4/css/style.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>/assets4/css/main-style.css" rel="stylesheet" />

    <style>
        table{
            border-collapse: collapse;
            width: 100%;
            'margin: 0 auto;
        }
        table th{
            border:1px solid #000;
            padding: 3px;
            font-weight: bold;
        }
        table td{
            border:1px solid #000;
            padding: 3px;
            vertical-align: top;
        }

        #judul{
            font-size: 20px;
            font-weight: bold;
        }

        #tebal2{
            font-weight: bold;
        }

        #tebal{
            border:1px solid #000;
            padding: 3px;
            font-weight: normal;
            text-align: center;
        }

        #garis{
            width: 40%;
            border: 1px solid #000000;
        }

    </style>
    <style type="text/css">
        .under { text-decoration: underline;
            color: #000000;
        }
        .over  { text-decoration: overline; }
        .line  { text-decoration: line-through; }
        .blink { text-decoration: blink; }
        .all   { text-decoration: underline overline line-through; }
        a      { text-decoration: none; }
    </style>
</head>
<body>
<p style="text-align: left">UKM Pengolah Kedelai
<br>
Malika.com<br>
   Gunung Sulah, Wayhalim , Bandarlampung
</p>
<br>
<p style="text-align: center" ><strong><u>Laporan Produksi <?php echo $nama; ?> </u> </strong></p>

<br>
<br>
<!-- tabel detail disposisi -->
<h4>Tanggal = <?php echo date("d-F-Y",strtotime($tanggal)); ?></h4>
<br>


<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Tanggal</th>
            <th>No. Pembelian Bahan baku</th>
            <th>Hasil</th>
        </tr>
    </thead>
<?php $no = 1; ?>
    <tbody>
    <?php foreach ($data_produksi as $b){ ?>
        <tr class="even gradeA">
            <td><?php echo $no++; ?></td>
            <td><?php echo date("d-F-Y",strtotime($b->tanggal)); ?></td>
            <td><?php echo $b->bahan_baku; ?></td>
            <td><?php echo $b->hasil; ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<br><br>

<br>

<br>

</body>
</html>