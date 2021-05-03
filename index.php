<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- Creare una variabile con un paragrafo di
    testo.
    Visualizzare a schermo il paragrafo con la
    relativa lunghezza e sostituire la
    badword passata in GET con tre *. -->

    <!-- COPY THIS IN URL http://localhost/?badword=ciao -->
    <div style="width: 60%; margin:auto;">
      <h1>Frase Originale :
        <?php
        $badword = $_GET['badword'];
        echo $phrase = "Lorem ipsum dolor sit amet,ciao consectetur adipisicing elit, sed do eiusmod tempor ciao incididunt ut labore et dolore ciao magna aliqua. Ut enim ad minim veniam,ciao quis nostrud exercitation ullamco ciao laboris nisi ut aliquip ex ea commodo consequat.";
        ?>
      </h1>
      <h1>
        Lunghezza Frase :
        <?php
        echo strlen($phrase);
        ?>
      </h1>
      <h1>
        Frase Modificata :
        <?php
        $goodPhrase = str_replace($badword, "***",$phrase);
        echo $goodPhrase;
        ?>
      </h1>
    </div>
  </body>

  </html>
