<?php
$name = "muhammad rizki kaaml";
$title = "Web Developer & Cloud Enthusiast";
$bio = "Saya adalah seorang developer yang tertarik pada teknologi web dan arsitektur cloud. Saya suka membangun solusi digital yang sederhana dan bermanfaat.";
$email = "rizkikamal1102@gmail.com";
$location = "Jakarta, Indonesia";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= $name ?> | Personal Branding</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <img src="images/profile.jpg" alt="Foto Profil" class="profile">
        <h1><?= $name ?></h1>
        <h2><?= $title ?></h2>
        <p class="bio"><?= $bio ?></p>

        <div class="contact">
            <p>Email: <a href="mailto:<?= $email ?>"><?= $email ?></a></p>
            <p>Lokasi: <?= $location ?></p>
        </div>
    </div>
</body>]
</html>
