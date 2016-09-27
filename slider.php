<html>
<head>
<title>Your slider in a simple web page</title>
<meta charset="utf-8">
<style>
body { background-color: #fff; color: #000; padding: 0; margin: 0; }
.container { width: 80%; margin-left:10%;margin-right:10%; padding-top: 1em; }
.container .ism-slider { margin-left: auto; margin-right: auto; }
</style>

<link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/my-slider.css"/>
<script src="javaScript/ism-2.2.min.js"></script>

</head>
<body>
<div class='container'>

<div class="ism-slider" data-play_type="once-rewind" id="my-slider">
  <ol>
    <li>
      <img src="images/mgc12.jpg" alt="Presente">
    </li>
    <li>
      <img src="images/1.jpg" alt="Noi">
    </li>
    <li>
      <img src="images/mgc16.jpg" alt="Noi">
    </li>
  </ol>
</div>
</body>
</html>
