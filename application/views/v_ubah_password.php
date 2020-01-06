<div class="content-wrapper">
  
  <section class="content-header">
    <h1>Ubah Password</h1>
  </section>

  <section class="content">
    <form action="<?php echo base_url();?>index.php/ubah_password/ubahPassword" method="post">
                        <div class="form-group">
                            <label class="control-label col-md-4" style="text-align: left;">Password Lama</label>
                            <div class="col-md-7">
                                <input type="password" name="password" id="inputPassword" class="form-control">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" style="text-align: left;">Password Baru</label>
                            <div class="col-md-7">
                                <input type="password" name="newpass" id="inputPassword" class="form-control">
                                <span class="help-block"></span>
                            </div>
                        </div>


                       

                        <div class="form-group">
                            <label class="control-label col-md-4" style="text-align: left;">Konfirmasi Password</label>
                            <div class="col-md-7">
                                <input type="password" name="contpass" id="inputPassword" class="form-control">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="btn1">
                          <button type="SUBMIT" class="btn btn-primary" aria-label="Left Align" style="margin-left: 20px">
                          <span  aria-hidden="true">Ubah Password</span>
                          </button>
                        </div>

                    </form>
  </section>

</div>
                      
<?php echo form_close(); ?>
     

