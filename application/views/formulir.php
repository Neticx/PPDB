
<title>Formulir</title>

<!-- Bootstrap -->
<link href="<?= base_url(); ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- <script src="<?= base_url(); ?>assets/vendors/jquery/dist/jquery.min.js"></script> -->
  <!-- pdfmake -->
  <script src="<?= base_url(); ?>assets/vendors/pdfmake/build/pdfmake.min.js"></script>
  <!-- vfs_font -->
  <script src="<?= base_url(); ?>assets/build/js/vfs_font.js"></script>

  <!-- jQuery -->
  <script src="<?= base_url(); ?>/assets/vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?= base_url(); ?>/assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="right_col" role="main">
        <div class="row">

        <?php foreach ($siswa as $data) {
          
          $header = base_url().'assets/build/img/head.png';
          $im1 = base_url().'assets/build/img/1.png';
          $im2 = base_url().'assets/build/img/2.png';
          $im3 = base_url().'assets/build/img/3.png';
          $head = base64_encode(file_get_contents($header));
          $img1 = base64_encode(file_get_contents($im1));
          $img2 = base64_encode(file_get_contents($im2));
          $img3 = base64_encode(file_get_contents($im3));
         ?>
         <script>
           // playground requires you to assign document definition to a variable called dd
          // playground requires you to assign document definition to a variable called dd

var dd = {
  header: function(){
      return {
          table: {
              body: [
                  [
                      {image: 'data:image/png;base64,<?= $head; ?>',width: 570, height: 80,},
                  ]
              ]
          }, margin: [22,10],
          layout: 'noBorders'
      }
    },
  content: [

    { text: 'Bissmillahirrahmanirrahiim', style: 'header',alignment: 'center', bold: true },
    { text: 'FORMULIR PENDAFTARAN SANTRI BARU', style: 'header',alignment: 'center', bold: true },
    { text: 'TAHUN PELAJARAN 2017 /2018', style: 'header',alignment: 'center', bold: true },
    { margin: 5, text:'' },
      
    //open image
    {
      image:'data:image/png;base64,<?= $img1; ?>' ,
      width: 250,
      alignment: 'center',
       },

    {
      margin: 10,
      text:''
    },
      //nama lengkap
        {
          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '1. Nama Lengkap'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $data->nl_siswa; ?>'
            },
          ]
        },

        //nama panggilan
        {

          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '2. Nama Panggilan'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $data->np_siswa; ?>'
            },
          ],
        },

        //jenis kelamin
        {

          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '3. Jenis Kelamin'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $data->jk_siswa; ?>'
            },
          ],
        },

        //Kelahiran
        {
          margin: [20,3,30,5],
           text:'',
         text : '4. kelahiran',},

          // sub Kelahiran
              {
                margin: [35,0],
                 text:'',

                columns: [
                  {
                    width: 160,
                    fontSize: 11,
                    text: 'a. Tempat Lahir'
                  },
                  {
                    width: 10,
                    text: ':'
                  },
                  {
                    width: '*',
                    fontSize: 11,
                    text: '<?= $data->tmp_lahir; ?>'
                  },
                ],
              },
              // sub Kelahiran
              {

                margin: [35,0],
                 text:'',
                

                columns: [
                  {
                    width: 160,
                    fontSize: 11,
                    text: 'b. Tanggal Lahir'
                  },
                  {
                    width: 10,
                    text: ':'
                  },
                  {
                    width: '*',
                    fontSize: 11,
                    text: '<?= $data->tgl_lahir; ?>',
                  },
                ],
              },


        //agama
        {

          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '5. Agama'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $data->agama_siswa; ?>'
            },
          ],
       
        },

        //Asal Sekolah
        {

          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '6. Asal Sekolah'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $data->asal_sekolah; ?>'
            },
          ],
       
        },

        //sub asal sekolah
              {
                margin: [35,0],
                 text:'',

                columns: [
                  {
                    width: 160,
                    fontSize: 11,
                    text: 'No Ijazah SD'
                  },
                  {
                    width: 10,
                    text: ':'
                  },
                  {
                    width: '*',
                    fontSize: 11,
                    text: '<?= $data->ijazah; ?>'
                  },
                ],
              },
              // sub asal Sekolah
              {

                margin: [35,0],
                 text:'',
                

                columns: [
                  {
                    width: 160,
                    fontSize: 11,
                    text: 'NISN'
                  },
                  {
                    width: 10,
                    text: ':'
                  },
                  {
                    width: '*',
                    fontSize: 11,
                    text: '<?= $data->nisn; ?>'
                  },
                ],
              },

              // sub asal Sekolah
              {

                margin: [35,0],
                 text:'',
                

                columns: [
                  {
                    width: 160,
                    fontSize: 11,
                    text: 'NIK'
                  },
                  {
                    width: 10,
                    text: ':'
                  },
                  {
                    width: '*',
                    fontSize: 11,
                    text: '<?= $data->nik; ?>'
                  },
                ],
              },

              // sub asal Sekolah
              {

                margin: [35,0],
                 text:'',
                

                columns: [
                  {
                    width: 160,
                    fontSize: 11,
                    text: 'SKHUN'
                  },
                  {
                    width: 10,
                    text: ':'
                  },
                  {
                    width: '*',
                    fontSize: 11,
                    text: '<?= $data->skhun; ?>'
                  },
                ],
              },

        // Kewarganegaraan
        {

          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '7. Kewarganegaraan'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $data->warga_siswa; ?>'
            },
          ],
       
        },

        //Anak Ke
        {

          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '8 Anak Ke. '
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $data->anak_ke; ?>'
            },
          ],
       
        },

        //Jumlah Saudara
        {
          margin: [20,3,30,5],
           text:'',
         text : '9. Jumlah Saudara',},

          // sub Saudara
              {
                margin: [35,0],
                 text:'',

                columns: [
                  {
                    width: 160,
                    fontSize: 11,
                    text: 'a. Saudara Kandung'
                  },
                  {
                    width: 10,
                    text: ':'
                  },
                  {
                    width: '*',
                    fontSize: 11,
                    text: '<?= $data->sdr_knd; ?>'
                  },
                ],
              },
              // sub Saudara
              {

                margin: [35,0],
                 text:'',
                

                columns: [
                  {
                    width: 160,
                    fontSize: 11,
                    text: 'b. Saudara tiri'
                  },
                  {
                    width: 10,
                    text: ':'
                  },
                  {
                    width: '*',
                    fontSize: 11,
                    text: '<?= $data->sdr_tir; ?>'
                  },
                ],
              },
              // sub Saudara
              {

                margin: [35,0],
                 text:'',
                

                columns: [
                  {
                    width: 160,
                    fontSize: 11,
                    text: 'c. Saudara Angkat'
                  },
                  {
                    width: 10,
                    text: ':'
                  },
                  {
                    width: '*',
                    fontSize: 11,
                    text: '<?= $data->sdr_ang; ?>'
                  },
                ],
              },

        //Bahasa Sehari hari
        {

          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '10. Bahasa Sehari-hari. '
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $data->bahasa; ?>'
            },
          ],
       
        },

        //Keadaan Jasmani
        {
          margin: [20,3,30,5],
           text:'',
         text : '11. Jumlah Saudara',},

          // sub Saudara
              {
                margin: [35,0],
                 text:'',

                columns: [
                  {
                    width: 160,
                    fontSize: 11,
                    text: 'a. Berat Badan'
                  },
                  {
                    width: 10,
                    text: ':'
                  },
                  {
                    width: '*',
                    fontSize: 11,
                    text: '<?= $data->berat; ?>'
                  },
                ],
              },
              // sub Saudara
              {

                margin: [35,0],
                 text:'',
                

                columns: [
                  {
                    width: 160,
                    fontSize: 11,
                    text: 'b. Tinggi Badan'
                  },
                  {
                    width: 10,
                    text: ':'
                  },
                  {
                    width: '*',
                    fontSize: 11,
                    text: '<?= $data->tinggi; ?>'
                  },
                ],
              },
              // sub Saudara
              {

                margin: [35,0],
                 text:'',
                

                columns: [
                  {
                    width: 160,
                    fontSize: 11,
                    text: 'c. Golongan Darah'
                  },
                  {
                    width: 10,
                    text: ':'
                  },
                  {
                    width: '*',
                    fontSize: 11,
                    text: '<?= $data->gol_dar; ?>'
                  },
                ],
              },
              // sub Saudara
              {

                margin: [35,0],
                 text:'',
                

                columns: [
                  {
                    width: 160,
                    fontSize: 11,
                    text: 'd. Penyakit Yang Pernah Diderita'
                  },
                  {
                    width: 10,
                    text: ':'
                  },
                  {
                    width: '*',
                    fontSize: 11,
                    text: '<?= $data->penyakit; ?>'
                  },
                ],
              },


        //Alamat
        {

          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '12. Alamat Lengkap. '
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $data->alamat; ?>'
            },
          ],
       
        },

        //Kode Pos
        {

          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 180,
              fontSize: 11,
              text: ' Kode Pos '
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $data->kode_pos; ?>'
            },
          ],
       
        },

        //No Telp
        {

          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '13. No Telp/HP. '
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $data->hp_siswa; ?>'
            },
          ],
       
        },
        //Tempat tinggal
        {

          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '14. Bertempat Tinggal Pada '
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $data->tinggal; ?>',
              pageBreak: 'after'
            },
          ],
       
        },
        <?php }; ?>
        //end siswa
