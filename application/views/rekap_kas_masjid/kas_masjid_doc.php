<!doctype html>
<html>
    <head>
        <title>Kas Masjid</title>
        <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Kas_masjid List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Keterangan Kas</th>
                <th>Nominal Masuk</th>
                <th>Nominal Keluar</th>
                <th>Jenis Kas</th>
            </tr>

            <?php
                foreach ($rekap_kas_masjid_data as $rekap_kas_masjid)
                {
            ?>
                <tr>
                    <td><?= ++$start ?></td>
                    <td><?= $rekap_kas_masjid->tgl_km ?></td>
                    <td><?= $rekap_kas_masjid->uraian_km ?></td>
                    <td><?= number_format($rekap_kas_masjid->masuk, 0, ',', '.') ?></td>
                    <td><?= number_format($rekap_kas_masjid->keluar, 0, ',', '.') ?></td>
                    <td><?= $rekap_kas_masjid->jenis ?></td>	
                </tr>
            <?php
                }
            ?>
        </table>
    </body>
</html>