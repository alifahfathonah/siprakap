<section class="page-section">
    <div class="container">
        <?php if ($this->session->flashdata('success') == TRUE) : ?>
            <?= $this->session->flashdata('success'); ?>
        <?php endif; ?>
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Tambah Surat Balasan Kerja Praktek</h2>
            <h3 class="section-subheading text-muted">Isi Form Surat Dibawah:</h3>
        </div>
        <?php echo form_open_multipart(); ?>
        <div class="text-justify pl-5 pr-5">
            <div class="row">
                <div class="col-lg-6">
                    <label>Tempat Kerja Praktek</label>
                    <input class="form-control" name="nama_surat" id="nama_surat" type="text" value="<?= set_value('nama_surat'); ?>" />
                </div>
                <?= form_error('nama_surat', '<div class="text-danger">', '</div>'); ?>

                <div class="col-lg-6">
                    <label>Tanggal Surat</label>
                    <input type="date" class="form-control" name="tanggal_surat" id="tanggal_surat" />
                </div>
                <?= form_error('tanggal_surat', '<div class="text-danger">', '</div>'); ?>

                <div class="col-lg-6 mt-2">
                    <label>File Surat</label>
                    <input class="form-control" name="file_surat" id="file_surat" type="file" <?= set_value('file_surat'); ?> />
                </div>
                <?= form_error('file_surat', '<div class="text-danger">', '</div>'); ?>

                <div class="col-lg-6 mt-2">
                    <label>Keterangan Surat</label>
                    <input class="form-control" name="keterangan_surat" id="keterangan_surat" type="text" <?= set_value('keterangan_surat'); ?> />
                </div>
                <?= form_error('keterangan_surat', '<div class="text-danger">', '</div>'); ?>
                
            </div>

            <div class="row mt-4">
                <div class="col-lg-3">
                    <button type="submit" class="btn btn-block btn-primary">BUAT SURAT</button>
                </div> <br> <br> <br> <br> <br>
            </div>

            </form>
        </div>
    </div>
</section>