<?php foreach ($ayah as $dad) {?>
  //Orang tua
  { text : 'A. ORANG TUA/WALI',margin: 1, bold: true, fontSize: 16},

  //Ayah
  { text : '*. AYAH KANDUNG',margin: 10, bold: true, fontSize: 14},
    //Nama Lengkap
        {
          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '1. Nama Lengkap'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $dad->nl_ayah; ?>'
            },
          ]
        },
    //TTL
        {
          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '2. Tempat/Tgl Lahir'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $dad->ttl_ayah; ?>.'
            },
          ]
        },
    //Agama
        {
          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '3. Agama'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $dad->agama_ayah; ?>'
            },
          ]
        },

    //Kewarganegaraan
        {
          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '4. Kewarganegaraan'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $dad->warga_ayah; ?>'
            },
          ]
        },

    //Pendidikan
        {
          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '5. Pendidikan Terakhir'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $dad->pend_ayah; ?>'
            },
          ]
        },

    //Pekerjaan
        {
          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '6. Pekerjaan'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $dad->kerja_ayah; ?>'
            },
          ]
        },

    //Penggasilan
        {
          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '7. Penghasilan'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $dad->gaji_ayah; ?>'
            },
          ]
        },

    //Alamat Rumah
        {
          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '8. Alamat Rumah'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $dad->rumah_ayah; ?>'
            },
          ]
        },

    //Alamat Kantor
        {
          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '9. Alamat Kantor'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $dad->kantor_ayah; ?>'
            },
          ]
        },

    //Agama
        {
          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '10. Pengalaman Organisasi'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $dad->organisasi_ayah; ?>'
            },
          ]
        },

