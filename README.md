# HypeIT

<!--ts-->
   - [Om HypeIt](#hypeit)
   - [Template for nye sider](#template)
   - [To do list](#to-do)
<!--te-->
Markedsføring og Salg samarbeidsprosjekt.


Et samarbeidsprosjekt med hele klassa, vi har 4 grupper:
 - Front-end
 - Back-end
 - Design
 - Markedsføring

Vi skal lage en fullstendig online bedrift bortett bra at vi ikke egentlig skal selge noe.

Dette er HypeIt :D


# Template

Current new page template we use (Will be constantly updated):
```php
<!Doctype HTML>
<html lang="NB" dir="ltr">
<head>
  <?php
    $title = "HypeIT - Hjem";
    include "../elements/head.php";
   ?>
</head>
<body>
  <nav>
    <?php
      include "../elements/nav.php";
     ?>
  </nav>
  <main>


<!--
  Write code here
-->


  </main>
  <footer>
    <?php
      include "../elements/footer.php";
     ?>
  </footer>
</body>
</html>

```

# To do

 - Bestemme Logo
 - Forbedre søkefunksjon
 - Bygge slider for anbefalte produkter
 &#10004; Cookie popup
 - Handlekurv
 - Sexy animation på search lista
 - Gjøre så man ikke får markert kryss ut knappen på cookies
 - Mouseover zoom på produktbilder
 - "Om oss" side??
 - Når du høyreklikker på "søk" ikonet så åpner den seg fortsatt. "Feature or bug"?
 - Gjøre så #cartCounter endrer seg riktig
