<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fa fa-info"></i> Total Pengeluaran Masjid</h5>
                    <?php
                        $koneksi = new mysqli ("localhost","root","","db_kas_masjid");
                        $sql = $koneksi->query("SELECT SUM(keluar) as tot_masuk  from kas_masjid where jenis='Keluar'");
                        while ($data= $sql->fetch_assoc()) {
                    ?>
                    <h2>
                        <?= 'Rp. '. number_format($data['tot_masuk'], 0, ',', '.'); }?>
                    </h2>
                </div>

                <div class="box-header">
                    <h3 class="box-title">KELOLA DATA KAS_MASJID</h3>
                </div>
        
                <div class="box-body">
                    <div class='row'>
                        <div class='col-md-9'>
                            <div style="padding-bottom: 10px;"'>
                                <?= anchor(site_url('kas_masjid_keluar/create'), '<i class="fa fa-wpforms" aria-hidden="true"></i> Tambah Data', 'class="btn btn-danger btn-sm"'); ?>
                                <?= anchor(site_url('kas_masjid_keluar/excel'), '<i class="fa fa-file-excel-o" aria-hidden="true"></i> Export Ms Excel', 'class="btn btn-success btn-sm"'); ?>
                                <?= anchor(site_url('kas_masjid_keluar/word'), '<i class="fa fa-file-word-o" aria-hidden="true"></i> Export Ms Word', 'class="btn btn-primary btn-sm"'); ?></div>
                            </div>

                            <div class='col-md-3'>
                                <form action="<?= site_url('kas_masjid_keluar/index'); ?>" class="form-inline" method="get">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="q" value="<?= $q; ?>">
                                        <span class="input-group-btn">
                                            <?php 
                                                if ($q <> '')
                                                {
                                                    ?>
                                                    <a href="<?= site_url('kas_masjid_keluar'); ?>" class="btn btn-sm btn-default">Reset</a>
                                                    <?php
                                                }
                                            ?>
                                        <button class="btn btn-sm btn-primary" type="submit">Search</button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
        
                        <div class="row" style="margin-bottom: 10px">
                            <div class="col-md-4 text-center">
                                <div style="margin-top: 8px" id="message">
                                    <?= $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                                </div>
                            </div>
                            <div class="col-md-1 text-right">
                            </div>
                            <div class="col-md-3 text-right">
                            </div>
                        </div>
                        <div class="box-body" style="overflow-x: scroll; ">
                            <table class="table table-bordered" style="margin-bottom: 10px">
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Keterangan Kas</th>
                                    <th>Nominal Keluar</th>
                                    <th>Action</th>
                                </tr>
                                <?php
                                    foreach ($kas_masjid_keluar_data as $kas_masjid_keluar)
                                    {
                                ?>
                                    <tr>
                                        <td width="10px"><?= ++$start ?></td>
                                        <td><?= $kas_masjid_keluar->tgl_km ?></td>
                                        <td><?= $kas_masjid_keluar->uraian_km ?></td>
                                        <td><?= number_format($kas_masjid_keluar->keluar, 0, ',', '.') ?></td>
                                        <td style="text-align:center" width="200px">
                                            <?php 
                                            echo anchor(site_url('kas_masjid_keluar/read/'.$kas_masjid_keluar->id_km),'<i class="fa fa-eye" aria-hidden="true"></i>','class="btn btn-success btn-sm"'); 
                                            echo '  '; 
                                            echo anchor(site_url('kas_masjid_keluar/update/'.$kas_masjid_keluar->id_km),'<i class="fa fa-pencil-square-o" aria-hidden="true"></i>','class="btn btn-primary btn-sm"'); 
                                            echo '  '; 
                                            echo anchor(site_url('kas_masjid_keluar/delete/'.$kas_masjid_keluar->id_km),'<i class="fa fa-trash-o" aria-hidden="true"></i>','class="btn btn-danger btn-sm" Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
                                            ?>
                                        </td>
                                    </tr>
                                <?php
                                    }
                                ?>
                            </table>
                            <div class="row">
                                <div class="col-md-6">
                            </div>
                            <div class="col-md-6 text-right">
                                <?= $pagination ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>