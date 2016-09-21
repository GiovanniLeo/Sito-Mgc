<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<link type="text/css" rel="stylesheet" href="css\glob.css">

<title>Movimento Giovanile per il Cambiamento</title>
<link rel="icon" href="images/logoPiccolo.png">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>

  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 50%;
      margin: auto;
  }
  </style>
</head>
<body >
      <?php include "nav.php" ?>
    <div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/tiles/alim.png" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
        <h3>Banco Alimentare</h3>
        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
      </div>
      </div>

      <div class="item">
        <img src="images/tiles/cine.png" alt="Chania" width="460" height="345">
         <div class="carousel-caption">
        <h3>Cineforum</h3>
        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
      </div>
      </div>
    
      <div class="item">
        <img src="images/tiles/cultura.png" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
        <h3>Cultura</h3>
        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
      </div>
      </div>

      <div class="item">
        <img src="images/tiles/movcitt.png" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
        <h3>Movimento Cittadino</h3>
        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
      </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
        <div class="main">
        	<p>Il Movimento Giovanile si prefigge come obiettivo la <b>rivoluzione culturale</b> <br>
        	<p>partendo dal confronto con i ragazzi su varie tematiche sociali, politiche, economice <br>
        	<p>culturali ed ambientali.
        	<p>Il Movimento cerca di assicurare un ruolo prioritario e principale ai giovani,<br>
        	<p>come propulsore di idee e proposte, favorendo ed incentivando in politica di nuove figure.
        </div>
    <?php include "footer.php" ?>
</body>
</html>