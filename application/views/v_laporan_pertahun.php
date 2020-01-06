<div id="page-wrapper">

    <div class="row">
        <!-- Page Header -->
          <div class="col-md-9" id="content"> <!--Awal Content -->
            <h1 class="page-header">Laporan Pertahun</h1>
      

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
                        <!-- Welcome -->
                        <div class="col-lg-12">
                            <div class="alert alert-danger">
                                <strong><h3>
                                        <?php echo validation_errors(); ?>
                                </strong></h3>
                            </div>
                        </div>
                        <!--end  Welcome -->
                    </div>



                    <div class="row">
                        <!--quick info section -->

                        <div class="col-md-1">
                        </div>
                    


                        <?php echo form_open_multipart('index.php/claporan_pertahun/laporanPenjualanbyTanggal'); ?>
                        <div class="col-md-12">
                            <br>


                            <div class="col-md-3">
                                <label class="control-label" for="txt_search"> Dari Tanggal : </label>
                            </div>

                    
                            <div class="col-md-2">
                                <select class="form-control" name="tahun" id="tahun">
                                    <option value="">Pilih Tahun</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                </select>
                            </div>

                        </div>

                    
                            <br><br><br><br>
                            <div class="col-md-2"></div>
                            <div class="col-md-10" id="fgbutton" style="width: 100%">
                                <button class="btn btn-success btn-lg" type="submit" name="tahun" value="tahun" id="tahun">Cetak Laporan</button>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>

                </div>
            </div>
            </div>>
    </div>

<!-- Core Scripts - Include with every page -->
<script src="<?php echo base_url();?>/assets1/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>/assets4/plugins/jquery-1.10.2.js"></script>
<script src="<?php echo base_url();?>/assets4/plugins/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>/assets4/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo base_url();?>/assets4/plugins/pace/pace.js"></script>
<script src="<?php echo base_url();?>/assets4/scripts/siminta.js"></script>
<!-- Page-Level Plugin Scripts-->
<script src="<?php echo base_url();?>/assets4/plugins/morris/raphael-2.1.0.min.js"></script>
<script src="<?php echo base_url();?>/assets4/plugins/morris/morris.js"></script>
<script src="<?php echo base_url();?>/assets4/scripts/dashboard-demo.js"></script>
<script src="<?php echo base_url();?>/assets4/plugins/dataTables/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>/assets4/plugins/dataTables/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url();?>/assets2/js/scripts.js"></script>
<script>
    $(document).ready(function () {
        $('#dataTables-example').dataTable();
    });
</script>


</body>

</html>


</div>


</div>
</div>
</div>
<!-- end wrapper -->


<!-- Core Scripts - Include with every page -->
<script src="<?php echo base_url();?>/assets2/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>/assets4/plugins/jquery-1.10.2.js"></script>
<script src="<?php echo base_url();?>/assets4/plugins/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>/assets4/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo base_url();?>/assets4/plugins/pace/pace.js"></script>
<script src="<?php echo base_url();?>/assets4/scripts/siminta.js"></script>
<!-- Page-Level Plugin Scripts-->
<script src="<?php echo base_url();?>/assets4/plugins/morris/raphael-2.1.0.min.js"></script>
<script src="<?php echo base_url();?>/assets4/plugins/morris/morris.js"></script>
<script src="<?php echo base_url();?>/assets4/scripts/dashboard-demo.js"></script>
<script src="<?php echo base_url();?>/assets4/plugins/dataTables/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>/assets4/plugins/dataTables/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url();?>/assets2/js/scripts.js"></script>
<script>
    $(document).ready(function () {
        $('#dataTables-example').dataTable();
    });
</script>


</body>

</html>
