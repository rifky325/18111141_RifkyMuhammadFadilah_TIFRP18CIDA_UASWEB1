<?php
include 'session.php';
?> 
<html>
<head>
    <title>Tentang Kami</title>
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
    <div class="navbar">
        <div class="topnav-left">
            <!-- <a href="#" class="active">Home</a> -->
        </div>
         <!-- Right-aligned links -->
         <div class="topnav-right">
            <a href="halamansesudahlogin.php">Kembali</a>
        </div>
    </div>
    <div class="main">
        <h1><b>Tentang Kami</b></h1>

        <h3><b>Greenpeace hadir karena bumi yang rapuh ini perlu suara. Butuh solusi. Butuh perubahan. Butuh aksi.</b>
        </h3>
        <img src="image/tentang1.jpg">
<h5>
        <p>
            <li><b>Aksi tanpa kekerasan dan bertanggung jawab secara pribadi.</b> Kami beraksi dengan penuh kesadaran.
                Artinya kami siap bertanggung jawab untuk setiap aksi yang dilakukan, termasuk bertanggung jawab secara
                pribadi.
                Kami berkomitmen penuh terhadap perdamaian; semua aktivis Greenpeace yang mengikuti aksi telah mendapat
                pelatihan
                tentang aksi damai.</li>
        </p>
        <p>
            <li><b>Independensi.</b> Sejak berdiri, Greenpeace tidak pernah menerima dana dari pemerintah, perusahaan
                atau partai
                politik manapun. Donasi individu adalah tulang punggung kampanye Greenpeace.</li>
        </p>
        <p>
            <li><b>Greenpeace tidak punya lawan atau kawan yang permanen.</b> Jika sebuah pemerintahan atau perusahaan
                punya komitmen untuk membuat perubahan positif, kami akan bekerja sama demi mewujudkan perubahan itu.
                Tetapi jika komitmen itu berubah atau tidak dijalankan, kami akan kem</li>
        </p>
        <p>
            <li><b>Mempromosikan solusi.</b> Melakukan tekanan tidaklah cukup; kami merancang, melakukan riset dan
                mengkampanyekan langkah-langkah nyata demi terwujudnya masa depan yang hijau dan damai bagi kita semua.
            </li>
        </p>
    </h5>
        <h1><b>Transparansi dan Akuntabilitas</b></h1>

        <h3><p>Greenpeace terus memastikan transparansi dan akuntabilitas publik dalam setiap kampanye, penggalangan dana,
            hingga manajemen penggunaan dananya. Apalagi mengingat tulang punggung kampanye Greenpeace adalah donasi
            dari individu-individu.</p>

            <p>Greenpeace adalah anggota dari Accountable Now, sebuah platform global organisasi-organisasi masyarakat
            sipil. Bersama-sama, kami bertekad untuk transparan, responsif kepada segenap pemangku kepentingan dan fokus
            kepada menciptakan perubahan. Kami telah menandatangani kesepakatan global Accountability Commitments dan
            bertekad untuk menghormati hak asasi manusia, tetap independen, dan bekerja secara etis dan profesional.</p>

            <p>Setiap tahunnya kinerja ekonomi, sosial dan lingkungan Greenpeace dilaporkan kepada publik sesuai dengan
            acuan pelaporan Accountable Now (Reporting Framework) dan kepada auditor independen.</p>
        </h3>
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
    </div>
    <div class="footer">
        <h2>GreenPeace Indonesia</h2>
        <h3> @Copyright by 18111141_RifkyMuhammadFadilah_TIFRP18CIDA_UASWEB1</h3>
        <h4>Sumber: Greenpeace (http://www.greenpeace.or.id)</h4>
    </div>
</body>
</html>