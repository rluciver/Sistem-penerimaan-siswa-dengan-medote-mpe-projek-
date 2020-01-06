<?php echo form_open('http://localhost/projek/index.php/c_cetaksiswa/cetak'); ?>

<div class="content-wrapper">
  
  <section class="content-header">

    <h1 class="page-header">LAPORAN SISWA X RPL 1</h1>
    
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










        
   
    <!--End Advanced Tables -->
    
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



