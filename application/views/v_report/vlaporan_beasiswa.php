<?php echo form_open('http://localhost/projek/index.php/claporan_beasiswa/cetak'); ?>

<div class="content-wrapper">
  
  <section class="content-header">
    <h1>LAPORAN SISWA YANG MENDAPAT BEASISWA</h1>
  </section>

  <section class="content">
    <div class="row">
        <!-- Welcome -->
        <div class="col-lg-12">
            <!-- dari sini --->
            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Laporan
                </div>
                <div class="panel-body">
                    <div class="row">
                    <div class="col-lg-12">
                            <div class="alert alert-danger">
                                <strong><h3>
                                        <?php echo validation_errors(); ?>
                                </strong></h3>
                            </div>
                        </div>
                        <!-- Welcome -->
                        <div class="col-lg-12">
                           <div class="form-group">              
                                <input type="text" class="form-control" name="tahun" id="tahun" autocomplete="off" placeholder="Cetak Laporan pertahun ( Masukan Tahun )">
                                </input>
                                <div class="btn1">
                                        <button type="SUBMIT" class="btn btn-success btn-lg" aria-label="Left Align" style="margin-top: 10px;">
                                              <span  aria-hidden="true">Cetak Laporan</span>
                                              </button>
                                </div>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                        <!--end  Welcome -->
                    </div>
                </div>

                </div>
            </div>
            </div>
        <!--End Page Header -->
    </div>

  </section>


</div>

