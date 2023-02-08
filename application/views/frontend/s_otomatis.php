<section class="page-section">
    <div class="container">
        <?php if ($this->session->flashdata('success') == TRUE) : ?>
            <?= $this->session->flashdata('success'); ?>
        <?php endif; ?>
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Buat Surat Pengajuan Otomatis</h2>
            <h3 class="section-subheading text-muted">Isi Form Surat Dibawah:</h3>
        </div>

        <?= form_open_multipart('suratotomatis/cetak') ?>
        <div class="text-justify pl-5 pr-5">
            <div class="row">

                <div class="col-lg-6 mt-2">
                    <label for="tempat">Tempat Kerja Praktek</label>
                    <input type="text" name="tempat" class="form-control" placeholder="Contoh : PT IndiHome Surabaya">
                </div>
                <div class="col-lg-6 mt-2">
                    <label for="alamat">Alamat Kerja Praktek</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Contoh : Jl. Dinoyo No.48, Keputaran, Tegalsari, Surabaya">
                </div>
                <div class="col-lg-6 mt-2">
                    <label for="tahun_ajaran">Tahun Ajaran</label>
                    <input type="text" name="tahun_ajaran" class="form-control" placeholder="Contoh : 2021/2022">
                </div>
                <div class="col-lg-6 mt-2">
                    <label for="durasi_kp">Durasi Kerja Praktek</label>
                    <input type="text" name="durasi_kp" class="form-control" placeholder="Contoh : 6 Bulan">
                </div>
                <div class="col-lg-6 mt-2">
                    <label for="tanggal_kp">Tanggal Kerja Praktek</label>
                    <input type="text" name="tanggal_kp" class="form-control" placeholder="Contoh : 11 Juli 2022 s/d 9 Desember 2022">
                </div>
                <div class="col-lg-6 mt-2">
                    <label for="nama1">Nama Mahasiswa 1</label>
                    <input type="text" name="nama1" class="form-control" placeholder="Contoh : Siti Ayu Mutmainatin">
                </div>
                <div class="col-lg-6 mt-2">
                    <label for="nama2">Nama Mahasiswa 2</label>
                    <input type="text" name="nama2" class="form-control" placeholder="Contoh : Nur Alifia">
                </div>
                <div class="col-lg-6 mt-2">
                    <label for="nama3">Nama Mahasiswa 3</label>
                    <input type="text" name="nama3" class="form-control" placeholder="Contoh : Ramadhanita Putri H. P">
                </div>
                <div class="col-lg-6 mt-2">
                    <label for="nrp1">NRP Mahasiswa 1</label>
                    <input type="text" name="nrp1" class="form-control" placeholder="Contoh : 3120521001">
                </div>
                <div class="col-lg-6 mt-2">
                    <label for="nrp2">NRP Mahasiswa 2</label>
                    <input type="text" name="nrp2" class="form-control" placeholder="Contoh : 3120521015">
                </div>
                <div class="col-lg-6 mt-2">
                    <label for="nrp3">NRP Mahasiswa 3</label>
                    <input type="text" name="nrp3" class="form-control" placeholder="Contoh : 3120521019">
                </div>
                <div class="col-lg-6 mt-2">
                    <label for="prodi">Program Studi</label>
                    <input type="text" name="prodi" class="form-control" placeholder="Contoh : Teknik Informatika">
                </div>

            </div>

            <div class="row mt-4">
                <div class="col-lg-3">
                    <button type="submit" class="btn btn-block btn-primary">BUAT SURAT</button>
                </div>
            </div>
        </div>
        <?= form_close() ?>

    </div>
</section>
