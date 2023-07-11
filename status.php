<?php
require_once "core/init.php";
require_once "view/headeradmin.php";
?>

<<<<<<< HEAD
        <!-- Jarak -->
        <section class="dashboard">
            <div class="dash-content">
                <header style="font-size: 26px; font-weight: bold; color: blueviolet; ">Status Pemesanan</header>
                <table class="table table-bordered table-hover m-auto mt-5">
                    <thead>
                        <tr class="table-warning table-bordered">
                            <th scope="col">Jenis Barang</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Metode Pembayaran</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Brosur</th>
                            <td>Rp.100000</td>
                            <td>Ovo</td>
                            <td><div class="status">working</div></td>
                        </tr>
                        <tr>
                            <th scope="row">Kalender</th>
                            <td>Rp.200000</td>
                            <td>Ovo</td>
                            <td><div class="status-panding">panding</div></td>
                        </tr>
                        <tr>
                            <th scope="row">Kartu Nama</th>
                            <td>Rp.75000</td>
                            <td>Ovo</td>
                            <td><div class="status-done">done</div></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="../js/script.js"></script>
    </body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/script.js"></script>
  </body>
=======
<!-- Jarak -->
<section class="dashboard">
    <div class="dash-content">
        <header style="font-size: 26px; font-weight: bold; color: blueviolet; ">Status Pemesanan</header>
        <table class="table table-bordered table-hover m-auto mt-5">
            <thead>
                <tr class="table-warning table-bordered">
                    <th scope="col">Jenis Barang</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Metode Pembayaran</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($data5 as $key => $value) :
                    if ($key == "status " . $_SESSION['user']) {
                        foreach ($value as $row => $row2) : ?>
                            <tr>
                                <td><?= $row2["namaLayanan"] ?></td>
                                <td>
                                    <p><?= $row2["harga"] ?></p>
                                </td>
                                <td><?= $row2["metode"] ?></td>
                                <td class=status><?= $row2["status"] ?></td>
                            </tr>
                <?php
                        endforeach;
                    }
                endforeach; ?>
            </tbody>
        </table>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../js/script.js"></script>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../js/script.js"></script>
</body>

>>>>>>> d266158dfb71ec15b4b48bab24bec1920fd94be9
</html>