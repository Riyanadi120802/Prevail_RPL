<?php
require_once "core/init.php";
require_once "view/headeradmin.php";
?>

    <!-- Jarak -->
    <section class="dashboard">
      <div class="dash-content">
        <header style="font-size: 26px; font-weight: bold; color: blueviolet; ">Order Here</header>
        <form action="#">
          <div class="form first">
            <div class="details personal">
              <div class="fields">
                <div class="input-field">
                  <label>Nama</label>
                  <input
                    type="text"
                    placeholder="Masukkan Nama Anda"
                    required />
                </div>

                <div class="input-field">
                  <label>Alamat</label>
                  <input
                    type="text"
                    placeholder="Masukkan Alamat Anda"
                    required />
                </div>

                <div class="input-field">
                  <label>No Handphone / WA</label>
                  <input
                    type="number"
                    placeholder="Masukkan No Handphone"
                    required />
                </div>

                <div class="input-field">
                  <label>Jenis Layanan</label>
                  <select
                    class="form-select"
                    id="jenis_layanan"
                    name="jenis_layanan"
                    required>
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
                  <label for="upload_dokumen" class="form-label"
                    >Upload Dokumen</label
                  >
                  <input
                    type="file"
                    class="upload"
                    id="upload_dokumen"
                    name="upload_dokumen"
                    required />
                </div>
              </div>
            </div>

            <button class="nextBtn">
              <span class="btnText">Next</span>
              <i class="uil uil-navigator"></i>
            </button>
          </div>

          <div class="form second">
            <div class="details address">
              <span class="title">Address Details</span>

              <div class="fields">
                <div class="input-field">
                  <label>Address Type</label>
                  <input
                    type="text"
                    placeholder="Permanent or Temporary"
                    required />
                </div>

                <div class="input-field">
                  <label>Nationality</label>
                  <input type="text" placeholder="Enter nationality" required />
                </div>

                <div class="input-field">
                  <label>State</label>
                  <input type="text" placeholder="Enter your state" required />
                </div>

                <div class="input-field">
                  <label>District</label>
                  <input
                    type="text"
                    placeholder="Enter your district"
                    required />
                </div>

                <div class="input-field">
                  <label>Block Number</label>
                  <input
                    type="number"
                    placeholder="Enter block number"
                    required />
                </div>

                <div class="input-field">
                  <label>Ward Number</label>
                  <input
                    type="number"
                    placeholder="Enter ward number"
                    required />
                </div>
              </div>
            </div>

            <div class="details family">
              <span class="title">Family Details</span>

              <div class="fields">
                <div class="input-field">
                  <label>Father Name</label>
                  <input type="text" placeholder="Enter father name" required />
                </div>

                <div class="input-field">
                  <label>Mother Name</label>
                  <input type="text" placeholder="Enter mother name" required />
                </div>

                <div class="input-field">
                  <label>Grandfather</label>
                  <input
                    type="text"
                    placeholder="Enter grandfther name"
                    required />
                </div>

                <div class="input-field">
                  <label>Spouse Name</label>
                  <input type="text" placeholder="Enter spouse name" required />
                </div>

                <div class="input-field">
                  <label>Father in Law</label>
                  <input
                    type="text"
                    placeholder="Father in law name"
                    required />
                </div>

                <div class="input-field">
                  <label>Mother in Law</label>
                  <input
                    type="text"
                    placeholder="Mother in law name"
                    required />
                </div>
              </div>

              <div class="buttons">
                <div class="backBtn">
                  <i class="uil uil-navigator"></i>
                  <span class="btnText">Back</span>
                </div>

                <button class="sumbit">
                  <span class="btnText">Submit</span>
                  <i class="uil uil-navigator"></i>
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/script.js"></script>
  </body>
</html>
