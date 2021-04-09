<div class="container">

    <?php if($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Mahasiswa
            <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
            <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari.." name="keyword">
            <button class="btn btn-primary" type="submit">Cari</button>
            </div>
            </form>
        </div>
    </div>
    
    <div class="row mt-3">
        <div class="col-md-6">
        <h3>Daftar Mahasiswa</h3>
        <?php if(empty($mahasiswa)) : ?>
            <div class="alert alert-danger" role="alert">
            data mahasiswa tidak di temukan.
            </div>
        <?php endif; ?>
        <ul class="list-group">    
            <?php foreach($mahasiswa as $mhs) : ?>       
                <li class="list-group-item">
                <?= $mhs['nama']; ?>
                <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge bg-danger float-end text-decoration-none" onclick="return confirm('yakin?');">hapus</a>
                <a href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge bg-success float-end text-decoration-none">ubah</a>          
                <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary float-end text-decoration-none">detail</a>          
                </li>            
            <?php endforeach; ?>
        </ul>
        </div>
    </div>
</div>

