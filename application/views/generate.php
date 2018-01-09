<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Form Pendaftaran SMPIT Bina Insani </title>
    <!-- Bootstrap -->
    <link href="<?= base_url(); ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url(); ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url(); ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url(); ?>assets/build/css/custom.min.css" rel="stylesheet">
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
    <!-- Select2 -->
    <link href="<?= base_url(); ?>assets/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="<?= base_url(); ?>assets/vendors/jquery/dist/jquery.min.js"></script>
   
    <script src="<?= base_url(); ?>assets/build/js/script.js"></script>
    
  </head>

  <body>
    <div class="container body">

        <div class="top_nav">
          <div class="nav_menu">
            <nav class="text-center">
              <div class="text-center">
              <h3>PENERIMAAN SANTRI BARU</h3>
              <h3>PESANTREN TAHFIDZUL QUR'AN AL'AZZAM</h3>
              <h3>SEKOLAH MENENGAH PERTAMA ISLAM TERPADU</h3>
              <h3 id="homes">BINA INSANI SEMARANG</h3>
              </div>
            </nav>
          </div>
        </div>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form class="form-signin">
                    <h1 class="form-signin-heading text-active text-center">Masukan Kode Pendaftaran untuk mencetak formulir</h1>
                    <span class="col-md-5"></span>
                    <input type="text" class="col-md-1" id="kode" required="" autofocus="" maxlength="8">
                    <a class="btn btn-xs btn-primary text-center" type="submit" id="sub_kode">
                      submit kode
                    </a> *Nb : Jangan gunakan enter untuk submit kode
                  </form>
                    <div class="modal fade" id="myModal" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Selamat, Kode Benar!!! </h4>
                          </div><!-- end modal-header -->

                          <div class="modal-body">
                            <div class="row">
                            <p>Silahkan pilih nama calon siswa dan tanggal lahir dengan benar untuk mencetak formulir pendaftaran</p>
                              <form>
                                <div class="col-sm-5">
                                  <select id="nama">
                                  <option>
                                  <?php foreach ($siswa as $value): ?>
                                    <option value="<?= $value->id_siswa?>" ><?=$value->nl_siswa; ?></option>
                                  <?php endforeach ?>
                                  </option>
                                </select>
                                </div>
                                <div class="col-sm-5">
                                  <input id="lahir" type="text" class="form-control" data-inputmask="'mask': '99/99/9999'" placeholder="contoh : 12/12/1998">
                                </div>
                                <div class="col-sm-1">
                                  <a value="ok" id="sub_siswa" class="btn btn-success" role="button">Cetak<a>
                                </div>
                              </form>
                            </div><!-- end row -->
                          </div><!-- end modal-body -->
                        </div><!-- end modal-content -->
                      </div><!-- end modal dialog -->
                    </div>
                    <div style="font-size: 30px" id="notice">
                    <p></p>
                      <p class="text-center">Belum punya kode?</p>
                      <p class="text-center">Silahkan Melakukan Pembayaran untuk mendapatkan kode</p>
                      <p>Langkah-langkah pembayaran sebagai berikut :</p>
                      <ul>
                      <li>Biaya Pendaftaran sebesar Rp. 200.000</li>
                      <li>Pembayaran bisa datang langsung ke sekretariat PPDB SMPIT Bina Insani Semarang atau</li>
                      <li>Transfer ke rekening BRI 6049-01-01698-7539 a/n Fidyan Fauziyyah Zain</li>
                      <li>melakukan konfirmasi pembayaran ke 0857-2409-0494 a/n Ustadzah Fidyan (untuk prmbayaran via transfer)</li>
                      </ul>
                    </div>
                  </div>
                </div>
          </div>
          <footer>
          <div class="pull-right">
            &copy Developed by <a href="https://neticx.github.io">Neticx</a>
          </div>
          <div class="text-center">
            <strong> Pesantren Tahfidzul Qur'an Al 'Azzam </strong>
          </div>
          <div class="clearfix"></div>
        </footer>
        </div>


  <!-- Select2 -->
  <script src="<?= base_url(); ?>assets/vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- jquery.inputmask -->
    <script src="<?= base_url(); ?>assets/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
     <!-- Bootstrap -->
    <script src="<?= base_url(); ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function() {
        $(":input").inputmask();
      });
    </script>
    <script>
    $("#nama").select2({
      placeholder: "Pilih Nama Calon Siswa",
      allowClear: true
    });

    $('#sub_kode').click(function() {
      var kode = $('#kode').val();
      $.ajax({
            url: "<?php echo site_url('Pendaftaran/cek_valid') ?>",
            type: 'POST',
            dataType: 'html',
            data:"kode="+kode,
            success: function(data) {
              if (data == 'true') {
              $('#myModal').modal('show');
              } else if(data == 'false'){
                alert('kode salah');
              }
              else{
                var code = data.slice(1,-1);
                window.location.assign("<?= site_url('Pendaftaran/cetak/'); ?>"+code);
              }
              
            }
          });
    });

    $('#sub_siswa').click(function() {
      var id = $('#nama').val();
      var tgl = $('#lahir').val();
      var kode = $('#kode').val();
      $.ajax({
            url: "<?php echo site_url('Pendaftaran/end_valid') ?>",
            type: 'POST',
            dataType: 'html',
            data:"id_siswa="+id+"&tgl="+tgl+"&kode="+kode,
            success: function(data) {
              if (data == 'true') {
                window.location.assign("<?= site_url('Pendaftaran/cetak/'); ?>"+id);
              }else{
                alert('Data Tidak Ada/salah, silahkan masukan dengan benar');
              }
            }
      });

    });
    </script>
  </body>
</html>