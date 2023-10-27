<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>
    <div class="profile">
        <div class="form">
            <div class="img d-flex justify-content-center align-items-center">
                <img src="<?=$user['foto'] ?? '<default-foto>' ?>" style="width:200px;">
            </div>
            <div class="box">
                <p class="title">Nama Lengkap</p>
                <h4 class="data"><?=$user['nama']?></h1>
            </div>
            <div class="box">
                <p class="title">Kelas</p>
                <h4 class="data"><?=$user['nama_kelas']?></h1>
            </div>
            <div class="box">
                <p class="title">NPM</p>
                <h4 class="data"><?=$user['npm']?></h1>
            </div>
        </div>
    </div>
    <?= $this->endSection('content') ?>