<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Upload Image</title>
</head>

<body>
    <div class="container">
        <br><br><br>
        <div class="col-6">
            <?php if (session()->has('success')) : ?>
                <p class="text-success"><?= session()->getFlashdata('success') ?></p>
            <?php endif; ?>
            <?php $validation = session()->getFlashdata('validation'); ?>
            <div class="card">
                <div class="card-header">Image Upload</div>
                <div class="card-body">
                    <form action="<?= current_url() ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Keterangan Gambar</label>
                            <input type="text" value="<?= old('keterangan') ?>" name="keterangan" id="keterangan" class="form-control <?= $validation && isset($validation['keterangan']) ? 'is-invalid' : '' ?>">
                            <?php if ($validation && isset($validation['keterangan'])) : ?>
                                <div class="invalid-feedback"><?= $validation['keterangan'] ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="">Pilih Gambar</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input <?= $validation && isset($validation['image']) ? 'is-invalid' : '' ?>" name="image" id="image">
                                <?php if ($validation && isset($validation['image'])) : ?>
                                    <div class="invalid-feedback"><?= $validation['image'] ?></div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="img-preview" style="margin-bottom: 20px"></div>
                        <div class="mt-3">
                            <button class="btn btn-primary" type="submit">UPLOAD</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script>
        function previewImg(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('.img-preview').html(`<img style="width: 100%" src="` + e.target.result + `"/>`);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#image").change(function() {
            previewImg(this);
        });
    </script>
</body>

</html>