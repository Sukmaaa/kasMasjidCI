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
        <h2>Users List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Password</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Kota</th>
                <th>Provinsi</th>
                <th>Telepon</th>
                <th>Id Level</th>
                <th>Is Aktive</th>
                <th>Create Date</th>
            </tr>
            
            <?php
                foreach ($users_data as $users)
                {
            ?>
                <tr>
                    <td><?= ++$start ?></td>
                    <td><?= $users->username ?></td>
                    <td><?= $users->password ?></td>
                    <td><?= $users->nama ?></td>
                    <td><?= $users->email ?></td>
                    <td><?= $users->alamat ?></td>
                    <td><?= $users->kota ?></td>
                    <td><?= $users->provinsi ?></td>
                    <td><?= $users->telepon ?></td>
                    <td><?= $users->id_level ?></td>
                    <td><?= $users->is_aktive ?></td>
                    <td><?= $users->create_date ?></td>
                </tr>
            <?php
                }
            ?>
        </table>
    </body>
</html>