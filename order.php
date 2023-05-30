<?php
require_once "core/init.php";
require_once "view/headeradmin.php";
?>

<!-- Jarak -->
<section class="dashboard">
  <div class="dash-content">
    <header style="font-size: 26px; font-weight: bold; color: blueviolet; ">Order Here</header>
    <form action="post">
      <div class="form first">
        <div class="details personal">
          <div class="fields">

            <div class="input-field">
              <label>Jenis Layanan</label>
              <select class="form-select" id="jenis_layanan" name="jenis_layanan" required>
                <option value="">Pilih Jenis Layanan</option>
                <option value="brosur">Brosur</option>
                <option value="mmt">MMT</option>
                <option value="kop_surat">Kop Surat</option>
              </select>
            </div>

            <div class="input-field">
              <label>Jumlah</label>
              <input type="number" placeholder="Masukkan Jumlah" required />
            </div>

            <div class="input-field" id="khas">
              <label for="upload_dokumen" class="form-label">Upload Dokumen</label>
              <input type="file" class="upload" id="upload_dokumen" name="upload_dokumen" required />
            </div>
          </div>
        </div>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Launch demo modal
        </button>

      </div>
    </form>
  </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
<script src="../js/script.js"></script>
</body>

</html>