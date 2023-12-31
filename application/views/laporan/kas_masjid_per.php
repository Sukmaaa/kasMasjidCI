<?php
  $dt1 = $_POST["tgl_1"];
  $dt2 = $_POST["tgl_2"];
?>

<?php
  $koneksi = new mysqli ("localhost","root","","db_kas_masjid");
  $sql = $koneksi->query("SELECT SUM(masuk) as tot_masuk  from kas_masjid where jenis='Masuk' and tgl_km BETWEEN '$dt1' AND '$dt2'");
  while ($data= $sql->fetch_assoc()) {
    $masuk=$data['tot_masuk'];
  }
  $koneksi = new mysqli ("localhost","root","","db_kas_masjid");
  $sql = $koneksi->query("SELECT SUM(keluar) as tot_keluar  from kas_masjid where jenis='Keluar' and tgl_km BETWEEN '$dt1' AND '$dt2'");
  while ($data= $sql->fetch_assoc()) {
    $keluar=$data['tot_keluar'];
  }

  $saldo= $masuk-$keluar;
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Laporan Kas Masjid</title>
</head>
<body>
  <center>
  <h2>Laporan Rekapitulasi Kas Masjid</h2>
  <h3>Masjid Al-Ikhlas</h3>
  <p>Periode : <?php $a=$dt1; echo date("d-M-Y", strtotime($a))?> s/d <?php $b=$dt2; echo date("d-M-Y", strtotime($b))?>
  <p>________________________________________________________________________</p>

    <table border="1" cellspacing="0">
      <thead>
        <tr>
          <th>No.</th>
          <th>Tanggal</th>
          <th>Uraian</th>
          <th>Pemasukan</th>
          <th>Pengeluaran</th>
        </tr>
      </thead>
      <tbody>
          <?php
            if(isset($_POST["btnCetak"])){
              $sql_tampil = "select * from kas_masjid where tgl_km BETWEEN '$dt1' AND '$dt2' order by tgl_km asc";
            }
            $query_tampil = mysqli_query($koneksi, $sql_tampil);
            $no=1;
            while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
          ?>

            <tr>
                <td><?= $no; ?></td>
                <td><?php  $tgl = $data['tgl_km']; echo date("d/M/Y", strtotime($tgl))?></td> 
                <td><?= $data['uraian_km']; ?></td>
                <td align="right"><?= number_format($data['masuk'], 0, ',', '.'); ?></td>  
                <td align="right"><?= number_format($data['keluar'], 0, ',', '.'); ?></td>   
            </tr>

          <?php
              $no++;
            }
          ?>
      </tbody>
      <tr>
          <td colspan="3">Total Pemasukan</td>
          <td colspan="2"><?= $masuk; ?></td>
      </tr>
      <tr>
          <td colspan="4">Total Pengeluaran</td>
          <td><?= $keluar; ?></td>
      </tr>
      <tr>
          <td colspan="3">Saldo Kas Masjid</td>
          <td colspan="2"><?= $saldo; ?></td>
      </tr>
    </table>
  </center>

  <script>
      window.print();
  </script>
</body>
</html>