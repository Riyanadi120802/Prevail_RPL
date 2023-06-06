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
                        <td><a href="#" class="btn btn-primary">Testimoni</a></td>
                        </tr>
                    <?php endfor ?>
            </tbody>
        </table>

    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../js/script.js"></script>
</body>

</html>