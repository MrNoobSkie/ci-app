<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $mahasiswa['nama']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $mahasiswa['nrp']; ?></h6>
            <p class="card-text"><?= $mahasiswa['email']; ?></p>
            <p class="card-text"><?= $mahasiswa['jurusan']; ?></p>
            <a href="<?= base_url(); ?>mahasiswa" class="card-link">kembali</a>
        </div>
        </div>
        </div>
    </div>
</div> 