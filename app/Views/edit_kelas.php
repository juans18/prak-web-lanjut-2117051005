<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>
    <div class="container">
        <div class="form-box">
            <div class="form">
                <form action="<?= base_url('/kelas/' . $kelas['id'])?>" method="POST"  enctype="multipart/form-data">
                <?= csrf_field() ?>
                    <div class="mb-3">
                        <label class="form-label">Nama Kelas</label>
                        <?php if (session('validation') && session('validation')->hasError('nama_kelas')) : ?>
                            <div class="invalid-feedback">
                                <?= session('validation')->getError('nama_kelas'); ?>
                            </div>
                        <?php endif; ?>
                        <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('nama_kelas') ? 'is-invalid' : '' ?>"  placeholder="Nama Kelas" name="nama_kelas" value="<?= $kelas['nama_kelas']?>">
                    </div>
                    <input type="hidden" name="_method" value="PUT">
                    <input class="btn btn-primary" type="submit">
                </form>
            </div>
        </div>
    </div>
<?= $this->endSection('content') ?>