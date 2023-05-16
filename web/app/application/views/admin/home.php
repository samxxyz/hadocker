<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  

<style>
  /* Make the image fully responsive */
  .body {
    background-color: black;
  }
  .carousel-inner img {
    max-width: 100%;
    max-height: 700px;
    opacity: 80%;
  }
  .carousel-caption {
    color: black;
    font-weight: bold;
  }
 
 /* review*/
  .container {

  max-width: 100%;
  border-radius: 5px;
  padding: 16px;
  margin: 16px 0
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  margin-right: 20px;
  border-radius: 50%;
}

.container span {
  font-size: 20px;
  margin-right: 15px;
}

@media (max-width: 500px) {
  .container {
      text-align: center;
      
  }
  .container img {
      margin: auto;
      float: none;
      display: block;
  }
}
  </style>


<body class="bg-dark">
<div id="demo" class="carousel slide mt-3" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= base_url();?>assets/dist/img/L1.png" class="rounded mx-auto d-block" alt="H&M Laundry Logo">
      <div class="carousel-caption d-none d-md-block text-white-50">
        <h2>H&M LAUNDRY</h2>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= base_url();?>assets/dist/img/L2.png" class="rounded mx-auto d-block" alt="Chicago">
      <div class="carousel-caption d-none d-md-block text-white-50">
        <h2>H&M LAUNDRY</h2>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= base_url();?>assets/dist/img/L3.png" class="rounded mx-auto d-block" alt="H&M Laundry Logo">
      <div class="carousel-caption d-none d-md-block text-white-50">
        <h2>H&M LAUNDRY</h2>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
  </div>
  
  <!-- Left and right controls -->
  

<div class="card mb-5 mt-5 px-4 bg-warning bg-gradient">
  <div class="row">
    <div class="col-md-3 d-flex justify-content-around">
      <img src="<?= base_url();?>assets/dist/img/laundryy.png" width="200" class="my-4 "  alt="H&M LOGO">
    </div>
    <div class="col-md-9">
    <div class="card-body">
    <h4 class="card-text d-flex">Mengapa H&M Laundry ?</h4>
    <p class="card-text d-flex">Kami mempunyai standar khusus yang memudahkan anda tanpa harus repot datang. Jaminan terpercaya bagi anda yang belum merasakan jasa layanan kami dengan melihat review dan kegiatan sehari – hari 
    di website ini atau Social Media kami. Setiap pengguna jasa yang masuk di laundry kami, ditangani oleh pekerja yang terlatih dan berkomitmen. Dengan memanfaatkan teknologi, mempermudah anda tanpa repot datang ke laundry kami. 
    Jangan ragu untuk menjadikan kami sebagai bagian dari mitra laundry dalam membantu anda mencuci pakaian.</p>
</div>
</div>
</div>
</div>


<div class="row d-flex justify-content-center mt-4" style="margin-bottom:12px; margin-right: 7px">
    <a href="<?= base_url();?>member/pemesanan" class="button" >Pesan Sekarang</a>
  </div>

<div class="row row-cols-1 row-cols-md-2 g-4 mt-5">
<h2 class="mt-5 col-md-12 text-center text-success mb-5">Layanan Laundry Kami</h2>
  <div class="col">
    <div class="card align-items-center bg-info">
      <img src="<?= base_url();?>assets/dist/img/kilo.png" class="card-img-top" style="width: 150px; height: 150px; margin-top: 2em" alt="...">
      <div class="card-body text-center">
        <h5 class="card-text">Layanan Kiloan</h5>
        <p class="card-text">Layanan praktis bagi anda yang menginginkan jasa cuci, lipat, gosok dengan pilihan regular atau express </p>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card align-items-center bg-primary">
      <img src="<?= base_url();?>assets/dist/img/satuan.png" class="card-img-top" style="width: 150px; height: 150px; margin-top: 2em" alt="...">
      <div class="card-body text-center">
        <h5 class="card-text">Layanan Satuan</h5>
        <p class="card-text">Salah satu layanan spesial untuk anda yang menginginkan pencucian yang detail terhadap baju kesayangan anda</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card align-items-center bg-secondary">
      <img src="<?= base_url();?>assets/dist/img/baby.png" class="card-img-top" style="width: 150px; height: 150px; margin-top: 2em" alt="...">
      <div class="card-body text-center">
        <h5 class="card-text">Layanan Perlengkapan Bayi</h5>
        <p class="card-text">Sayangi buah hati anda dengan memberikan perhatian ekstra terhadap pakaian dan peralatan bayi anda</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card align-items-center bg-danger">
      <img src="<?= base_url();?>assets/dist/img/doll.png" class="card-img-top" style="width: 150px; height: 150px; margin-top: 2em" alt="...">
      <div class="card-body text-center">
        <h5 class="card-text">Layanan Boneka</h5>
        <p class="card-text">Solusi perawatan mencuci boneka anda agar terhindar dari bakteri dan bau apek</p>
      </div>
    </div>
  </div>
</div>  

<div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
<h2 class="mt-5 mb-5 col-md-12 text-center text-warning">Cara Kerja Laundry Kami</h2>
  <div class="col">
    <div class="card align-items-center bg-primary bg-gradient">
      <img src="<?= base_url();?>assets/dist/img/fashion.png" class="card-img-top" style="width: 150px; margin-top: 2em" alt="...">
      <div class="card-body text-center">
        <h5 class="card-text">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card align-items-center bg-info bg-gradient">
      <img src="<?= base_url();?>assets/dist/img/wash.png" class="card-img-top" style="width: 150px; margin-top: 2em" alt="...">
      <div class="card-body text-center">
        <h5 class="card-text">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card align-items-center bg-success bg-gradient">
      <img src="<?= base_url();?>assets/dist/img/box.png" class="card-img-top" style="width: 150px; margin-top: 2em" alt="...">
      <div class="card-body text-center">
        <h5 class="card-text">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>  


<div class="row mt-5">
<div class="col-md-12">
    <div class="card card-warning">
      <div class="card-header">
        <h4 class="card-text text-center text-white">Daftar Harga H&M Laundry</h4>
      </div>
      <div class="card-body">
        <table class="table table-bordered ">
          <thead>
            <tr>
              <th>Nama Barang</th>
             
              <th>Dry Clean</th>          
            </tr>
            </thead>
             <tbody>
             <?php
                    include "application/config/connection.php";
                    $query = mysqli_query($connection, "SELECT * FROM listharga order by DryClean desc");
                    while($row = mysqli_fetch_assoc($query)){
                    ?>
                <tr>
                  <td><?php echo $row['NamaBarang']; ?></td>
                  
                  <td><?php echo $row['DryClean']; ?></td>
                  </td>
                </tr>
                <?php } ?>
             </tbody>
        </table>
      </div>
    </div>
</div>
</div>

<h4 class="text-center mt-5 text-primary">Ulasan H&M Laundry</h4>
<div class="container bg-info bg-gradient">
  <img src="<?= base_url();?>assets/dist/img/test1.png" alt="Avatar" style="width:90px">
  <p><span>Reza Rahadian. </span> Actor Indonesia.</p>
  <p>John Doe saved us from a web disaster.</p>
</div>

<div class="container bg-info bg-gradient">
  <img src="<?= base_url();?>assets/dist/img/test2.png" alt="Avatar" style="width:90px">
  <p><span >Anya Geraldine. </span> Influencer Indonesia.</p>
  <p>No one is better than John Doe.</p>
</div>


</body>