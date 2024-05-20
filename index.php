<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h2>Scrivimi il paragrafo e la parola da censurare</h2>
<!-- Da qui prendiamo e colleghiamo le variabili con il metodo get assegnando il nome e riprendendole poi -->
<form action="badwords.php" method="GET">
  <input type="textarea" name=" paragraf">
  <input type="text" name="badword">
  <button type="submit">Invia</button>
</form>
<section>
    <h3>paragrafo di prova </h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis hic eligendi modi consequuntur, ad debitis sed adipisci quasi eum accusantium culpa aliquam ea perspiciatis earum minima mollitia nesciunt veniam? Qui.</p>
</section>
</body>
</html>
