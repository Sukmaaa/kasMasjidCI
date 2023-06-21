<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <?php
                    $koneksi = new mysqli ("localhost","root","","db_kas_masjid");
                    $sql = $koneksi->query("SELECT SUM(masuk) as tot_masuk  from kas_masjid where jenis='Masuk'");
                    
                    while ($data= $sql->fetch_assoc()) {
                        $masuk=$data['tot_masuk'];
                    }
                ?>

                <?php
                    $koneksi = new mysqli ("localhost","root","","db_kas_masjid");
                    $sql = $koneksi->query("SELECT SUM(keluar) as tot_keluar  from kas_masjid where jenis='Keluar'");
                    
                    while ($data= $sql->fetch_assoc()) {
                        $keluar=$data['tot_keluar'];
                    }
                ?>

                <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fa fa-info"></i> Saldo Kas Masjid</h5>
                    <h5>Pemasukan :
                        <?php
                            $rupiah = number_format($masuk, 0, ',', '.');
                            echo 'Rp. '.$rupiah;
                        ?>
                    </h5>

                    <h5>Pengeluaran :
                        <?php
                            $rupiah = number_format($keluar, 0, ',', '.');
                            echo 'Rp. '. $rupiah;
                        ?>
                    </h5>
                    <hr>

                    <h3>Saldo Akhir :
                        <?php
                            $saldo= $masuk-$keluar;
                            $rupiah = number_format($saldo, 0, ',', '.');
                            echo 'Rp. '. $rupiah;
                        ?>
                    </h3>
                </div>

                <div class="box-header">
                    <h3 class="box-title">KELOLA DATA KAS_MASJID</h3>
                </div>
                <div class="box-body">
                    <div class='row'>
                        <div class='col-md-9'>
                            <div style="padding-bottom: 10px;"'>
                                <?= anchor(site_url('rekap_kas_masjid/create'), '<i class="fa fa-wpforms" aria-hidden="true"></i> Tambah Data', 'class="btn btn-danger btn-sm"'); ?>
                                <?= anchor(site_url('rekap_kas_masjid/excel'), '<i class="fa fa-file-excel-o" aria-hidden="true"></i> Export Ms Excel', 'class="btn btn-success btn-sm"'); ?>
                                <?= anchor(site_url('rekap_kas_masjid/word'), '<i class="fa fa-file-word-o" aria-hidden="true"></i> Export Ms Word', 'class="btn btn-primary btn-sm"'); ?></div>
                            </div>
                            <div class='col-md-3'>
                                <form action="<?= site_url('rekap_kas_masjid/index'); ?>" class="form-inline" method="get">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="q" value="<?= $q; ?>">
                                            <span class="input-group-btn">
                                                <?php 
                                                    if ($q <> '')
                                                    {
                                                        ?>
                                                        <a href="<?= site_url('rekap_kas_masjid'); ?>" class="btn btn-sm btn-default">Reset</a>
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
                            <div class="box-body" style="overflow-x: scroll;">
                                <table class="table table-bordered" style="margin-bottom: 10px">
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Keterangan</th>
                                        <th>Nominal Masuk</th>
                                        <th>Nominal Keluar</th>
                                        <th>Jenis Kas</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php
                                        foreach ($rekap_kas_masjid_data as $rekap_kas_masjid)
                                        {
                                            ?>
                                            <tr>
                                                <td width="10px"><?= ++$start ?></td>
                                                <td><?= $rekap_kas_masjid->tgl_km ?></td>
                                                <td><?= $rekap_kas_masjid->uraian_km ?></td>
                                                <td><?= number_format($rekap_kas_masjid->masuk, 0, ',', '.'); ?></td>
                                                <td><?= number_format($rekap_kas_masjid->keluar, 0, ',', '.'); ?></td>
                                                <td><?= $rekap_kas_masjid->jenis ?></td>
                                                <td style="text-align:center" width="200px">
                                                    <?php 
                                                    echo anchor(site_url('rekap_kas_masjid/read/'.$rekap_kas_masjid->id_km),'<i class="fa fa-eye" aria-hidden="true"></i>','class="btn btn-success btn-sm"'); 
                                                    echo '  '; 
                                                    echo anchor(site_url('rekap_kas_masjid/update/'.$rekap_kas_masjid->id_km),'<i class="fa fa-pencil-square-o" aria-hidden="true"></i>','class="btn btn-primary btn-sm"'); 
                                                    echo '  '; 
                                                    echo anchor(site_url('rekap_kas_masjid/delete/'.$rekap_kas_masjid->id_km),'<i class="fa fa-trash-o" aria-hidden="true"></i>','class="btn btn-danger btn-sm" Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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