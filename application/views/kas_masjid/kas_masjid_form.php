<div class="content-wrapper">
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA KAS_MASJID</h3>
            </div>
            <form action="<?= $action; ?>" method="post">
				<table class='table table-bordered>'>       
					<tr>
						<td width='200'>
							Tanggal <?= form_error('tgl_km') ?>
						</td>
						<td>
							<input type="date" class="form-control" name="tgl_km" id="tgl_km" placeholder="Tgl Km" value="<?= $tgl_km; ?>" />
						</td>
					</tr>

					<tr>
						<td width='200'>
							Keterangan Kas <?= form_error('uraian_km') ?>
						</td>
						<td>
							<input type="text" class="form-control" name="uraian_km" id="uraian_km" placeholder="Keterangan Kas" value="<?= $uraian_km; ?>" />
						</td>
					</tr>

					<tr>
						<td width='200'>
							Nominal Masuk <?= form_error('masuk') ?>
						</td>
						<td>
							<input type="number" class="form-control" name="masuk" id="masuk" placeholder="Nominal Masuk" value="<?= $masuk; ?>" />
						</td>
					</tr>
					
					<tr>
						<td></td>
						<td>
							<input type="hidden" name="id_km" value="<?= $id_km; ?>" /> 
							<button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?= $button ?>
							</button> 
							<a href="<?= site_url('kas_masjid') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</section>
</div>