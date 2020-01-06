<!DOCTYPE html>
<html>
<head>

    <title>Bukti Pembelian - UKM Pengolah Kedelai</title>
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
UKMGo<br>
   Gunung Sulah, Wayhalim , Bandarlampung
</p>
<br>
<p style="text-align: center" ><strong><u>Bukti Pembelian Barang</u> </strong></p>

<br>
<br>
<!-- tabel detail disposisi -->
<h4>Tanggal = <?php echo date("d-F-Y",strtotime($tanggal)); ?></h4>
<br>
<h4>Nama : <?php echo $pelanggan['nama']; ?></h4>
<h4>Email : <?php echo $pelanggan['email']; ?></h4>

<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
        </tr>
    </thead>
<?php $no = 1; ?>
    <tbody>
    <?php foreach ($data_keranjang as $b){ ?>
        <tr class="even gradeA">
            <td><?php echo $no++; ?></td>
            <td><?php echo $b->nama_produk; ?></td>
            <td><?php echo $b->harga; ?></td>
            <td><?php echo $b->jumlah; ?></td>
            <td><?php echo $b->total; ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<br><br>
<h3>Total Semua = <?php echo $totalSemua; ?></h3>
<br>

<br>

</body>
</html>