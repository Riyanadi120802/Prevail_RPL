<?php
require_once "core/init.php";

require_once "view/headeradmin.php";

?>

<!-- Jarak -->
<section class="dashboard">
    <div class="dash-content">
        <header style="font-size: 26px; font-weight: bold; color: blueviolet; ">Riwayat Pemesanan</header>
        <table class="table table-bordered table-hover mt-5 p-5">
            <thead class="text-center">
                <tr class="table-warning table-bordered">
                    <th scope="col" style="width: 30%;">Jenis Barang</th>
                    <th scope="col" style="width: 20%;">Harga</th>
                    <th scope="col" style="width: 20%;">Metode Pembayaran</th>
                    <th scope="col" style="width: 15%;">Status</th>
                    <th scope="col" style="width: 15%;">Testimoni</th>
                </tr>
            </thead>
            <tbody>
                    <?php for ($i=1; $i<=3 ; $i++) : ?> 
                        <tr nowrap>
                            <th scope="row">Brosur</th>
                            <td>Rp.100000</td>
                            <td>Ovo</td>
                            <td>
                                <div class="status">working</div>
                            </td>
                            <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Testimoni</button></td>
                        </tr>
                    <?php endfor ?>
            </tbody>
        </table>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Checkout Barang</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <table class="table table-hover w-50 m-auto mt-5">
                    <thead>
                        <tr class="table table-light">
                            <th scope="col">Produk</th>
                            <th scope="col">Harga Satuan</th>
                            <th scope="col">Kuantitas</th>
                            <th scope="col">Total Harga</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php for ($i=0; $i <3 ; $i++): ?>
                    <tr>
                        <th scope="row">Brosur</th>
                        <td>Rp.6000</td>
                        <td><center><p>6</p></center></td>
                        <td>Rp.30000</td>
                        <td><button class="btn btn-danger">hapus</button></td>
                    </tr>
                    <?php endfor ?>
                        
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">pesan lagi</button>
                <button type="button" class="btn btn-primary">checkout</button>
            </div>
            </div>
        </div>
        </div>

    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../js/script.js"></script>
</body>

</html>