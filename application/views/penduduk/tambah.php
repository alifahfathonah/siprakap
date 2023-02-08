<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <?php echo form_open_multipart(); ?>
                    <!-- <form id="RegisterValidation" action="" method=""> -->
                    <div class="card-header card-header-icon" data-background-color="rose">
                        <i class="material-icons">assignment_ind</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Tambah Mahasiswa</h4>

                        <div class="form-group">
                            <label class="label-control">NRP</label>
                            <input class="form-control" name="nik" id="nik" type="text" value="<?= set_value('nik'); ?>" />
                        </div>
                        <?= form_error('nik', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group">
                            <label class="label-control">Nama Mahasiswa</label>
                            <input class="form-control" name="nama" id="nama" type="text" value="<?= set_value('nama'); ?>" />
                        </div>
                        <?= form_error('nama', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group">
                            <label class="label-control">Tempat Kerja Praktek</label>
                            <input class="form-control" name="no_hp" id="no_hp" type="text" value="<?= set_value('no_hp'); ?>" />
                        </div>
                        <?= form_error('no_hp', '<div class="text-danger">', '</div>'); ?>

                        <div class="category form-category">
                            <div class="form-footer text-right">
                                <a href="<?= base_url() ?>penduduk" class="btn btn-danger btn-fill">Kembali</a>
                                <button type="submit" class="btn btn-success btn-fill">simpan</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>