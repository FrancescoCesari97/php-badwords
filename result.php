


<?php 

// paragrafo inviato dall'utente
$user_badword = $_GET['badword'];

// parola da censurare
$user_text = $_GET['text'];

// lunghezza paragrafo inviato dall'utente
$user_text_length = strlen($user_text);

//paragrafo censurato
$text_censored = str_replace($user_badword, '***', $user_text );

// lunghezza del paragrafo censurato 
$text_censored_length = strlen($text_censored);


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <title>Document</title>
  </head>
  <body>
    <div class="container">
      
        <div class="col-12">
          <p class=" m-0">paragrafo inviato dall'utente</p>
          <h5><?= $user_text ?></h5>
          <br>
          <div>
            <p class=" m-0">lunghezza paragrafo inviato dall'utente</p>
            <h5><?= $user_text_length ?></h5>
          </div>
        </div>
        <br>
        <div class="col-12">
          <p class=" m-0">parola da censurare</p>
         <h1> <?php echo $user_badword ?> </h1>
        </div>
        <br>
        <div>
          <p class=" m-0">paragrafo censurato</p>
        <h5><?= $text_censored ?></h5>
        </div>

        <br>
        <div>
          <p class=" m-0">lunghezza del paragrafo censurato </p>
        <h5><?= $text_censored_length ?></h5>
        </div>

       
      </form>
    </div>
  </body>
</html>
