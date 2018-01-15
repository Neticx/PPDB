<section class="content">
  <div class="container-fluid">
      <div class="block-header">
          <h2>
              SMPIT BINA INSANI
              <small>Tahun Ajaran 2018/2019</a></small>
          </h2>
      </div>
      
      <!-- Exportable Table -->
      <div class="row clearfix">

        <?php
          
          $header = base_url().'assets/build/img/head.png';
          $im1 = base_url().'assets/build/img/1.png';
          $im2 = base_url().'assets/build/img/2.png';
          $im3 = base_url().'assets/build/img/3.png';
          $head = base64_encode(file_get_contents($header));
          $img1 = base64_encode(file_get_contents($im1));
          $img2 = base64_encode(file_get_contents($im2));
          $img3 = base64_encode(file_get_contents($im3));
          $src = base_url().'assets/upload/sample.png';
          $foto = base64_encode(file_get_contents($src));
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

                  { margin: 15, text:'' },
                  {
                    image:'data:image/png;base64,<?= $foto; ?>', width: 113, height:151, alignment:'right', margin:5
                  },
                  { margin: 15, text:'' },
            ],
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
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        CETAK FORMULIR
                    </h2>
                </div>
                <div class="body" style="text-align: center;">
                <button onclick="alert(pdfMake.createPdf(dd).open());" class="btn btn-col-green">Cetak</button>
                </div>
            </div>
          </div>
          <script type="text/javascript">
            // var string = doc.output('datauristring');
            // var iframe = "<iframe width='100%' height='100%' src='" + string + "'></iframe>"
            // var x = window.open();
            // x.document.open();
            // x.document.write(iframe);
            // x.document.close();
          </script>
         <!-- <div class="container text-center">
          <div class="jumbotron text-center">
            <h1>PENDAFTARAN BERHASIL!</h1> 
            <p>Silahkan cetak formulir untuk dibawa pada saat tes dengan menekan tombol cetak di bawah ini.</p> 
            <p>*NB: Harap cetak dengan menggunakan ukuran kertas legal atau F4.</p> 
          </div>
         <button onclick="pdfMake.createPdf(dd).open();" class="button btn-primary btn-lg">CETAK</button>
        </div> -->

        </div>
      </div>
</section>
