<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>
    <div class="profile">
        <div class="img">
            <img src="<?=base_url('assets/img/poto.jpg');?>" style="width:250px;">
        </div>
        <div class="box">
            <p class="title">Nama Lengkap</p>
            <h1 class="data"><?=$nama?></h1>
        </div>
        <div class="box">
            <p class="title">Kelas</p>
            <h1 class="data"><?=$kelas?></h1>
        </div>
        <div class="box">
            <p class="title">NPM</p>
            <h1 class="data"><?=$npm?></h1>
        </div>
    </div>
<?= $this->endSection('content') ?>