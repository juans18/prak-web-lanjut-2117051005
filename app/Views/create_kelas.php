<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>
    <div class="container">
        <div class="form-box">
            <div class="form">
                <form action="<?= base_url('/kelas/store');?>" method="POST"  enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Nama Kelas</label>
                        <?php if (session('validation') && session('validation')->hasError('nama_kelas')) : ?>
                            <div class="invalid-feedback">
                                <?= session('validation')->getError('nama_kelas'); ?>
                            </div>
                        <?php endif; ?>
                        <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('nama_kelas') ? 'is-invalid' : '' ?>"  placeholder="Nama Kelas" name="nama_kelas">
                    </div>
                    <input class="btn btn-primary" type="submit">
                </form>
            </div>
        </div>
    </div>
<?= $this->endSection('content') ?>