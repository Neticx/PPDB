
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA PENDAFTAR
                            </h2>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Tahun</th>
                                        <th>TTL</th>
                                        <th>Alamat</th>
                                        <th>Asal Sekolah</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Tahun</th>
                                        <th>TTL</th>
                                        <th>Alamat</th>
                                        <th>Asal Sekolah</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                <?php foreach ($all as $value => $key):?>
                                    <tr>
                                        <td><?php echo $key->id_siswa;  ?></td>
                                        <td><?php echo $key->nl_siswa;  ?></td>
                                        <td><?php echo $key->tahun;  ?></td>
                                        <td><?php echo $key->ttl;  ?></td>
                                        <td><?php echo $key->alamat;  ?></td>
                                        <td><?php echo $key->asal_sekolah;  ?></td>
                                        <td><a class="btn btn-primary" href="<?php echo site_url('cetak/'.$key->id_siswa); ?>"><i class="material-icons">print</i>Cetak</a>&nbsp<a class="btn btn-danger" href="<?php echo site_url('delete/'.$key->id_siswa); ?>"><i class="material-icons">delete_forever</i>Hapus</a></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>