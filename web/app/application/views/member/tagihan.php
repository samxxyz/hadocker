<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/app/css/style.css">
    <link rel="stylesheet" href="assets/app/css/main.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">

    <script src="assets/jquery/dist/jquery.min.js"></script>

<div class="wrap py-3">
        <div class="container-lg">
            <div class="d-flex justify-content-between mb-2">
                <h2>
                    Pembayaran
                </h2>
            </div>

            <div class="row">
                <div class="col-md-7">

                    <div class="callout callout-warning bg-white py-2 my-3">
                        <p class="lead mb-0">
                            <span class="text-secondary">Total Pembayaran: </span>
                            <small class="align-top text-secondary">Rp</small>1.700.000
                        </p>
                        <span class="text-secondary">Terbilang: </span>
                        <em>Satu Juta Tujuh Ratus Ribu Rupiah</em>
                    </div>

                    <div class="jumbotron py-3 mb-3  text-center shadow-sm" style="background-color: #00008B;">
                        <h6 class="text-light">Nomor Virtual Account</h6>
                        <h1 class="text-monospace text-title text-warning">999 9999 12345678</h1>
                    </div>

                    <div class="card shadow-sm">
                        <div class="card-body">
                            <p class="lead text-center">
                                Batas Waktu Pembayaran <br>
                                <span class="text-danger" id="limit"></span> <br>
                                <small>Segera lakukan pembayaran sebelum waktu habis.</small>
                            </p>

                            <h1 class="text-center mb-5" id="clock"></h1>

                            <p class="mb-0">
                                Anda dapat melakukan pembayaran dengan cara sebagai berikut:
                            </p>
                        </div>

                        <ul id="how-to-pay" class="accordion list-group list-group-flush">
                            <li class="list-group-item">
                                <a href="#atm-bni" class="text-decoration-none stretched-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="atm-bni">ATM BNI</a>
                            </li>
                            <div id="atm-bni" class="card-body collapse" aria-labelledby="atm-bni" data-parent="#how-to-pay">
                                <ol>
                                    <li>Masukkan Kartu Anda.</li>
                                    <li>Pilih Bahasa.</li>
                                    <li>Masukkan PIN ATM Anda.</li>
                                    <li>Pilih "Menu Lainnya".</li>
                                    <li>Pilih "Transfer".</li>
                                    <li>Pilih Jenis rekening yang akan Anda gunakan (Contoh; "Dari Rekening Tabungan").</li>
                                    <li>Pilih “Virtual Account Billing”.</li>
                                    <li>Masukkan nomor Virtual Account Anda (contoh: 8277087781881441).</li>
                                    <li>Tagihan yang harus dibayarkan akan muncul pada layar konfirmasi.</li>
                                    <li>Konfirmasi, apabila telah sesuai, lanjutkan transaksi.</li>
                                    <li>Transaksi Anda telah selesai</li>
                                </ol>
                            </div>

                            <li class="list-group-item">
                                <a href="#mobile-banking-bni" class="text-decoration-none stretched-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="mobile-banking-bni">Mobile Banking BNI</a>
                            </li>
                            <div id="mobile-banking-bni" class="card-body collapse" aria-labelledby="mobile-banking-bni" data-parent="#how-to-pay">
                                <ol>
                                    <li>Akses bni mobile banking dari handphone kemudian masukkan user id dan password</li>
                                    <li>Pilih menu “Transfer”.</li>
                                    <li>Pilih menu “Virtual Account Billing” kemudian pilih rekening debet.</li>
                                    <li>Masukkan nomor Virtual Account Anda (contoh: 8277087781881441) pada menu “inputbaru”.</li>
                                    <li>Tagihan yang harus dibayarkan akan muncul pada layar konfirmasi.</li>
                                    <li>Konfirmasi transaksi dan masukkan Password Transaksi.</li>
                                    <li>Pembayaran Anda Telah Berhasil.</li>
                                </ol>
                            </div>

                            <!-- iBank Personal -->
                            <li class="list-group-item">
                                <a href="#ibank-personal" class="text-decoration-none stretched-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="ibank-personal">iBank Personal</a>
                            </li>
                            <div id="ibank-personal" class="card-body collapse" aria-labelledby="ibank-personal" data-parent="#how-to-pay">
                                <ol>
                                    <li>Masukkan User ID dan password</li>
                                    <li>Klik menu Transfer, lalu pilih “Virtual Account Billing”.</li>
                                    <li>Kemudian masukan nomor Virtual Account Anda (contoh: 8277087781881441) yang hendak dibayarkan. Lalu pilih rekening debet yang akan digunakan. Kemudian tekan ‘’Lanjut’’</li>
                                    <li>Kemudin tagihan yang harus dibayarkan akan muncul pada layar konfirmasi.</li>
                                    <li>Masukkan Kode Otentikasi Token.</li>
                                    <li>Pembayaran Anda telah berhasil</li>
                                </ol>
                            </div>

                            <!-- Cabang atau Teller BNI -->
                            <li class="list-group-item">
                                <a href="#cabang-atau-teller-bni" class="text-decoration-none stretched-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="cabang-atau-teller-bni">Cabang atau Teller BNI</a>
                            </li>
                            <div id="cabang-atau-teller-bni" class="card-body collapse" aria-labelledby="cabang-atau-teller-bni" data-parent="#how-to-pay">
                                <ol>
                                    <li>Informasikan kepada Teller, bahwa ingin melakukan pembayaran “Virtual Account Billing”.</li>
                                    <li>Serahkan nomor Virtual Account Anda kepada Teller.</li>
                                    <li>Teller melakukan konfirmasi kepada Anda.</li>
                                    <li>Teller memproses Transaksi.</li>
                                    <li>Apabila transaksi Sukses anda akan menerima bukti pembayaran dari Teller tersebut.</li>
                                </ol>
                            </div>

                            <!-- Agen46 -->
                            <li class="list-group-item">
                                <a href="#agen46" class="text-decoration-none stretched-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="agen46">Agen46</a>
                            </li>
                            <div id="agen46" class="card-body collapse" aria-labelledby="agen46" data-parent="#how-to-pay">
                                <ol>
                                    <li>Informasikan kepada Agen46, bahwa ingin melakukan pembayaran Virtual.</li>
                                    <li>Serahkan nomor Virtual Account Anda kepada Agen46.</li>
                                    <li>Agen46 melakukan konfirmasi kepada Anda.</li>
                                    <li>Agen46 Proses Transaksi.</li>
                                    <li>Apabila transaksi Sukses anda akan menerima bukti pembayaran dari Agen46 tersebut.</li>
                                </ol>
                            </div>

                            <!-- ATM Bersama -->
                            <li class="list-group-item">
                                <a href="#atm-bersama" class="text-decoration-none stretched-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="atm-bersama">ATM Bersama</a>
                            </li>
                            <div id="atm-bersama" class="card-body collapse" aria-labelledby="atm-bersama" data-parent="#how-to-pay">
                                <ol>
                                    <li>Pilih "Transaksi Lainnya".</li>
                                    <li>Pilih menu "Transfer".</li>
                                    <li>Pilih "Transfer ke Bank Lain".</li>
                                    <li>Masukkan kode bank BNI (009) dan 16 Digit Nomor Virtual Account (contoh:8277087781881441).</li>
                                    <li>Masukkan nominal transfer sesuai tagihan atau kewajiban Anda. Nominal yang berbeda tidak dapat diproses.</li>
                                    <li>Konfirmasi rincian Anda akan tampil di layar, cek dan tekan 'Ya' untuk melanjutkan.</li>
                                    <li>Transaksi Berhasil.</li>
                                </ol>
                            </div>

                            <!-- ATM Bank Lain -->
                            <li class="list-group-item">
                                <a href="#atm-bank-lain" class="text-decoration-none stretched-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="atm-bank-lain">ATM Bank Lain</a>
                            </li>
                            <div id="atm-bank-lain" class="card-body collapse" aria-labelledby="atm-bank-lain" data-parent="#how-to-pay">
                                <ol>
                                    <li>Masukkan kode bank BNI (009) atau pilih bank yang dituju yaitu BNI.</li>
                                    <li>Masukan 16 Digit Nomor Virtual Account pada kolom rekening tujuan, (contoh:8277087781881441).</li>
                                    <li>Masukkan nominal transfer sesuai tagihan atau kewajiban Anda. Nominal yang berbeda tidak dapat diproses.</li>
                                    <li>Masukkan jumlah pembayaran : 44000.</li>
                                    <li>Konfirmasi rincian Anda akan tampil di layar, cek dan apabila sudah sesuai silahkanlanjutkan transaksi sampai dengan selesai.</li>
                                    <li>Transaksi Berhasil.</li>
                                </ol>
                            </div>

                            <!-- OVO -->
                            <li class="list-group-item">
                                <a href="#ovo" class="text-decoration-none stretched-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="ovo">OVO</a>
                            </li>
                            <div id="ovo" class="card-body collapse" aria-labelledby="ovo" data-parent="#how-to-pay">
                                <ol>
                                    <li>Pilih menu Transfer.</li>
                                    <li>Pilih “Rekening Bank”.</li>
                                    <li>Masukkan kode bank BNI (009) atau pilih bank yang dituju yaitu BNI.</li>
                                    <li>Masukan 16 Digit Nomor Virtual Account pada kolom rekening tujuan, (contoh:8277087781881441).</li>
                                    <li>Masukkan nominal transfer sesuai tagihan atau kewajiban Anda.</li>
                                    <li>Pilih “Transfer”.</li>
                                    <li>Konfirmasi rincian Anda akan tampil di layar.</li>
                                    <li>Cek dan apabila sudah sesuai silahkan pilih “Konfirmasi” untuk lanjutkan transaksi sampai dengan selesai.</li>
                                    <li>Transaksi Berhasil.</li>
                                </ol>
                            </div>
                        </ul>
                    </div>

                </div>
                <div class="col-md-5">
                    <h5>Detail Pembayaran</h5>
                    <div class="callout callout-warning bg-light py-1 border-top-0 border-right-0 border-bottom-0">
                        <p class="lead">Total</p>
                        <p class="lead mb-0">
                            <small class="align-top text-secondary">Rp</small>1.700.000
                        </p>
                        <small>
                            <span class="text-secondary">Terbilang: </span>
                            <em>Satu Juta Tujuh Ratus Ribu Rupiah</em>
                        </small>

                        <hr>

                        <strong class="mb-0">Item Tagihan Satu</strong>
                        <p class="py-0 mb-0"><small>Tahun 2019/2020, semester 6 - Genap</small></p>
                        <div class="callout callout-default py-1 mb-2 border-top-0 border-right-0 border-bottom-0">
                            <small class="align-top text-secondary">Rp</small>1.300.000 +
                            <small class="align-top text-secondary">Rp</small>100.000 <span class="text-secondary">(Denda)</span>
                        </div>

                        <strong class="mb-0">Item Tagihan Dua</strong>
                        <p class="py-0 mb-0"><small>Tahun 2019/2020, semester 6 - Genap</small></p>
                        <div class="callout callout-default py-1 mb-2 border-top-0 border-right-0 border-bottom-0">
                            <small class="align-top text-secondary">Rp</small>300.000
                        </div>
                    </div>
                    <div>
                    <a type="button" href="<?= base_url();?>member/pemesanan" class="btn btn-primary btn-block">Selesai</a>
                    </div>
                    
                </div>
            </div>
           
        </div>
    </div>

    <script type="text/javascript">

    var limit = new Date().toLocaleString("en-US", {timeZone: "Asia/Jakarta"}).slice(0,10).replace(/\//g,'-') + " 23:59:59";
    // Set the date we're counting down to
    var countDownDate = new Date(limit).getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        // var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        hours = (hours < 10) ? '0' + hours : hours;
        document.getElementById("limit").innerHTML = limit;
        document.getElementById("clock").innerHTML = hours + ":" + minutes + ":" + seconds;

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("clock").innerHTML = "EXPIRED";
        }
    }, 1000);
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/popperjs/dist/umd/popper.min.js"></script>
    <script src="assets/bootstrap/dist/js/bootstrap.min.js"></script>