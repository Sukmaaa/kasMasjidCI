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
        <h2>User_level List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		        <th>Nama User Level</th>
            </tr>

            <?php
                foreach ($user_level_data as $user_level)
                {
            ?>
                <tr>
		            <td><?= ++$start ?></td>
		            <td><?= $user_level->nama_user_level ?></td>	
                </tr>
            <?php
                }
            ?>
        </table>
    </body>
</html>