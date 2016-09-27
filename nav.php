<!DOCTYPE html>
<html>
<head>
<script src="javaScript/jsNavabar.js"> </script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<nav>
  <ul id="mainList" class="showList">
       
         <li><h1>MGC-Siano</h1></li>
         <li ><a href="home.php">Home</a></li>
		<!-- <li ><a href="#">Pensieri&amp;Parole</a></li>-->  <!-- La parte del sito del bloog articoli dei ragazzi -->
		 <li><a href="iniziative.php">Iniziative</a></li> <!-- Volantini della manifestazioni -->
		 <li ><a href="storia.php">Storia</a></li> 
		 <br/>
      </ul>
      
      <ul class="hideList">
         <li id="elementToHide"><h1>MGC-Siano</h1></li>
         <li class="menu-button" onclick="showMenu()">
           <div class="menu-icon">
			&#9776; 
		   </div><h1 style="font-size:2em"> Menu</h1>
		 </li>
	 </ul>
     
</nav>

</body>
</html>