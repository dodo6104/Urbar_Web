<?php
$oznamy = [
  ["nazov" => "Pozvánka na Oslavy Dňa Zeme", "text" => "Nezmeškajte prednášku o ochrane prírody, ktorá sa uskutoční v miestnom kultúrnom dome dňa 5. júla.", "date" => "28.11.2023"],
  ["nazov" => "Pozvánka na Oslavy Dňa Zeme", "text" => "Plánujeme výsadbu nových stromov v oblasti severného parku. Všetci sú vítaní sa zúčastniť 22. novembra od 9:00.", "date" => "28.11.2023"],
  ["nazov" => "Zber Odpadu v Parku", "text" => "Zorganizujeme zber odpadu v mestskom parku tento víkend. Pridajte sa k nám a pomôžte udržať náš park čistý!", "date" => "28.11.2023"],
  ["nazov" => "Pozvánka na Oslavy Dňa Zeme", "text" => "Srdečne vás pozývame na oslavy Dňa Zeme, ktoré sa uskutočnia 22. apríla na hlavnom námestí.", "date" => "28.11.2023"],
  ["nazov" => "Zber Odpadu v Parku", "text" => "Nezmeškajte prednášku o ochrane prírody, ktorá sa uskutoční v miestnom kultúrnom dome dňa 5. júla.", "date" => "28.11.2023"],
  ["nazov" => "Zber Odpadu v Parku", "text" => "Zorganizujeme zber odpadu v mestskom parku tento víkend. Pridajte sa k nám a pomôžte udržať náš park čistý!", "date" => "28.11.2023"],
  ["nazov" => "Uzavretie Lesnej Cesty", "text" => "Zapojte sa do našej fotografickej súťaže a zachyťte krásy našej prírody. Najlepšie snímky budú vystavené v knižnici.", "date" => "28.11.2023"],
  ["nazov" => "Zber Odpadu v Parku", "text" => "Nezmeškajte prednášku o ochrane prírody, ktorá sa uskutoční v miestnom kultúrnom dome dňa 5. júla.", "date" => "28.11.2023"],
];
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urbár Plavecký Mikuláš</title>
    <link rel="stylesheet" href="static/home_style.css">
    <link rel="icon" type="image/png" href="static/forest.png">
</head>
<body>
    <div class="header" id="header">
        <div class="header-content">
            <img src="static/forest.png" alt="Forest icon">
            <h1>Urbár Plavecký Mikuláš</h1>
        </div>
    </div>

    <div class="navbar">
        <ul>
            <li><a href="#oznamy-section">Oznamy</a></li>
            <li><a href="#about-section">O nás</a></li>
            <li><a href="#contact-section">Kontakt</a></li>
        </ul>
    </div>
    


    <div class="announcements" id="oznamy-section">
        <h2>Oznamy</h2>
        <div id="announcements-container"></div>
        <button id="showMore" style="display:none;">Zobraziť viac oznamov</button>
        <button id="showLess" style="display:none;">Zobraziť menej oznamov</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/cross-fetch@4.0.0/dist/browser-ponyfill.min.js"></script>    
    <script src="static/home_script.js"></script>
    <script type="module" src="static/google.js"></script>
    <div class="content" id="about-section">
        <h2>O nás</h2>
        <div class="content-text">
            <p>...</p>
        </div>
    </div>
    
    <div class="content" id="contact-section">
        <h2>Kontakt</h2>
        <div class="content-text">
            <p><strong>Telefónne číslo:</strong> +421 905 659 785</p>
            <p><strong>Adresa sídla:</strong> <a href="https://www.google.com/maps/place/Plaveck%C3%BD+Mikul%C3%A1%C5%A1+58,+906+35+Plaveck%C3%BD+Mikul%C3%A1%C5%A1/@48.5092298,17.3026745,17z/data=!3m1!4b1!4m6!3m5!1s0x476cb99acfecb9d5:0x3030714d0cd2a660!8m2!3d48.5092298!4d17.3052494!16s%2Fg%2F11crrmgmv6?entry=ttu" target="_blank">Plavecký Mikuláš 58, 906 35 Plavecký Mikuláš</a></p>
        </div>
    </div>
</body>
</html>