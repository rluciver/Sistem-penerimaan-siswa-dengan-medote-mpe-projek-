 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DATA SISWA TEST RESPONSIF</title>
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')?>" rel="stylesheet">
    </head>

<div class="content-wrapper">
  
  <section class="content-header">
    <h1>Perhitungan MPE X 1</h1>
  </section>

  <section class="content">
    <button class="btn btn-success" id="btnn" onclick="add_siswa()"><i class="glyphicon glyphicon-plus"></i> HITUNG BARU</button>
        <button class="btn btn-default" id="btnn2" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> REFRESH</button>
        <br />
        <br />
        <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>NIS</th>
                    <th>NAMA SISWA</th>
                    <th>PRESTASI</th>
                    <th>NILAI DISIPLIN</th>
                    <th>NILAI ABSENSI</th>
                    <th>NILAI MPE</th>
                    <th>KETERANGAN</th>
                    <th>TAHUN</th>
                    <th style="width:65px;">Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>

            <tfoot>
            <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
            </tr>
            </tfoot>
        </table>
    </div>

<script src="<?php echo base_url('assets/jquery/jquery-2.1.4.min.js')?>"></script>
<script src="<?php echo base_url('assets/jquery/jquery-2.2.3.min.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap-datepicker/js/bootstrap-datepicker.min.js')?>"></script>


<script type="text/javascript">

var save_method; //for save method string
var table;
var jQuery_2_2_3 = $.noConflict(true); // Membuat variabel baru untuk perintah jQuery versi 2.2.3 yaitu jQuery_2_2_3
 
jQuery_2_2_3(document).ready(function(){ // Nantinya setiap perintah jQuery versi 2.2.3 selalu gunakan variabel jQuery_2_2_3
// Perintah jQuery yang dijalankan pada versi jQuery_2_2_3

    //datatables
    table = jQuery_2_2_3('#table').DataTable({ 

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('index.php/h_siswaxrpl1/ajax_list')?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ -1 ], //last column
            "orderable": false, //set not orderable
        },
        ],

    });

    //datepicker
    jQuery_2_2_3('.datepicker').datepicker({
        autoclose: true,
        format: "yyyy-mm-dd",
        todayHighlight: true,
        orientation: "top auto",
        todayBtn: true,
        todayHighlight: true,  
    });

});



function add_siswa()
{
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('HITUNG BARU'); // Set Title to Bootstrap modal title
}

function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax 
}

function save()
{
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable 
    var url;

    if(save_method == 'add') {
        url = "<?php echo site_url('index.php/h_siswaxrpl1/ajax_add')?>";
    } else {
        url = "<?php echo site_url('index.php/h_siswaxrpl1/ajax_update')?>";
    }

    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data)
        {

            if(data.status) //if success close modal and reload ajax table
            {
                $('#modal_form').modal('hide');
                reload_table();
            }

            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 


        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 

        }
    });
}

function delete_siswa(id)
{
    if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('index.php/h_siswaxrpl1/ajax_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //if success reload ajax table
                $('#modal_form').modal('hide');
                reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

    }
}

</script>
<script src="//code.jquery.com/jquery.js"></script>
    <!-- Bootstrap JavaScript -->

    <script src="<?php echo base_url('assets/Bootstrap-3-Typeahead-master/bootstrap3-typeahead.min.js')?>"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script><!-- 
    <script src="<?php echo site_url(); ?>assets/Bootstrap-3-Typeahead-master/bootstrap3-typeahead.min.js" type="text/javascript"></script>      -->
    <script>
     $(document).ready(function(e){
        var site_url = "<?php echo site_url(); ?>";
        var input = $("input[name=nama_siswa]");

            $.get('http://localhost/projek/index.php/home1/json_search_country', function(data){
                        input.typeahead({
                            source: data,
                            minLength: 1,
                        });
            }, 'json');

            input.change(function(){
                var current = input.typeahead("getActive");
                $('#nama_siswa').val(current.id);
            });

    });
     $(document).ready(function(f){
        var site_url = "<?php echo site_url(); ?>";
        var input = $("input[name=nis]");

            $.get('http://localhost/projek/index.php/home1/json_search_country', function(data){
                        input.typeahead({
                            source: data,
                            minLength: 1,
                        });
            }, 'json');

            input.change(function(){
                var current = input.typeahead("getActive");
                $('#nama_siswa').val(current.id);
            });

    });
    </script>