<?php } ?>

<?php foreach ($ibu as $mom) { ?>

  //Ibu
  { text : '*. IBU KANDUNG',margin: 10, bold: true, fontSize: 14},
    //Nama Lengkap
        {
          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '1. Nama Lengkap'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $mom->nl_ibu; ?>'
            },
          ]
        },
    //TTL
        {
          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '2. Tempat/Tgl Lahir'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $mom->ttl_ibu; ?>.'
            },
          ]
        },
    //Agama
        {
          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '3. Agama'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $mom->agama_ibu; ?>'
            },
          ]
        },

    //Kewarganegaraan
        {
          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '4. Kewarganegaraan'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $mom->warga_ibu; ?>'
            },
          ]
        },

    //Pendidikan
        {
          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '5. Pendidikan Terakhir'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $mom->pend_ibu; ?>'
            },
          ]
        },

    //Pekerjaan
        {
          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '6. Pekerjaan'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $mom->kerja_ibu; ?>'
            },
          ]
        },

    //Penggasilan
        {
          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '7. Penghasilan'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $mom->gaji_ibu; ?>'
            },
          ]
        },

    //Alamat Rumah
        {
          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '8. Alamat Rumah'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $mom->rumah_ibu; ?>'
            },
          ]
        },

    //Alamat Kantor
        {
          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '9. Alamat Kantor'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $mom->kantor_ibu; ?>'
            },
          ]
        },

    //Agama
        {
          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '10. Pengalaman Organisasi'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $mom->organisasi_ibu; ?>'
            },
          ]
        },

<?php } ?>

