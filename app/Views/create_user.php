<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Controllers</title>
    <link rel="stylesheet" href="<?=base_url('assets/css/style.css');?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
<body>
    <div class="container">
        <div class="form-box">
            <div class="form">
                <form action="<?= base_url('/user/store');?>" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <?php if (session('validation') && session('validation')->hasError('nama')) : ?>
                            <div class="invalid-feedback">
                                <?= session('validation')->getError('nama'); ?>
                            </div>
                        <?php endif; ?>
                        <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('nama') ? 'is-invalid' : '' ?>"  placeholder="Nama" name="nama">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">NPM</label>
                        <?php if (session('validation') && session('validation')->hasError('npm')) : ?>
                            <div class="invalid-feedback">
                                <?= session('validation')->getError('npm'); ?>
                            </div>
                        <?php endif; ?>
                        <input type="text" class="form-control <?= session('validation') ? 'is-invalid' : '' ?>" placeholder="NPM" name="npm">
                    </div> 
                    
                    <div class="mb-3">
                        <label class="form-label">Kelas</label>
                        <select class="form-select mt-2" aria-label="Default select example" name="kelas">
                            <option value="" selected disabled>Pilih Kelas</option>
                                <?php
                                foreach ($kelas as $item) {
                                ?>
                                    <option value="<?= $item['id'] ?>"><?= $item['nama_kelas'] ?></option>
                            <?php } ?>
                        </select>
                    </div> 
                    <input class="btn btn-primary" type="submit">
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>