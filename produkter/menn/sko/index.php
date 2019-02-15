<!Doctype HTML>
<html lang="NB" dir="ltr">
<head>
  <?php
    $title = "HypeIT | Produkter - Menn - Bukser";
        include "../../../elements/head.php";
       ?>
    </head>
    <body>
      <nav>
        <?php
          include "../../../elements/nav.php";
         ?>
      </nav>
      <main>

        <div class="produktside">

          <div class="venstreside">
            <div class="Bilder">
              <img src="../../../images/yeezy-700/1.png" class="StortBilde" id="storBilde">
              <div class="smaBilder" id="Gliscor">
                <img src="../../../images/yeezy-700/1.png" alt="Bukse" id="img1">
                <img src="../../../images/yeezy-700/2.png" alt="Bukse" id="img2">
                <img src="../../../images/yeezy-700/3.png" alt="Bukse" id="img3">
              </div>
            </div>
          </div>

          <div class="hoyreside">
            <h2><a>Yeezy Boost 700</a></h2>
            <h2><a class="pris"> 4000,-</a></h2>
            <div class="str">
              <a>40</a>
              <a>41</a>
              <a>42</a>
              <a>43</a>
              <a>44</a>
              <a>45</a>
              <a>46</a>
              <a>47</a>
            </div>

            <a href="javascript:void(0)" class="shopBtn" tabindex="2" onclick="addToBasket(this);cartCounter(this);" id="frontBtn">Legg i handlekurv</a>

          </div>
        </div>


        <!-- Eline koder under her -->

        <div class="anbefalte">
          <h1>Andre har også kjøpt</h1>
          <div class="anbefaltwrapper">
            <a href="#"><div class="anbefaltbox">
              <img src="../../../images/t-skjorte.png" alt="Royal">
            <div class="anbefaltinfo">
              <div class="anbefalttext"> Cat in the Hat Hettegenser </div>
              <div class="anbefaltpris"> 3000,- </div>
            </div>
           </div>
          </a>
            <a href="#"><div class="anbefaltbox">
              <img src="../../../images/t-skjorte.png" alt="Royal">
            <div class="anbefaltinfo">
              <div class="anbefalttext"> Cat in the Hat Hettegenser </div>
              <div class="anbefaltpris"> 3000,- </div>
            </div>
            </div>
            </a>
            <a href="#"> <div class="anbefaltbox">
              <img src="../../../images/t-skjorte.png" alt="Royal">
            <div class="anbefaltinfo">
              <div class="anbefalttext"> Cat in the Hat Hettegenser </div>
              <div class="anbefaltpris"> 3000,- </div>
            </div>
            </div>
            </a>
            <a href="#"><div class="anbefaltbox">
              <img src="../../../images/t-skjorte.png" alt="Royal">
            <div class="anbefaltinfo">
              <div class="anbefalttext"> Cat in the Hat Hettegenser </div>
              <div class="anbefaltpris"> 3000,- </div>
            </div>
            </div>
          </a>
          </div>

        </div>

      </main>
      <footer>
        <?php
          //include "../../../elements/footer.php";
         ?>
      </footer>
      <script>
        /* Initiate Magnify Function
        with the id of the image, and the strength of the magnifier glass:*/
        //magnify("storBilde", 2);
      </script>
    </body>
    </html>
