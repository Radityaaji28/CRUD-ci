<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kendaraan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 10px;
        }
        .card-header {
            background-color: #ffc107;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="<?= base_url('kendaraan');?>" class="btn btn-secondary mb-4">Kembali</a>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Kendaraan: <?= $kendaraan->id_kendaraan;?></h4>
            </div>
            <div class="card-body">
                <form method="post" action="<?= base_url('kendaraan/update');?>">
                    <div class="form-group">
                        <label for="no_kendaraan">Plat</label>
                        <input type="text" value="<?= $kendaraan->no_kendaraan;?>" name="no_kendaraan" id="no_kendaraan" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="status_kendaraan">Status</label>
                        <input type="text" value="<?= $kendaraan->status_kendaraan;?>" name="status_kendaraan" id="status_kendaraan" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="harga_sewa">Harga Sewa</label>
                        <input type="number" value="<?= $kendaraan->harga_sewa;?>" name="harga_sewa" id="harga_sewa" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="merk">Merk</label>
                        <input type="text" value="<?= $kendaraan->merk;?>" name="merk" id="merk" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="jenis_bbm">Jenis BBM</label>
                        <input type="text" value="<?= $kendaraan->jenis_bbm;?>" name="jenis_bbm" id="jenis_bbm" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="jenis_kendaraan">Jenis Kendaraan</label>
                        <input type="text" value="<?= $kendaraan->jenis_kendaraan;?>" name="jenis_kendaraan" id="jenis_kendaraan" required class="form-control">
                    </div>
                    <input type="hidden" value="<?= $kendaraan->id_kendaraan;?>" name="id_kendaraan">
                    <button class="btn btn-success">Edit Data</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
