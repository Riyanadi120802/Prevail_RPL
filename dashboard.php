<?php
require_once "core/init.php";

if (!isset($_SESSION['user'])) {
  header('Location: login.php');
}

require_once "view/headeradmin.php";

?>

<!DOCTYPE html>
<!-- === Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!----======== CSS ======== -->
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

  <!----===== Iconscout CSS ===== -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

  <title>Admin Dashboard Panel</title>
</head>

<body>
  <nav>
    <div class="logo-name">
      <div class="logo-image">
        <img src="view\gambar\logo.png" alt="" />
      </div>

      <span class="logo_name">Cetakin</span>
    </div>

    <div class="menu-items">
      <ul class="nav-links">
        <li>
          <a href="dashboard.php">
            <i class="uil uil-create-dashboard"></i>
            <span class="link-name">Layanan</span>
          </a>
        </li>
        <li>
          <a href="order.php">
            <i class="uil uil-files-landscapes"></i>
            <span class="link-name">Order</span>
          </a>
        </li>
        <li>
          <a href="status.php">
            <i class="uil uil-chart"></i>
            <span class="link-name">Status</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="uil uil-history"></i>
            <span class="link-name">History</span>
          </a>
        </li>
        <!-- <li>
            <a href="#">
              <i class="uil uil-comments"></i>
              <span class="link-name">Comment</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="uil uil-share"></i>
              <span class="link-name">Share</span>
            </a>
          </li> -->
      </ul>

      <ul class="logout-mode">
        <li>
          <a href="logout.php">
            <i class="uil uil-signout"></i>
            <span class="link-name">Logout <?= $_SESSION['user'] ?></span>
          </a>
        </li>

        <li class="mode">
          <a href="#">
            <i class="uil uil-moon"></i>
            <span class="link-name">Dark Mode</span>
          </a>

          <div class="mode-toggle">
            <span class="switch"></span>
          </div>
        </li>
      </ul>
    </div>
  </nav>

  <section class="dashboard">
    <div class="top">
      <i class="uil uil-bars sidebar-toggle"></i>

      <div class="search-box">
        <i class="uil uil-search"></i>
        <input type="text" placeholder="Search here..." />
      </div>

      <img src="images/profile.jpg" alt="" />
    </div>

    <div class="dash-content">
      <div class="overview">
        <div class="title">
          <i class="uil uil-tachometer-fast-alt"></i>
          <span class="text">Layanan</span>
        </div>

        <div class="row boxes m-2">
          <?php foreach ($data1 as $row) :
            $color = dechex(rand(0xDDDDDD, 0xFFFFFF));
          ?>
              <div class="box box1 card col-sm-6" style="background-color: #<?php echo $color; ?>;">
                <div class="card-body">
                  <center>
                  <i class="fa fa-newspaper"></i>
                  <a href="#"><span class="text card-title"><?= $row['namaLayanan'] ?></span></a>
                  <span class="text2 card-text">Rp. <?= $row['harga'] ?> / <?= $row['minPembelian'] ?> pcs</span>
                </center>
                </div>
              </div>
          <?php endforeach; ?>
        </div>

        <!-- <div class="box box2">
              <i class="fa fa-calendar-check"></i>
              <a href="#"> <span class="text">Kalender</span></a>
              <span class="text2">Rp.30.000/50pcs</span>
            </div>
            <div class="box box3">
              <i class="fa fa-id-card"></i>
              <a href="#"><span class="text">Kartu Nama</span></a>
              <span class="text2">Rp.30.000/50pcs</span>
            </div>
            <div class="box box4">
              <i class="fa fa-hand-paper"></i>
              <a href="#"> <span class="text">Poster</span></a>
              <span class="text2">Rp.30.000/50pcs</span>
            </div>
            <div class="box box2">
              <i class="fa fa-note-sticky"></i>
              <a href="#"><span class="text">Black Note</span></a>
              <span class="text2">Rp.30.000/50pcs</span>
            </div>
            <div class="box box3">
              <i class="fa fa-file-invoice"></i>
              <a href="#"><span class="text">Invoice</span></a>
              <span class="text2">Rp.30.000/50pcs</span>
            </div>
            <div class="box box4">
              <i class="fa fa-message"></i>
              <a href="#"><span class="text">Amplop Surat</span></a>
              <span class="text2">Rp.30.000/50pcs</span>
            </div> -->
      </div>

      <!-- <div class="activity">
          <div class="title">
            <i class="uil uil-clock-three"></i>
            <span class="text">Recent Activity</span>
          </div>

          <div class="activity-data">
            <div class="data names">
              <span class="data-title">Name</span>
              <span class="data-list">Prem Shahi</span>
              <span class="data-list">Deepa Chand</span>
              <span class="data-list">Manisha Chand</span>
              <span class="data-list">Pratima Shahi</span>
              <span class="data-list">Man Shahi</span>
              <span class="data-list">Ganesh Chand</span>
              <span class="data-list">Bikash Chand</span>
            </div>
            <div class="data email">
              <span class="data-title">Email</span>
              <span class="data-list">premshahi@gmail.com</span>
              <span class="data-list">deepachand@gmail.com</span>
              <span class="data-list">prakashhai@gmail.com</span>
              <span class="data-list">manishachand@gmail.com</span>
              <span class="data-list">pratimashhai@gmail.com</span>
              <span class="data-list">manshahi@gmail.com</span>
              <span class="data-list">ganeshchand@gmail.com</span>
            </div>
            <div class="data joined">
              <span class="data-title">Joined</span>
              <span class="data-list">2022-02-12</span>
              <span class="data-list">2022-02-12</span>
              <span class="data-list">2022-02-13</span>
              <span class="data-list">2022-02-13</span>
              <span class="data-list">2022-02-14</span>
              <span class="data-list">2022-02-14</span>
              <span class="data-list">2022-02-15</span>
            </div>
            <div class="data type">
              <span class="data-title">Type</span>
              <span class="data-list">New</span>
              <span class="data-list">Member</span>
              <span class="data-list">Member</span>
              <span class="data-list">New</span>
              <span class="data-list">Member</span>
              <span class="data-list">New</span>
              <span class="data-list">Member</span>
            </div>
            <div class="data status">
              <span class="data-title">Status</span>
              <span class="data-list">Liked</span>
              <span class="data-list">Liked</span>
              <span class="data-list">Liked</span>
              <span class="data-list">Liked</span>
              <span class="data-list">Liked</span>
              <span class="data-list">Liked</span>
              <span class="data-list">Liked</span>
            </div>
          </div>
        </div>
      </div> -->
  </section>

  <script src="view/js/script.js"></script>
</body>

</html>