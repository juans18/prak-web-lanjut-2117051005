<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
<a href="<?= base_url('/user/create')?>" class="btn btn-primary mb-3">Tambah Data</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>NPM</td>
            <td>Kelas</td>
            <td>Aksi</td>
        </tr>
        </thead>
        <tbody>
        <?php
        $no = 1;
        foreach ($users as $user) { ?>
            <tr>
            <td><?= $no++ ?></td>
            <td><?= $user['nama'] ?></td>
            <td><?= $user['npm'] ?></td>
            <td><?= $user['nama_kelas'] ?></td>
            <td>
                <div class="wrp d-flex justify-content-start align-items-center">
                    <a class="btn btn-primary me-2" href="<?= base_url('user/' . $user['id'])?>">Detail</a>
                    <a class="btn btn-warning me-2" href="<?= base_url('user/' . $user['id'] . '/edit') ?>">Edit</a>
                    <form action="<?= base_url('user/' . $user['id']) ?>" method="POST">
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