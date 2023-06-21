<div class="content-wrapper">
  <section class="content">
      <div class="box box-warning box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">INPUT DATA USERS</h3>
        </div>
        <form action="<?= $action; ?>" method="post">
        
          <table class='table table-bordered>'>

            <tr>
              <td width='200'>
                Username <?= form_error('username') ?>
              </td>
              <td>
                <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?= $username; ?>" />
              </td>
            </tr>

            <?php if ($this->uri->segment(2) =='create' || $this->uri->segment(2) =='create_action' ) { ?>
              <tr>
                <td width='200'>
                  Password <?= form_error('password') ?>
                </td>
                <td>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?= $password; ?>" />
                </td>
              </tr>
            <?php }else{ ?>
            <?php } ?>

            <tr>
              <td width='200'>
                Nama <?= form_error('nama') ?>
              </td>
              <td>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?= $nama; ?>" />
              </td>
            </tr>

            <tr>
              <td width='200'>
                Email <?= form_error('email') ?>
              </td>
              <td>
                <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?= $email; ?>" />
              </td>
            </tr>

            <tr>
              <td width='200'>
                Alamat <?= form_error('alamat') ?>
              </td>
              <td>
                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?= $alamat; ?>" />
              </td>
            </tr>

            <tr>
              <td width='200'>
                Kota <?= form_error('kota') ?>
              </td>
              <td>
                <input type="text" class="form-control" name="kota" id="kota" placeholder="Kota" value="<?= $kota; ?>" />
              </td>
            </tr>

            <tr>
              <td width='200'>
                Provinsi <?= form_error('provinsi') ?>
              </td>
              <td>
                <input type="text" class="form-control" name="provinsi" id="provinsi" placeholder="Provinsi" value="<?= $provinsi; ?>" />
              </td>
            </tr>

            <tr>
              <td width='200'>
                Telepon <?= form_error('telepon') ?>
              </td>
              <td>
                <input type="text" class="form-control" name="telepon" id="telepon" placeholder="Telepon" value="<?= $telepon; ?>" />
              </td>
            </tr>

            <tr>
              <td width='200'>
                User Level <?= form_error('id_level') ?>
              </td>
              <td>
                <select class="form-control" name="id_level" id="id_level">
                  <option value=''>-- Pilih --</option>
                  <?php foreach ($coba as $rows) { ?>
                    <?php if ($data_user['nama_user_level']==$rows['nama_user_level']) { ?>
                    <option value="<?= $rows['id_level']?>" selected><?= $rows['nama_user_level'] ?></option>       
                  <?php }else{ ?>
                      <option value="<?= $rows['id_level']?>"><?= $rows['nama_user_level'] ?></option> 
                    <?php } ?>
                  <?php } ?>
                </select>
              </td>
            </tr>

            <tr>
              <td width='200'>Status User <?= form_error('is_aktive') ?></td>
              <td>
              <select class="form-control" name="is_aktive">
                <?php $is_aktive = $data_user['is_aktive'] ?>
                <?php if ($is_aktive==1) { ?>
                  <option value="1" selected>Aktive</option>
                  <option value="2">Non Aktive</option>
                <?php }else if ($is_aktive==2){ ?>
                  <option value="1">Aktive</option>
                  <option value="2" selected>Non Aktive</option>
                <?php }else {?>
                  <option value="">-- Pilih --</option>
                  <option value="1">Aktive</option>
                  <option value="2" >Non Aktive</option>
                <?php } ?>
              </select>
              </td>
            </tr>
            <tr>
              <td></td>
              <td>
                <input type="hidden" name="id_username" value="<?= $id_username; ?>" /> 
                <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?= $button ?></button> 
                <a href="<?= site_url('users') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
              </td>
            </tr>
          </table>
        </form>
      </div>
  </section>
</div>