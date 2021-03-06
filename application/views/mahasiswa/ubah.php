<div class="container mt-5">
    <div class="row-mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Ubah Data Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa['nama']; ?>">
                            <div class="form-text text-danger"><?= form_error('nama'); ?></div>
                        </div>

                        <div class="mb-3">
                            <label for="nrp" class="form-label">Nrp</label>
                            <input type="text" class="form-control" id="nrp" name="nrp" value="<?= $mahasiswa['nrp']; ?>">
                            <div class="form-text text-danger"><?= form_error('nrp'); ?></div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?= $mahasiswa['email']; ?>">
                            <div class="form-text text-danger"><?= form_error('email'); ?></div>
                        </div>

                        <div class="mb-3">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-select" aria-label="jurusan" id="jurusan" name="jurusan">
                            <?php foreach($jurusan as $j) : ?>
                                <?php if($j == $mahasiswa['jurusan']) : ?>
                                    <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                <?php else : ?>
                                    <option value="<?= $j; ?>"><?= $j; ?></option>
                                <?php endif;?>
                            <?php endforeach; ?>
                        </select>
                        </div>

                        <button type="submit" class="btn btn-primary float-end" name="ubah">
                            Ubah
                        </button>
                    </form>
                </div>
            </div>
                
        </div>
    </div>
</div>

