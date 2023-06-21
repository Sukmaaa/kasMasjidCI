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
            </tr>
            <?php
                foreach ($kas_masjid_data as $kas_masjid)
                {
            ?>
                <tr>
                    <td><?= ++$start ?></td>
                    <td><?= $kas_masjid->tgl_km ?></td>
                    <td><?= $kas_masjid->uraian_km ?></td>
                    <td><?= number_format($kas_masjid->masuk, 0, ',', '.') ?></td>
                </tr>
            <?php
                }
            ?>
        </table>
    </body>
</html>