<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Stick Hero with Canvas</title>
  <link rel="stylesheet" href="{{ asset('css/stick_hero.css') }}">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
  <div id="score"></div>
  <canvas id="game" width="375" height="375"></canvas>
  <div id="introduction">Hold down the mouse to stretch out a stick</div>
  <div id="perfect">DOUBLE SCORE</div>
  <button id="restart">RESTART</button>
</div>

<a id="youtube" href="https://youtu.be/eue3UdFvwPo" target="_blank">
  <span>See how this game was made</span>
</a>
<div id="youtube-card">
  How to create a Stick Hero game with JavaScript and HTML Canvas
</div>
<!-- partial -->
  <script  src="{{ asset('js/stick_hero.js') }}"></script>

</body>
</html>
