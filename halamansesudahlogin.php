<?php
include 'session.php';
?> 
<html>

<head>
    <title>The GreenPeace</title>
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/w3css/3/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <style>
        * {
            box-sizing: border-box;
        }

        /* Style the body */
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        /* Header/logo Title */
        .header {
            padding: 80px;
            text-align: center;
            color: greenyellow;
            background-image: url(image/fff.jpg);
        }

        /* Increase the font size of the heading */
        .header h1 {
            font-size: 65px;
        }

        /* Sticky navbar - toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed). The sticky value is not supported in IE or Edge 15 and earlier versions. However, for these versions the navbar will inherit default position */
        .navbar {
            overflow: hidden;
            background-color: green;
            position: sticky;
            position: -webkit-sticky;
            top: 0;
        }

        /* Style the navigation bar links */
        .navbar a {
            float: left;
            display: block;
            color: white;

            padding: 14px 20px;
        }


        /* Right-aligned link */
        .navbar a.right {
            float: right;
        }

        /* Change color on hover */
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Active/current link */
        .navbar a.active {
            background-color: #666;
            color: white;
        }

        /* Column container */
        .row {
            display: -ms-flexbox;
            /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap;
            /* IE10 */
            flex-wrap: wrap;
        }

        /* Main column */
        .main {
            -ms-flex: 70%;
            /* IE10 */
            flex: 70%;
            background-color: white;
            padding: 20px;
            margin-left: 15%;
            margin-right: 15%;
        }

        /* Footer */
        .footer {
            padding: 20px;
            text-align: center;
            background: green;
            color: white;

        }

        /* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 700px) {
            .row {
                flex-direction: column;
            }
        }

        /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
        @media screen and (max-width: 400px) {
            .navbar a {
                float: none;
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <div class="header">
        <h1>GreenPeace</h1>
        <p> <b>Selamat Datang Manusia</b> website for human</p>
        <p>human <b><?php echo $_SESSION["username"]?></b></p>
    </div>

    <header class="navbar">
        <div class="topnav-left">
            <a href="#" class="active">Home</a>
        </div>

        <!-- <div class="topnav-right">
            
        </div> -->

        <!-- Right-aligned links -->
        <div class="topnav-right">
        <a href="edit_profile.php">Edit Profile</a>
            <a href="index.php">Logout</a>
        </div>

        

    </header>


    <div class="main">
        <h1><b>Aksi Yang Kita Lakukan</b></h1>
        <p>Untuk melakukan perubahan kami beraksi secara langsung, dengan bantuan relawan dan donatur seperti kamu kita
            bisa melakukan banyak kegiatan untuk berkampanye seperti berikut ini.</p>

        <section>
            <img class="mySlides" src="image/slide1.jpg" style="width:100%">
            <img class="mySlides" src="image/slide2.jpg" style="width:100%">
            <img class="mySlides" src="image/slide3.jpg" style="width:100%">
        </section>

        <br>
        <h1><b>Kenali Greenpeace</b></h1><br>
        <p>Greenpeace memiliki misi untuk membuat dunia yang lebih hijau dan damai. Cari tahu lebih lanjut terkait
            organisasi kami dengan link di bawah ini.</p>

        <div class="row">
            <div class="col-md-3">
                <img src="image/tentang.jpg">
                <p><b>Tentang Kami</b></p>
                <p>Greenpeace hadir karena bumi yang rapuh ini perlu suara. Butuh solusi. Butuh perubahan. Butuh aksi.
                    Greenpeace memiliki landasan prinsip dan nilai-nilai dasar yang tercermin dalam setiap aksi kampanye
                    lingkungan kami.</p>
                <p><a href="tentangkamilogin.php">Tentang GreenPeace Indonesia Selengkapnya</a></p>
            </div>
            <div class="col-md-3">
                <img src="image/sejarah.jpg">
                <p><b>Sejarah Greenpeace</b></p>
                <p>Di tahun 1971, dengan motivasi menjadikan dunia menjadi hijau dan damai, sekelompok aktivis berlayar
                    dari Vancouver, Cananda, untuk melakukan protes terhadap rencana uji coba bom nuklir Amerika Serikat
                    di pulau Amchitka, pesisir barat Alasaka.</p>
                <p><a href="sejarahlogin.php">Sejarah GreenPeace Indonesia Selengkapnya</a></p>
            </div>
            <div class="col-md-3">
                <img src="image/kemenangan.jpg">
                <p><b>Kemenangan</b></p>
                <p>Selama bertahun-tahun, Greenpeace telah melakukan suatu perubahan positif untuk lingkungan dunia dan
                    juga termasuk Asia Tenggara. Terima kasih atas bantuanmu. Inilah kemenangan kita, inilah kemenangan
                    untuk lingkungan!</p>
                <p><a href="kemenanganlogin.php">Kemenangan Yang Kita Raih</a></p>
            </div>
            <div class="col-md-3">
                <img src="image/pendanaan.jpg">
                <p><b>Pendanaan</b></p>
                <p>Sebagai organisasi kampanye yang independen, donasi kamu sangat berarti untuk mendukung setiap
                    kampanye yang kami lakukan. Bersama-sama, kita adalah suara yang kuat untuk bumi dan penghuninya.
                    Kami tidak bisa melakukannya tanpa kamu.</p>
                <p><a href="pendanaanlogin.php">Pendanaan GreenPeace Indonesia</a></p>
            </div>

        </div>


        <br>
        <h1><b>Artikel Baru</b></h1></br>
        <div class="row">

            <div class="col-md-4 col-sm-12 mb-3">
                <div class="card">
                    <img src="image/isi1.jpg" class="card-img-top" alt="...">

                    <div class="card-body">
                        <div class="card-title">
                            <h4>Jangan Biarkan UU Cipta Kerja Membakar Hutan Indonesia!</h4>
                        </div>
                        <h6>Ratri Kusumohartono. 22 Oktober 2020</h6>
                        Siang itu terik matahari terasa sangat menyengat di pertengahan September 2019. Kabut pekat asap
                        di
                        Banjarmasin cukup tebal dan sudah beberapa minggu menyelimuti kota. Kami menggunakan sistem
                        informasi
                        geografis atau geographic information system (GIS) untuk mengecek lokasi dimana titik api paling
                        berasal
                        yang menyumbang kabut asap pekat di kota ini. Ternyata lokasinya berada di arah barat laut
                        Banjarmasin,
                        untuk menuju kesana kita harus menempuh jalur darat selama lima jam.
                    </div>

                    <div class="card-footer">
                        <a href="https://www.malasngoding.com/card-bootstrap-4/" class="card-link">Lihat</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card">
                    <img src="image/isi2.jpg" class="card-img-top" alt="...">

                    <div class="card-body">
                        <div class="card-title">
                            <h4>Analisis Greenpeace: Hutan dan Lahan Gambut Setara 8 Kali Luas Pulau Bali Terbakar dalam
                                5 Tahun Terakhir</h4>
                        </div>
                        <h6>Greenpeace Indonesia. 22 Oktober 2020</h6>
                        <p><b>Jakarta, 22 Oktober 2020.</b> Laporan terbaru Greenpeace Asia Tenggara ‘Karhutla Dalam
                            Lima Tahun Terakhir’
                            mengungkap kegagalan total pemerintah Indonesia dalam melindungi hutan dan lahan gambut dari
                            pembakaran.
                            Terungkap sekitar 4,4 juta hektar lahan atau setara 8 kali luas pulau Bali terbakar antara
                            tahun 2015-2019.</p>
                    </div>

                    <div class="card-footer">
                        <a href="https://www.malasngoding.com/card-bootstrap-4/" class="card-link">Lihat</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card">
                    <img src="image/isi3.jpg" class="card-img-top" alt="...">

                    <div class="card-body">
                        <div class="card-title">
                            <h4>Korupsi Ekspor Benih Lobster Petaka Bagi Ekosistem Laut</h4>
                        </div>
                        <h6>Ulfah M Hikmah. 1 Desember 2020</h6>
                        Penangkapan Edhy Prabowo, Menteri Kelautan dan Perikanan (KKP) oleh KPK menguak pertanda
                        keculasan dalam tata kelola sumberdaya ikan dan laut saat ini. Perkara yang disangkakan diduga
                        terkait tindak pidana korupsi dalam pelegalan kembali ekspor benih lobster yang tercantum dalam
                        Peraturan Menteri Kelautan dan Perikanan Nomor 12 Tahun 2020. Dalam kebijakan pemerintah
                        tersebut, terdapat sejumlah kejanggalan yang mengancam keanekaragaman hayati ekosistem laut.
                    </div>

                    <div class="card-footer">
                        <a href="https://www.malasngoding.com/card-bootstrap-4/" class="card-link">Lihat</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php
// include 'session.php';
require_once 'config/koneksi.php';
$idreg = $_SESSION['username'];
// echo $idreg;exit;
try{
$sql = "SELECT * FROM komentar WHERE username = ?";
$q = $database_connection->prepare($sql);
$q->execute([$idreg]);
}catch(PDOException $e){
die("Tidak Bisa Membuka Database $database_name :" . $e->getMessage());
}

foreach ($q as $row) {
    $id_komentar = $row['id_komentar'];
    $isi_komentar = $row['isi_komentar'];
    $username = $row['username'];
   }
?>

    Silahkan Berkomentar<hr/><br/>
<div class="row">
<div class="col-md-6">
<form action='config/komentar.php' method='POST'>
<table>
       <tr>
         <td>Tulis komentar:</td>
         <td><textarea cols="30" rows="5" name="isikomentar"></textarea></td>
       </tr>
       <tr>
         <td><input type="submit" value="Kirim Komentar"/></td>
         <td><input type="reset" value="Hapus"></td>
        </tr>
</table>
</form>
</div>
<div class="col-md-6">
<?php
 if(isset($isi_komentar)){

 
?>
<?=$isi_komentar?>
<a href="<?='config/hapus.php?id='.$id_komentar?>"> Hapus Komentar</a>

<?php } ?>
</div>

</div>    


    <div class="footer">
        <h2>GreenPeace Indonesia</h2>
        <h3> @Copyright by 18111141_RifkyMuhammadFadilah_TIFRP18CIDA_UASWEB1</h3>
        <h4>Sumber: Greenpeace (http://www.greenpeace.or.id)</h4>
    </div>

    <script>
        // Automatic Slideshow - change image every 3 seconds
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) { myIndex = 1 }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 3000);
        }
    </script>

</body>

</html>