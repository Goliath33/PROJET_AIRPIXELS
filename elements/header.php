<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Articles à classer" />
    <meta name="author" content="David Sellier" />
    <title>Airpixels</title>
    <link rel="stylesheet" href="./assets/templates.css">
    <link rel="stylesheet" href="./assets/polices.css">
    <script type="text/javascript" src="./scripts/index.js"></script>
    <script type="module" src="./scripts/map.js"></script>
</head>
<body>
    <header>
        <h1>A i r p i x e l s</h1>
    
        <div class="navbar" id="myNavbar">
            <a href="#home" class="active">ACCUEIL</a>
            <a href="#carte">CARTE</a>
            <a href="#listevols">LISTE DE VOLS</a>
            <a href="#contact">CONTACT</a>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>

        <video id="background-video" autoplay loop>
                <source src="./videos/presentation.mp4" type="video/mp4">
        </video>
        
    <div class="content">
        <button id="btnVideo" onclick="playAndPause()">Play ▶</button>
    </div>

    <script>

  var video = document.getElementById('background-video');
  var btn = document.getElementById('btnVideo');

  function playAndPause() {
    if (video.paused) {
      video.play();
      btn.innerHTML = "Pause II";
    } else {
      video.pause();
      btn.innerHTML = "Play ▶";
    }
  }

  // Initial playback state
  if (video.paused) {
    video.play();
  }

  // Detect page updates and pause/play the video accordingly
  window.addEventListener('beforeunload', function() {
    video.pause();
  });

  window.addEventListener('load', function() {
    playAndPause();
  });

  </script>

        </header>
    </body>
    </html>