<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">HITUNG BARU</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 

                        <div class="form-group">
                            <label class="control-label col-md-4" style="text-align: left;">TAHUN</label>
                            <div class="col-md-7">                
                          <input type="text" class="form-control" name="tahun" id="tahun" placeholder="TAHUN">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4" style="text-align: left;">NIS</label>
                            <div class="col-md-7">                
                                <input type="text" class="form-control" name="nis" id="nis" placeholder="NIS" autocomplete="off">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4" style="text-align: left;">NAMA SISWA</label>
                            <div class="col-md-7">                
                                <input type="text" class="form-control" name="nama_siswa" id="nama_siswa" placeholder="NAMA SISWA" autocomplete="off">
                                <span class="help-block"></span>
                            </div>
                        </div>







                        <div class="form-group">
                            <label class="control-label col-md-4" style="text-align: left;">PRESTASI</label>
                            <div class="col-md-7">
                                <div class="col-md-6">
                                    <p>Nilai Lapor</p>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="nilai_lapor" class="form-control">
                                </div>
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="control-label col-md-4"   ></label>
                            <div class="col-md-7">
                                <div class="col-md-6">
                                    <p>Sertifikat Prestasi</p>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control" name="sertifikat">
                                    <option value="">SILAHKAN PILIH</option>
                                    <option value="2">Ada</option>
                                    <option value="1">Tidak ada</option>></select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>





                        <div class="form-group">
                            <label class="control-label col-md-4" style="text-align: left;">Kedisiplinan</label>
                            <div class="col-md-7">
                                <div class="col-md-6">
                                    <p>Mematuhi Peraturan Sekolah</p>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control" name="patuh">
                                    <option value="">SILAHKAN PILIH</option>
                                    <option value="2">Patuh</option>
                                    <option value="1">Tidak Patuh</option>></select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="control-label col-md-4"></label>
                            <div class="col-md-7">
                                <div class="col-md-6">
                                    <p>Datang tepat waktu</p>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control" name="datang">
                                    <option value="">SILAHKAN PILIH</option>
                                    <option value="2">Tepat Waktu</option>
                                    <option value="1">Sering terlambat</option>></select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4"></label>
                            <div class="col-md-7">
                                <div class="col-md-6">
                                    <p>Mengikuti pelajaran sekolah</p>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control" name="ikut">
                                    <option value="">SILAHKAN PILIH</option>
                                    <option value="2">Mengikuti pelajaran</option>
                                    <option value="1">Tidak Mengikuti pelajaran</option>></select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>






                        <div class="form-group">
                            <label class="control-label col-md-4" style="text-align: left;">Kehadiran</label>
                            <div class="col-md-7">
                                <div class="col-md-6">
                                    <p>Absensi Siswa</p>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control" name="disiplin">
                                    <option value="">SILAHKAN PILIH</option>
                                    <option value="2">Selalu hadir</option>
                                    <option value="1">Jarang Hadir</option></select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>

<!--                         <div class="form-group">
                            <label class="control-label col-md-4" style="text-align: left;">KEHADIRAN</label>
                            <div class="col-md-7">
                            <select class="form-control" name="nilai_absensi">
                                <option value="">SILAHKAN PILIH</option>
                                <option value="3">BAIK</option>
                                <option value="2">KURANG BAIK</option>
                                <option value="1">TIDAK BAIK</option></select>
                                <span class="help-block"></span>
                            </div>
                        </div> -->
                    </form>
            </div>

            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-secondary">Save</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->

  </section>

</div>

        