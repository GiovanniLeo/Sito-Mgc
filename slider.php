<html>
<head>
<title>Your slider in a simple web page</title>

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
      <img src="images/1.jpg">
      <div class="ism-caption ism-caption-0">Insieme a voi</div>
    </li>
    <li>
      <img src="ism/image/slides/office-620822_1280.jpg">
      <div class="ism-caption ism-caption-0">Working <b>remotely</b></div>
    </li>
    <li>
      <img src="ism/image/slides/telephone-586268_1280.jpg">
      <div class="ism-caption ism-caption-0">On the move</div>
    </li>
  </ol>
</div>
</body>
</html>
