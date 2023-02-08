<section class="page-section">
    <div class="container">
        <?php if ($this->session->flashdata('success') == TRUE) : ?>
            <?= $this->session->flashdata('success'); ?>
        <?php endif; ?>
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Akun Mahasiswa</h2>
            <h3 class="section-subheading text-muted">Ubah Data Diri Dibawah:</h3>
        </div>
        <div class="text-justify pl-5 pr-5">
            <?php echo form_open_multipart(); ?>
            <div class="row">
                <div class="col-lg-12">
                    <label for="username">Username</label>
                    <input class="form-control" name="username" id="username" type="text" value="<?= $user['username'] ?>" />
                </div>
                <?= form_error('username', '<div class="text-danger">', '</div>'); ?>

                <div class="col-lg-12 mt-2">
                    <label for="password">Password</label>
                    <input class="form-control" name="password" id="password" type="password" value="<?= $user['password'] ?>" />
                </div>
                <?= form_error('password', '<div class="text-danger">', '</div>'); ?>

                <div class="col-lg-12 mt-2">
                    <label for="password2">Konfirmasi Password</label>
                    <input class="form-control" name="password2" id="password2" type="password" value="<?= $user['password'] ?>" />
                </div>
                <?= form_error('password2', '<div class="text-danger">', '</div>'); ?>
            </div>

            <div class="row mt-4">
                <div class="col-lg-2">
                    <button type="submit" class="btn btn-block btn-primary">SIMPAN</button>
                </div>
            </div>
            <?= form_close() ?>

            <div class="row mt-4">
				<table class="table text-left">
					<tr>
						<td>
							<a class="btn btn-outline-info" href="<?= base_url('logout')?>"><i class="fa fa-user" aria-hidden="true"></i>&nbsp; Logout</a>
						</td>
					</tr>
				</table>
			</div>

        </div>
    </div>
</section>
