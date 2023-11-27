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
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <h3>Spoločenstvo urbarialistov – pozemkové spoločenstvo Plavecký Mikuláš</h3>
        <p><strong>IČO:</strong> 31801757</p>
        <p><strong>Dátum zápisu:</strong> 26.11.1997</p>
        <p><strong>Vložka číslo:</strong> R-0006/MA</p>
        <p><strong>Stav PS:</strong> Zaregistrovaná</p>
        <p><strong>Funkčné obdobie výboru:</strong> 5</p>
        <p><strong>Funkčné obdobie dozornej rady:</strong> 5</p>
        <p><strong>Vykonáva podnikateľskú činnosť?</strong> nie</p>
        <p><strong>Spoločenstvo vlastníkov spoločne obhospod. nehnuteľnosti:</strong> nie</p>
        </div>
    </div>
    
    <div class="content" id="contact-section">
        <h2>Kontakt</h2>
        <div class="content-text">
            <p><strong>Telefónne číslo:</strong> +421 905 659 785</p>
            <p><strong>Email:</strong> urbarplaveckymikulas@gmail.com</p>
            <p><strong>Adresa sídla:</strong> <a href="https://maps.app.goo.gl/GtUATfrQctZ9dwV17" target="_blank">Plavecký Mikuláš 58, 906 35 Plavecký Mikuláš</a></p>
        </div>
    </div>
</body>
</html>