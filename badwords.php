<?php
// Il file che gestisce i dati del form 
// Dichiarazioni nomi variabili collegate al form  prese tramite get
$paragraf = $_GET["paragraf"];
$badword = $_GET["badword"];
// Dichiarazioni nomi di funzione da andare a richiamare con echo 
// prima funzione passiamo parola da censurare cosa vogliamo che diventa es **** e il paragrafo
$paragrafCensurato = str_ireplace($badword, "******", $paragraf);
// Seconda funzione dove passiamo  il paragrafo e ci restituiRA la lunghezza in carartteri 
$paragrafLunghezza=  strlen($paragraf)
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <!-- con echo richiamiamo variabili e funzioni -->
    <h1>Ecco il tuo paragrafo</h1>
  <p> <?php echo $paragraf; ?></p>
  <p>Questo paragrafo è lungo <?php echo $paragrafLunghezza; ?> caratteri</p>
  <h2>Ecco il tuo paragrafo con censura</h2>
  <p> <?php echo $paragrafCensurato; ?></p>
  <p>Questo paragrafo è lungo <?php echo $paragrafLunghezza; ?> caratteri</p>

  
</body>
</html>



<!-- NB: SIA DENTRO IL CODICE CHE FUORI QUINDI SIA PER DICHIARARE CHE CHIAMARE VARIABILI O FUNZIONI BISOGNA APRIRE PARENTESIB TAG DEL PHP -->