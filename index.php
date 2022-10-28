<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="src/LOGO.svg" type="image/icon type">
  <title>VEB</title>
  <link rel="stylesheet" href="scss/style.css">
</head>
<body>
  <header>
    <a href="dev.php"><img src="src/header 1LOGO.svg" alt="VEB"></a>
  </header>
  <main>
    <div class="black flex-col BR">
      <div class="" id="grid">
        <!-- Telli leht -->

        <a href="#form" id="telli-leht" class="grid-child">
          <h2 class="border">Telli leht</h2>
          <div class="background">
            <img src="src/lower tab.svg" alt="-">
            <img src="src/fullscreen.svg" alt="O">
            <img src="src/close tab.svg" alt="X">
          </div>
        </a>


        <!-- meist -->

        <a href="#meiemeeskond" class="grid-child" id="Meist">
          <h2>Meist</h2>
          <ul class="background">
            <li id="dot1" class="dots"></li>
            <li id="dot2" class="dots"></li>
            <li id="dot3" class="dots"></li>
            <li id="dot4" class="dots"></li>
            <li id="dot5" class="dots"></li>
          </ul>
        </a>


        <!-- oskuste pagas -->
        <a id="TALTECH" class="grid-child">
          <h2>Oskuste pagas</h2>
          <img class="background" src="src/TALTECH.png" alt="TALTECH" />
        </a>

        <!-- arrow -->
        <a id="arrow" href="#" class="arrow">
          <h2>↓</h2>
        </a>  

        <!-- võta ühendust -->

        <a href="#form" class="grid-child " id="vota-uhendust">
          <h2>Võta ühendust</h2>
          <img src="src/mail.svg" alt="mail">
          <img src="src/phone.svg" alt="call">
        </a>


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
      <a target="_blank" href="https://www.instagram.com/veb_of/" class="instagram flex normal"><img src="src/Instagram.svg" alt="">veb_of</a>
      <div class="center flex-col">
        <h2>
          Kas Sul on küsimus,
          projekt või idee,
          millega vajad abi?
        </h2>
        <p>Võta meiega ühendust!</p>
        
        <form id="form" action="" method="post">
          <div class="grid">
            <input placeholder="Nimi" type="text" name="name" id="name" required>
            <input placeholder="E-mail" type="email" name="email" id="email" required>
            <textarea rows="10" type="text" name="message" id="message" required>Sõnum</textarea>
            <button class="submit" type="submit" form="form" value="Saada"><p>Saada</p><img src="src/saada.svg"></button>
          </form>
        </div>
        <?php
        require_once __DIR__.'/vendor/autoload.php';
        use Dotenv\Dotenv;
        $dotenv = Dotenv::createImmutable(__DIR__);
        if (isset($_POST["name"]) & isset($_POST["email"])) {
          $dotenv->load();

          $name = $_POST['name'];
          $email = $_POST['email'];
          $message = $_POST['message'];

          $client = new MongoDB\Client($_ENV['MONGODB']);
          $collection = $client->test->support;

          $collection->insertOne([
            "name"=> $name, 
            "email"=> $email,
            "message"=> $message
          ]);
          echo "<p>Well see into that soon :)</p>"; ;
        }
        ?>
      </div>
    </div>
  </main>
  <footer class="flex">
    <a href="#"><img src="src/LOGO.svg" alt="VEB"></a>
    <a target="_blank" href="https://www.instagram.com/veb_of/" class="instagram flex normal"><img src="src/Instagram.svg" alt="">veb_of</a>
    <p class="copyright">Autoriõigused © 2022 VEB.<br> Kõik õigused kaitstud.</p>
  </footer> 
</body>
</html>