<?php foreach ($wali as $wal) { ?>

  //Wali
  { text : '*. WALI SISWA',margin: 10, bold: true, fontSize: 14},
    //Nama Lengkap
        {
          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '1. Nama Lengkap'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $wal->nl_wali; ?>'
            },
          ]
        },
    //TTL
        {
          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '2. Tempat/Tgl Lahir'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $wal->ttl_wali; ?>.'
            },
          ]
        },
    //Agama
        {
          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '3. Agama'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $wal->agama_wali; ?>'
            },
          ]
        },

    //Kewarganegaraan
        {
          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '4. Kewarganegaraan'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $wal->warga_wali; ?>'
            },
          ]
        },

    //Pendidikan
        {
          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '5. Pendidikan Terakhir'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $wal->pend_wali; ?>'
            },
          ]
        },

    //Pekerjaan
        {
          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '6. Pekerjaan'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $wal->kerja_wali; ?>'
            },
          ]
        },

    //Penggasilan
        {
          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '7. Penghasilan'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $wal->gaji_wali; ?>'
            },
          ]
        },

    //Alamat Rumah
        {
          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '8. Alamat Rumah'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $wal->rumah_wali; ?>'
            },
          ]
        },

    //Alamat Kantor
        {
          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '9. Alamat Kantor'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $wal->kantor_wali; ?>'
            },
          ]
        },

    //Agama
        {
          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '10. Pengalaman Organisasi'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $wal->organisasi_wali; ?>',
              pageBreak:'after'
            },
          ]
        },

        <?php } ?>
        <?php foreach ($kemampuan as $mampu) { ?>

  //Data Kemampuan
  { text : 'B. DATA KEMAMPUAN SISWA',margin: 5, bold: true, fontSize: 16},


    //Nama Lengkap
        {
          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '1. Pelaksanaan sholat lima waktu'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $mampu->sholat; ?>'
            },
          ]
        },
    //TTL
        {
          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '2. Surat yang sudah dihafal'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $mampu->hafalan; ?>.'
            },
          ]
        },
    //Agama
        {
          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '3. Kemampuan membaca Al Quran'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $mampu->bacaan; ?>'
            },
          ]
        },

    //Hoby
        {
          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '4. Hobby/Kesukaan anak'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $mampu->hobi; ?>'
            },
          ]
        },

    //Prestasi
        {
          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '5. Prestasi yang pernah diraih'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $mampu->prestasi; ?>'
            },
          ]
        },

    //Sifat
        {
          margin: [20,3,30,5],
           text:'',
          

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '6. Karakteristik/sifat khusus  anak yang perlu diperhatikan'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $mampu->sifat; ?>'
            },
          ]
        },

  //Data Kesehatan
  { text : 'C. DATA KESEHATAN SISWA',margin: 5, bold: true, fontSize: 16},

    //Pendidikan
        {
          margin: [20,3,30,5],
           text:'',

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '1. Penyakit keras/kecelakaan yang pernah diderita'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $mampu->penyakit_keras; ?>',
              pageBreak: 'after'
            },
          ]
        },
    <?php } ?>

    <?php foreach ($surat as $mail) { ?>

    { text: 'Bissmillahirrahmanirrahiim', style: 'header',alignment: 'center', bold: true },
    { text: 'SURAT PERNYATAAN PELIMPAHAN PENDIDIKAN', style: 'header',alignment: 'center', bold: true },
    { text: 'DAN KESEDIAAN DANA ORANG TUA/WALI CALON SISWA', style: 'header',alignment: 'center', bold: true },
    { text: 'TAHUN PELAJARAN 2017 /2018', style: 'header',alignment: 'center', bold: true },
    { margin: 5, text:'' },

 //Pendidikan
        {
          margin: [20,3,30,5],
           text:'',

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: 'Nomor Pendaftaran'
            },
            {
              width: 10,
              text: ':'
            },
          {image:'data:image/png;base64,<?= $img2; ?>', width: 200},
          ],
        },

    //Nama Orang Tua
        {
          margin: [20,3,30,5],
           text:'',

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: 'Nama Orang Tua'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $mail->nama_ortu; ?>'
            },
          ]
        },
    //Alamat Orang Tua
        {
          margin: [20,3,30,5],
           text:'',

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: 'Alamat'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $mail->alamat; ?>'
            },
          ]
        },
    //Telp/Hp
        {
          margin: [20,3,30,5],
           text:'',

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: 'Telpon/Hp'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $mail->handphone; ?>'
            },
          ]
        },
    //Orang Tua/Wali calon siswa dari
        {
          margin: [20,3,30,5],
           text:'',

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: 'Orang Tua/Wali calon siswa dari'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $mail->ortu_dari; ?>'
            },
          ]
        },
  {text:'', margin:10},
  {text: "Dengan ikhlas menginfakan dana pendidikan kepada Pesantren Tahfidzul Qur'an Al Azzam SMP IT Bina Insani:",margin: [20,3,30,5], fontSize:12},
  {
    ol:[
        {
          margin: [20,3,30,5],
           text:'',

          columns: [
            {
              width: 235,
              fontSize: 11,
              text: 'Paket Pendidikan'
            },
            {
              width: 10,
              text: '*'
            },
            {
              width: '*',
              fontSize: 11,
              text: 'Rp. 1.700.000'
            },
          ]
        },
        {
          margin: [20,3,30,5],
           text:'',

          columns: [
            {
              width: 177,
              fontSize: 11,
              text: 'Bahan Seragam Santri'
            },
            {
              width: 58,
              text: '(4 stel)'
            },
            {
              width: 10,
              text: '*'
            },
            {
              width: '*',
              fontSize: 11,
              text: 'Rp. 900.000'
            },
          ]
        },
        {
          margin: [20,3,30,5],
           text:'',

          columns: [
            {
              width: 235,
              fontSize: 11,
              text: 'Perkap Asrama'
            },
            {
              width: 10,
              text: '*'
            },
            {
              width: '*',
              fontSize: 11,
              text: 'Rp. 3.000.000'
            },
          ]
        },
        {
          margin: [20,3,30,5],
           text:'',

          columns: [
            {
              width: 235,
              fontSize: 11,
              text: 'Wakaf Pembangunan'
            },
            {
              width: 10,
              text: '*'
            },
            {
              width: '*',
              fontSize: 11,
              text: 'Rp. 4.000.000'
            },
          ]
        },
        {
          margin: [20,3,30,5],
           text:'',

          columns: [
            {
              width: 235,
              fontSize: 11,
              text: 'Uang Syahriah Bulan Juli'
            },
            {
              width: 10,
              text: '*'
            },
            {
              width: '*',
              fontSize: 11,
              text: 'Rp. 975.000'
            },
          ]
        },
    ],
  },
    {
      margin: [33,3,30,5],
       text:'',

      columns: [
        {
          width: 246,
          fontSize: 11,
          text: 'Jumlah Total',
          bold: true
        },
        {
          width: '*',
          fontSize: 11,
          text: 'Rp. 10.575.000',
          bold: true
        },
      ]
    },

    { text: 'CATATAN', bold:true, margin:5 },
    { text: 'A. Penyelesaian Kesediaan Dana Pendidikan tersebut di atas dengan ketentuan sebagai berikut:', bold:true, margin:5 },
    { text: 'Pembayaran pertama saat daftar ulang menyelesaikan :',margin: [25,3,30,5] },
    {
      margin: [35,3,30,5],

      columns: [
        {
          width: 235,
          fontSize: 11,
          
          ol:[
            '50% Paket Pendidikan',
            '100% Biaya Seragam',
            '100% Perkap Asrama',
            '50% Wakaf Pembangunan',
            '100% Uang Syahriah Bulan Juli'
          ]
        }
      ]
    },
    { text: 'Pelunasan sisa kesediaan Dana Pendidikan paling lambat bulan Desember 2017.',margin: [25,3,30,5] },
    { text: 'B. Selaku Orang tua/wali siswa tersebut denan sungguh-sungguh penuh kesadaran kami menyatakan bahwa :', bold:true, margin:5 },
    {
      margin: [35,3,30,5],

      columns: [
        {
          width: 230,
          fontSize: 11,
          
          ol:[
            'Menyeruhkan sepenuhnya pendidikan calon siswa kepada pihak sekolah.',
            'Bersedia membimbing dan mengawasi calon siswa tersebut di lingkungan dan masyarakat.',
            'Apabila terjadi pengunduran diri pada putra/putri kami, maka 50% biata administrasi yang sudah dibayar kami infaqan kepada SMP IT Bina Insani.'
          ]
        }
      ]
    },
  { text: "Demikian pernyataan ini kami buat, semoga memberikan manfaat yang sebesar-besarnya pada pendidikan putra/putri kami dan mendapatkan ridho Allah Subhanallahu Wa Ta'ala. Amiin",margin: [25,3,30,5] },
  { text: '',margin: 15 },
  { text: 'Semarang, ............2017',margin: [25,3,43,5], alignment: 'right' },
    { text: 'Yang membuat penyataan,',margin: [25,3,30,5], alignment: 'right' },
  { text: '',margin: 25 },
    { text: '(...............................)',margin: [25,3,48,5], alignment: 'right', pageBreak:'after' },

