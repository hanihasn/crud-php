<?php 

include 'layout/header.php';

$data_barang = select("SELECT * FROM barang");

?>
<div class="contrainer mt-5 px-5 ">
    <h1>Data Barang</h1>
    <hr>
    <a href="form-tambah.php" class="btn btn-primary mb-1">Tambah</a>
    <table class="table table-borderd table-striped mt-3 ">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data_barang as $barang) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $barang['nama']; ?></td>
                <td><?= $barang['jumlah']; ?></td>
                <td>Rp. <?= number_format($barang['harga'], 0, ',', '.'); ?></td>
                <td><?= date('d/m/y | H:i:s', strtotime($barang['tanggal'])); ?></td>
                <td width="15%" class="text-center">
                    <a href="" class="btn btn-success">Ubah</a>
                    <a href="" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include 'layout/footer.php'; ?>