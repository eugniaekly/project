<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once 'connect.php' ?>
    <title>profil eugenia</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <header>
        <section class="navbar">
        <nav class="nav-list">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </section>

    <section id="home">
        <h1>Halo, saya Eugenia!</h1>
        <p>nama lengkap saya eugenia eklesia kansil saya biasa dipanggil eje tempat asal saya desa guaan namun saat ini saya tinggal di kota manado saya kelahiran tahun 2004 dan saat ini saya berumur 20 tahun  saya berkuliah di universitas samratulangi manado difakultas teknik elektro program studi teknik informatika</p>
    </section>

    <section id="gallery">
        <h2>Gallery</h2>
        <div class="img-container">
            <img src="assets/img/1.jpg" alt="">
            <img src="assets/img/3.jpg" alt="">
            <img src="assets/img/2.jpg" alt="">
        </div>
    </section>

    <section id="blog">
        <h2>Blog</h2>
        <div class="blog-container">
            <?php
            while ($article = $get_result->fetch_assoc()){
            ?>
            <div class="blog-item">
                <h3><?php echo $article['title']; ?></h3>
                <a href="<?php echo $article['link']; ?>">Baca Selengkapnya</a>
            </div>
            <?php
            }
            ?>
        </div>
    </section>

    <section id="contact">
        <h2>Kontak</h2>
        <a href="https://www.instagram.com/eugniaekly?igsh=MWtqb2hyaGF0NWl3cA==">instagram</a>
        <p>eugenia.kansil03@gmail.com</p>
    </section>
</body>
</html>