<?php } ?>


<?php foreach ($kartu as $card) {
$src = base_url().'assets/upload/'.$card->foto;
$foto = base64_encode(file_get_contents($src));
 ?>



    { text: 'KARTU PENDAFTARAN', style: 'header',alignment: 'center', bold: true, fontSize:18 },
    { margin: 5, text:'' },

 //Pendidikan
        {
          margin: [20,3,30,5],
           text:'',

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: 'Nomor Pendaftaran'
            },
            {
              width: 10,
              text: ':'
            },
          {image:'data:image/png;base64,<?= $img3; ?>', width: 200},
          ],
        },

    //Nama Calon Siswa
        {
          margin: [20,3,30,5],
           text:'',

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: 'Nama Calon Siswa'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $card->nama_siswa; ?>'
            },
          ]
        },
    //Alamat Orang Tua
        {
          margin: [20,3,30,5],
           text:'',

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: 'Alamat'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $card->alamat; ?>'
            },
          ]
        },
    //Telp/Hp
        {
          margin: [20,3,30,5],
           text:'',

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: '<?= $card->handphone; ?>'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: 'Islam'
            },
          ]
        },
        { margin: 15, text:'' },
        {
          image:'data:image/png;base64,<?= $foto; ?>', width: 113, height:151, alignment:'right'
        },
        { margin: 15, text:'' },

        {text: 'Potong disini *)', bold: true,italic:true, margin:1},
        {
          canvas: [
              {
              type: 'line',
              x1: 40,
              y1: 20,
              x2: 600,
              y2: 20,
              lineWidth: 3,
            },
          ],
          margin:[-41,1,1,1]
        },
        {text: '', margin:30},
           { text: 'KARTU PENDAFTARAN', style: 'header',alignment: 'center', bold: true, fontSize:18 },
    { margin: 5, text:'' },

 //Pendidikan
        {
          margin: [20,3,30,5],
           text:'',

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: 'Nomor Pendaftaran'
            },
            {
              width: 10,
              text: ':'
            },
          {image:'data:image/png;base64,<?= $img3; ?>', width: 200},
          ],
        },

    //Nama Calon Siswa
        {
          margin: [20,3,30,5],
           text:'',

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: 'Nama Calon Siswa'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $card->nama_siswa; ?>'
            },
          ]
        },
    //Alamat Orang Tua
        {
          margin: [20,3,30,5],
           text:'',

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: 'Alamat'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $card->alamat; ?>'
            },
          ]
        },
    //Telp/Hp
        {
          margin: [20,3,30,5],
           text:'',

          columns: [
            {
              width: 175,
              fontSize: 11,
              text: 'Telepon'
            },
            {
              width: 10,
              text: ':'
            },
            {
              width: '*',
              fontSize: 11,
              text: '<?= $card->handphone; ?>'
            },
          ]
        },
        { margin: 15, text:'' },
        {
          image:'data:image/png;base64,<?= $foto; ?>', width: 113, height:151, alignment:'right', margin:5
        },
        { margin: 15, text:'' },
  ],
<?php } ?>
  styles: {
    header: {
      bold: true,
      fontSize: 15
    }
  },
  defaultStyle: {
    fontSize: 12,
  },
  
    pageSize: 'LEGAL',
    pageMargins: [22,100,42,22]
      
}      
   // }// end varible dd

         </script>
         <div class="container text-center">
          <div class="jumbotron text-center">
            <h1>PENDAFTARAN BERHASIL!</h1> 
            <p>Silahkan cetak formulir untuk dibawa pada saat tes dengan menekan tombol cetak di bawah ini.</p> 
            <p>*NB: Harap cetak dengan menggunakan ukuran kertas legal atau F4.</p> 
          </div>
         <button onclick="pdfMake.createPdf(dd).open();" class="button btn-primary btn-lg">CETAK</button>
        </div>

        </div>
      </div>

    </div><!-- end main_container -->
  </div><!-- end container body -->

<script>
</script>

</body>
