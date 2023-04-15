<?php
require_once "core/init.php";

if ( !isset($_SESSION['user'])){
    header('Location: index.php');
}

require_once "view/headeradmin.php";

?>

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

            <div class="boxes">
                <div class="box box1">
                    <i class="fa fa-newspaper"></i>
                    <a href="#"><span class="text">Brosur</span></a>
                    <span class="text2">Rp.30.000/50pcs</span>
                </div>
                <div class="box box2">
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
                </div>
                <div class="box box1">
                    <i class="fa fa-tags"></i>
                    <a href="#"><span class="text">Kop Surat</span></a>
                    <span class="text2">Rp.30.000/50pcs</span>
                </div>
            </div>
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

<script src="../js/script.js"></script>
</body>

</html>