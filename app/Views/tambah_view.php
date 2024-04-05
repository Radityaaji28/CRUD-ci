<div class="container p-5">
    <a href="<?= base_url('kendaraan');?>" class="btn btn-secondary mb-3">Kembali</a>
    <div class="card">
        <div class="card-header bg-warning text-white">
            <h4 class="card-title mb-0">Tambah Data Kendaraan</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('kendaraan/add');?>">
                <div class="form-group">
                    <label for="no_kendaraan">Plat</label>
                    <input type="text" id="no_kendaraan" name="no_kendaraan" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="status_kendaraan">Status</label>
                    <input type="text" id="status_kendaraan" name="status_kendaraan" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="harga_sewa">Harga Sewa</label>
                    <input type="number" id="harga_sewa" name="harga_sewa" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="merk">Merk</label>
                    <input type="text" id="merk" name="merk" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="jenis_bbm">Jenis BBM</label>
                    <input type="text" id="jenis_bbm" name="jenis_bbm" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="jenis_kendaraan">Jenis Kendaraan</label>
                    <input type="text" id="jenis_kendaraan" name="jenis_kendaraan" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success">Tambah Data Kendaraan</button>
            </form>
        </div>
    </div>
</div>
