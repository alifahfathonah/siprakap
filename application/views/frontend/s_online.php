<section class="page-section">
    <div class="container">
        <?php if ($this->session->flashdata('success') == TRUE) : ?>
            <?= $this->session->flashdata('success'); ?>
        <?php endif; ?>
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Pengajuan Surat Kerja Praktek</h2>
            <h3 class="section-subheading text-muted">Isi Form Pengajuan Surat Dibawah:</h3>
        </div>
        <div class="text-justify pl-5 pr-5">
            <?= form_open_multipart('suratonline/ajukan', 'id="ajukanSurat"') ?>
            <div class="row">
                <div class="col-lg-6">
                    <label for="nik">NRP</label>
                    <?= form_input(['name' => 'nik', 'id' => 'nik', 'class' => 'form-control', "required" => "required", 'placeholder' => 'Silahkan masukkan NRP anda']); ?>
                </div>
                <div class="col-lg-6">
                    <label for="nama">Nama Mahasiswa</label>
                    <?= form_input(['name' => 'nama', 'id' => 'nama', 'class' => 'form-control', "required" => "required", 'placeholder' => 'Silahkan masukkan nama anda']); ?>
                </div>
                <div class="col-lg-6 mt-2">
                    <label for="no_hp">Tempat Kerja Praktek</label>
                    <?= form_input(['type' => 'text', 'name' => 'no_hp', 'id' => 'no_hp', 'class' => 'form-control', "required" => "required", 'placeholder' => 'Silahkan masukkan tempat KP']); ?>
                </div>
                <div class="col-lg-6 mt-2">
                    <label for="jenis">Program Studi</label>
                    <?= form_dropdown('jenis_surat', $options, '', ['id' => 'jenis', 'class' => 'form-control']); ?>
                </div>
                <div class="col-lg-12 mt-2">
                    <label for="file">File Berkas Surat</label>
                    <?= form_upload(['name' => 'file', 'id' => 'file', 'class' => 'form-control']) ?> <br>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-lg-4">
                    <button type="submit" class="btn btn-block btn-primary">KIRIM PERMOHONAN</button>
                </div>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</section>
