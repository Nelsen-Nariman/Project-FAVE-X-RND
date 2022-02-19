<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>Mengubah Data</title>
    </head>
    <body>
        <div class="container">
            <h1>Mengubah Data</h1>
            <form action="/update/<?php echo e($article->id); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('put'); ?>
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" value="<?php echo e($article->judul); ?>" name="judul" class="form-control" id="judul" minlength="5" maxlength="20" placeholder="Judul Artikel">
                </div>
                <div class="form-group">
                    <label for="penulis">Penulis</label>
                    <input type="text" value="<?php echo e($article->penulis); ?>" name="penulis" class="form-control" id="penulis" minlength="5" maxlength="20" placeholder="Nama Penulis">
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah Halaman</label>
                    <input type="number" value="<?php echo e($article->jumlah); ?>" name="jumlah" class="form-control" id="jumlah" min="1" placeholder="Jumlah Halaman">
                </div>
                <div class="form-group">
                    <label for="tahun">Tahun Terbit</label>
                    <input type="number" value="<?php echo e($article->tahun); ?>" name="tahun" class="form-control" id="tahun" min="2000" max="2001" placeholder="Tahun Terbit">
                </div>
                <button class="btn btn-primary">Ubah</button>
            </form>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

        <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        -->
    </body>
</html><?php /**PATH D:\BINUS\BNCC\LnT\ProjectLnT\resources\views/edit.blade.php ENDPATH**/ ?>