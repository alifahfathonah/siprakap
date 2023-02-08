<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="purple">
                        <i class="material-icons">event_note</i>
                    </div>
                    <div class="card-content">
                        <p class="category">Pengajuan</p>
                        <h3 class="card-title"><?= $this->db->get('pengajuan_surat')->num_rows(); ?></h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons text-primary">info</i>
                            <span class="text-primary">Jumlah Pengajuan</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="rose">
                        <i class="material-icons">mark_email_unread</i>
                    </div>
                    <div class="card-content">
                        <p class="category">Surat Masuk</p>
                        <h3 class="card-title"><?= $this->db->get('surat_keluar')->num_rows(); ?></h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons text-rose">info</i>
                            <span class="text-rose">Jumlah Surat Masuk</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="green">
                        <i class="material-icons">message</i>
                    </div>
                    <div class="card-content">
                        <p class="category">Surat Balasan</p>
                        <h3 class="card-title"><?= $this->db->get('surat_masuk')->num_rows(); ?></h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons text-success">info</i>
                            <span class="text-success">Jumlah Surat Balasan</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="blue">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="card-content">
                        <p class="category">User</p>
                        <h3 class="card-title"><?= $this->db->get('user')->num_rows(); ?></h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons text-info">info</i>
                            <span class="text-info">Jumlah User</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>