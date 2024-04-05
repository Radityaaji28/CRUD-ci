<div class="container pt-5">
    <a href="<?= base_url('kendaraan/tambah'); ?>" class="btn btn-success mb-3">Tambah Data</a>
    <div class="card">
        <div class="card-header bg-warning text-white">
            <h4 class="card-title mb-0">Data Kendaraan</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Plat</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Harga Sewa</th>
                            <th class="text-center">Merk</th>
                            <th class="text-center">Jenis BBM</th>
                            <th class="text-center">Jenis Kendaraan</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($getkendaraan as $isi) { ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $isi['no_kendaraan']; ?></td>
                                <td class="text-center"><?= $isi['status_kendaraan']; ?></td>
                                <td class="text-right">Rp<?= number_format($isi['harga_sewa']) ?>,-</td>
                                <td><?= $isi['merk']; ?></td>
                                <td><?= $isi['jenis_bbm']; ?></td>
                                <td><?= $isi['jenis_kendaraan']; ?></td>

                                <td class="text-center">
                                    <a href="<?= base_url('kendaraan/edit/' . $isi['id_kendaraan']); ?>" class="btn btn-sm btn-success mr-1">
                                        Edit</a>
                                    <a href="<?= base_url('kendaraan/hapus/' . $isi['id_kendaraan']); ?>" onclick="javascript:return confirm('Apakah ingin menghapus data kendaraan ?')" class="btn btn-sm btn-danger">
                                        Hapus</a>

                                </td>
                            </tr>
                        <?php $no++;
                        } ?>
                    </tbody>
                </table>
                <?php

                helper('number');
                echo number_to_currency(1234.56, 'USD', 'en_US', 2);
                ?>

                <?php
                // Load helper text
                helper('text');

                // Definisikan string yang akan di-censor
                $string = "Ini adalah kalimat dengan kata-kata yang tidak pantas seperti puki dan kontol.";

                // Daftar kata yang tidak diizinkan
                $disallowed = ['puki', 'kontol', 'anjing', 'babic'];

                // Censor kata-kata yang tidak diizinkan
                $string = word_censor($string, $disallowed, 'Beep!');

                // Cetak string yang sudah di-censor
                echo $string;
                ?>

                <?php
                // Load helper date
                helper('date');

                // Set zona waktu ke Asia/Jakarta
                date_default_timezone_set('Asia/Jakarta');

                // Menampilkan waktu saat ini di Jakarta
                echo date('H:i:s'); // Format H:i:s akan mencetak jam, menit, dan detik
                ?>




            </div>
        </div>
    </div>
</div>