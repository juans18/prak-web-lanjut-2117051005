<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>
    <div class="profile">
        <div class="img">
            <img src="<?=$user['foto'] ?? '<default-foto>' ?>" style="width:250px;">
        </div>
        <div class="box">
            <p class="title">Nama Lengkap</p>
            <h1 class="data"><?=$user['nama']?></h1>
        </div>
        <div class="box">
            <p class="title">Kelas</p>
            <h1 class="data"><?=$user['nama_kelas']?></h1>
        </div>
        <div class="box">
            <p class="title">NPM</p>
            <h1 class="data"><?=$user['npm']?></h1>
        </div>
    </div>
<?= $this->endSection('content') ?>