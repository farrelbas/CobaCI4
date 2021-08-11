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
            <table class="table table-dark table-striped">
                <tr>
                    <th class="text-center" style="width: 30px">NO</th>
                    <th class="text-center" style="width: 200px">Kode Barang</th>
                    <th class="text-center" style="width: 200px">Barang</th>
                    <th class="text-center" style="width: 200px">Stok</th>
                    <th class="text-center" style="width: 200px">Harga</th>
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
                </tr>
            <?php endforeach ?>
            </table>
        </div>
    </section>

</body>

</html>