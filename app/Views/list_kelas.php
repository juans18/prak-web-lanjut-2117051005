<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
<a href="<?= base_url('/kelas/create')?>" class="btn btn-primary mb-3">Tambah Data</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <td>No</td>
            <td>Nama Kelas</td>
            <td>Aksi</td>
        </tr>
        </thead>
        <tbody>
        <?php
        $no = 1;
        foreach ($kelas as $kelas) { ?>
            <tr>
            <td><?= $no++ ?></td>
            <td><?= $kelas['nama_kelas'] ?></td>
            <td>
                <div class="wrp d-flex justify-content-start align-items-center">
                    <a class="btn btn-warning me-2" href="<?= base_url('kelas/' . $kelas['id'] . '/edit') ?>">Edit</a>
                    <form action="<?= base_url('kelas/' . $kelas['id']) ?>" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <?= csrf_field() ?>
                        <button class="btn btn-danger">Hapus</button>
                    </form>    
                </div>
            </td>
            </tr>
        <?php }
        ?>
        </tbody>
    </table>
</div>
<?= $this->endSection('content') ?>