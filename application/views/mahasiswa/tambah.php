<div class="container mt-5">
    <div class="row-mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Tambah Data Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                            <div class="form-text text-danger"><?= form_error('nama'); ?></div>
                        </div>

                        <div class="mb-3">
                            <label for="nrp" class="form-label">Nrp</label>
                            <input type="text" class="form-control" id="nrp" name="nrp">
                            <div class="form-text text-danger"><?= form_error('nrp'); ?></div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email">
                            <div class="form-text text-danger"><?= form_error('email'); ?></div>
                        </div>

                        <div class="mb-3">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-select" aria-label="jurusan" id="jurusan" name="jurusan">
                            <option selected>Pilih jurusan</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                            <option value="Teknik Industri">Teknik Industri</option>
                            <option value="Teknik Komputer">Teknik Komputer</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                        </select>
                        </div>

                        <button type="submit" class="btn btn-primary float-end" name="tambah">
                            Tambah
                        </button>
                    </form>
                </div>
            </div>
                
        </div>
    </div>
</div>

