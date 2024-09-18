<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Piramide</title>
<style>
 
</style>
</head>
<body>
 
<svg width="200" height="200" id="piramide">
</svg>
 
<script>
  function genereerPiramide() {
    var blokGrootte = 20;
    var aantalRijen = 10;
    var svgInhoud = '';
 
    for (var rij = 0; rij < aantalRijen; rij++) {
   
      for (var kolom = 0; kolom <= rij; kolom++) {
        svgInhoud += `<rect width="${blokGrootte}" height="${blokGrootte}" x="${20 + blokGrootte * kolom}" y="${20 + blokGrootte * rij}" fill="black"/>`;
      }
    }
 
    document.getElementById("piramide").innerHTML = svgInhoud;
  }
  window.onload = genereerPiramide;
</script>
 
</body>
</html>