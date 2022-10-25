<?php 


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="src/Geometric partLOGO.svg" type="image/icon type">
  <title>VEB</title>
  <link rel="stylesheet" href="scss/style.css">
</head>
<body>
  <header>
    <img src="src/header 1LOGO.svg" alt="VEB">
  </header>
  <main>
    <div class="black flex-col BR">
      <div class="" id="grid">
        <!-- Telli leht -->
        <div class="grid-child" id="telli-leht">
          <h2>Telli leht</h2>
          <div class="background">
            <div class="border"></div>
            <div class="line"><img src="src/lower.svg" alt="-"></div>
            <div class="minimize"><img src="src/minimize.svg" alt="O"></div>
            <div class="cross"><img src="src/close.svg" alt="X"></div>
          </div>
        </div>

        <!-- meist -->
        <div class="grid-child" id="Meist">
          <h2>Meist</h2>
          <ul class="background">
            <li id="dot1" class="dots"></li>
            <li id="dot2" class="dots"></li>
            <li id="dot3" class="dots"></li>
            <li id="dot4" class="dots"></li>
            <li id="dot5" class="dots"></li>
          </ul>
        </div>

        <!-- oskuste pagas -->
        <div id="TALTECH" class="grid-child">
          <h2>Oskuste pagas</h2>
          <img class="background" src="src/TALTECH.png" alt="TALTECH" />
        </div>

        <!-- arrow -->
        <a id="arrow" href="#" class="arrow">
          <h2>↓</h2>
        </a>  

        <!-- võta ühendust -->
        <div class="grid-child" id="vota-uhendust">
          <h2>Võta ühendust</h2>
          <img src="src/mail.svg" alt="mail">
          <img src="src/phone.svg" alt="call">
        </div>

        <!-- suurem asi -->
        <div id="meie-teema" class="grid-child flex">
          <div class="flex-col">
            <h2>Erakordsed veebilehed on <b>meie teema.</b></h2>
            <span><h2>Erakordsus ja pisidetailid</h2></span>
          </div>
          <div class="flex-col">
            <span><h2>On meie teema.</h2></span>
            <h2>Tehtud oskuslikult,<br>kire ja armastusega,<br>keskendudes igale detailile.</h2>
          </div>
        </div>
      </div>

      <div class="flex-col">
        <div class="article">
          <div id="unik" class="flex-col"><b>Unikaalne.</b>Silmapaistev.</div>
          <h2>Üks ja ainus</h2>
          <p>Unusta maitsetud “valmispõhjale” tehtud veebilehed. Meie lehed on loodud loominguga muljetavaldades.</p>
        </div>
        <div class="article" >
          <div id="rahv" class="flex-col"><b><img src="src/Globeicon.svg" alt="www"></b><br>Eesti, Inglise, Vene, Soome</div>
          <h2>Rahvusvaheline</h2>
          <p>Saavuta rahvusvaheline tase jõudes klientideni kuni neljas erinevas keeles.</p>
        </div>
        <div class="article">
          <div id="hoverIMG"></div>
          <h2>Meiega oled nähtav</h2>
          <p>Meie lehed on optimeeritud kõrge SEO skoori jaoks, et sinu leht jõuaks klientideni esimesena.</p>
        </div>
        <div class="article">
          <img src="src/neeger.svg" alt="neeger">
          <h2>Sinu jaoks olemas</h2>
          <p>Meie kliendina oled sa alati meie esimene prioriteet, saad meiega ühendust võtta iga päev, hommikust õhtuni.</p>
        </div>
      </div>
    </div>
    <!-- sinisel taustal -->
    <div class="article" id="Meisterlik">
      <img src="src/TALTECH.png" alt="TALTECH">
      <h2>Meisterlik vilumus</h2>
      <p>Meie programmeerijad on pärit TalTechi baaskoolist, kusjuures omandades sealt parimaid tehnilisi oskusi Eestis.</p>
    </div>

    <div class="flex-col black UR">
      <div id="meiemeeskond" class="article">
        <img src="SRC/IMG_4200.JPG">
        <h2>Meie meeskond</h2>
        <p>Oleme tehnikale pühendunud noored. Lõime VEBi, märgates, et üha rohkematel Eesti ettevõtetel on aegunud lehed või lausa polegi lehte. Oleme siin selleks, et sinu ettevõte ei teeks sama viga.</p>
      </div>

      <div class="center flex-col">
        <h2>
          Kas Sul on küsimus,
          projekt või idee,
          millega vajad abi?
        </h2>
        <p>Võta meiega ühendust!</p>
        
        <form action="../form.php" method="post">
          <div class="grid">
            <input placeholder="Nimi" type="text" name="name" id="name" required>
            <input placeholder="E-mail" type="email" name="email" id="email" required>
            <textarea type="text" name="message" id="message" required>Sõnum</textarea>
            <input type="submit" value="Saada">
          </div>
        </form>

      </div>
    </div>
  </main>
  <footer class="flex">
    <img src="src/LOGO.svg" alt="VEB">
    <a href="https://www.instagram.com/veb_of/" class="instagram flex normal"><img src="src/Instagram.svg" alt="">veb_of</a>
    <p class="copyright">Autoriõigused © 2022 VEB.<br> Kõik õigused kaitstud.</p>
  </footer>
</body>
</html>