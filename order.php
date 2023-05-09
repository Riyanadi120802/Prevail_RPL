<?php
require_once "core/init.php";

require_once "view/headeradmin.php";

if (isset($_POST['submit'])) {
  $db = new firebaseRDB($databaseURL);
  $jenis_layanan = $_POST['jenis_layanan'];
  $jumlah = $_POST['jumlah'];
  $upload_dokumen = $_POST['upload_dokumen'];
  $id = $_SESSION['user'];

  $insert = $db->insert("status", [
    'jenis_layanan' => $jenis_layanan,
    'jumlah' => $jumlah,
    'upload_dokumen' => $upload_dokumen,
    'id' => $id
  ]);
}
?>

<section class="dashboard">
  <div class="dash-content">
    <header style="font-size: 26px; font-weight: bold; color: blueviolet; ">Order Here</header>
    <form action="order.php" method="post">
      <div class="form first">
        <div class="details personal">
          <div class="fields">

            <div class="input-field">
              <label>Jenis Layanan</label>
              <select class="form-select" id="jenis_layanan" name="jenis_layanan" required>
                <?php foreach ($data1 as $row) : ?>
                  <option value="<?= $row['namaLayanan'] ?>"><span class="text card-title"><?= $row['namaLayanan'] ?></span></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="input-field">
              <label>Jumlah</label>
              <input type="number" placeholder="Masukkan Jumlah" name="jumlah" required />
            </div>

            <div class="input-field" id="khas">
              <label for="upload_dokumen" class="form-label">Upload Dokumen</label>
              <input type="file" class="upload" id="upload_dokumen" name="upload_dokumen" required />
            </div>
          </div>
        </div>

        <!-- <button type="submit" name="submit" class="nextBtn">
          <span class="btnText">Next</span>
          <i class="uil uil-navigator"></i>
        </button> -->
        <p>
          <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Link with href
          </a>
          <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Button with data-bs-target
          </button>
        </p>
        <div class="collapse" id="collapseExample">
          <div class="card card-body">
            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
          </div>
        </div>
      </div>

    </form>
  </div>
</section>
<?php include_once "view/footer.php" ?>