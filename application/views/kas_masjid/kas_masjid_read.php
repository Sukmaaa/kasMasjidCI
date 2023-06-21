<!doctype html>
<html>
    <head>
        <title>Kas Masjid</title>
        <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Kas_masjid Read</h2>
        <table class="table">
            <tr>
                <td>
                    Tanggal</td><td><?= $tgl_km; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Keterangan Kas
                </td>
                <td>
                    <?= $uraian_km; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Nominal Masuk
                </td>
                <td>
                    <?= number_format($masuk, 0, ',', '.'); ?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <a href="<?= site_url('kas_masjid') ?>" class="btn btn-default">Cancel</a>
                </td>
            </tr>
	    </table>
    </body>
</html>