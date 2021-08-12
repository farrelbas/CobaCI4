<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>AING MULTIMEDIA</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">AING</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo base_url('/Toko'); ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Market</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo base_url('/BarangController'); ?>">Stok</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <br><br><br>
    <section class="content">
        <div class="container">
            <div class="box-header with-border">
                <br>
                <h3 class="box-title text-center">Stok Barang</h3>
                <br>
            </div>
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Data
            </button>

            <br><br>
            <table class="table table-dark table-striped">
                <tr>
                    <th class="text-center" style="width: 30px">NO</th>
                    <th class="text-center" style="width: 200px">Kode Barang</th>
                    <th class="text-center" style="width: 200px">Barang</th>
                    <th class="text-center" style="width: 200px">Stok</th>
                    <th class="text-center" style="width: 200px">Harga</th>
                    <th class="text-center" style="width: 150px">Aksi</th>
                </tr>
                <tr>
                    <?php $no = 1;
                    foreach ($dataBarang as $row) : ?>
                        <td class="info text-center">
                            <?= $no++; ?>
                        </td>
                        <td class="info text-center">
                            <?= $row->kode_barang; ?>
                        </td>
                        <td class="info text-center">
                            <?= $row->barang; ?>
                        </td>
                        <td class="info text-center">
                            <?= $row->stok; ?>
                        </td>
                        <td class="info text-center">
                            <?= $row->harga; ?>
                        </td>
                        <td>
                            <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#modal-edit<?= $row->kode_barang; ?>">
                                Edit Data
                            </button>
                            <a class="btn btn-sm btn-danger" onclick="return confirm('Apakah Data Ingin Di Hapus?')" href="<?php echo base_url('/BarangController/hapus'); ?>/<?= $row->kode_barang; ?>">Hapus</a>
                        </td>
                </tr>
            <?php endforeach ?>
            </table>
        </div>
    </section>
    
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Masukan Data Barang</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?php echo base_url('/BarangController/simpan'); ?>" method="POST" class="form-horizontal">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Kode Barang</label>
                            <input type="text" class="form-control" id="kodeBarang" name="kodeBarang" placeholder="Masukan Kode Barang">
                        </div>
                        <div class="form-group">
                            <label>Barang</label>
                            <input type="text" class="form-control" id="barang" name="barang" placeholder="Masukan Nama Barang">
                        </div>
                        <div class="form-group">
                            <label>Stok</label>
                            <input type="number" class="form-control" id="stok" name="stok" placeholder="Masukan Jumlah Barang">
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukan Harga Barang">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php $no = 1;
    foreach ($dataBarang as $row) : ?>
        <div class="modal fade" id="modal-edit<?= $row->kode_barang; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?php echo base_url('/BarangController/edit'); ?>" method="POST" class="form-horizontal">
                        <div class="modal-body">
                            <input type="hidden" value="<?= $row->id_barang; ?>" name="id_barang">
                            <div class="form-group">
                                <label class="control-label">Kode Barang</label>
                                <input value="<?= $row->kode_barang; ?>" type="text" class="form-control" name="kodeBarang" placeholder="Masukan Kode Barang">
                            </div>
                            <div class="form-group">
                                <label>Barang</label>
                                <input value="<?= $row->barang; ?>" type="text" class="form-control" name="barang" placeholder="Masukan Nama Barang">
                            </div>
                            <div class="form-group">
                                <label>Stok</label>
                                <input value="<?= $row->stok; ?>" type="number" class="form-control" name="stok" placeholder="Masukan Jumlah Barang">
                            </div>
                            <div class="form-group">
                                <label>Harga</label>
                                <input value="<?= $row->harga; ?>" type="text" class="form-control" name="harga" placeholder="Masukan Harga Barang">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach ?>






</body>

</html>