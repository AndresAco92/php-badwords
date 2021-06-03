<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php test</title>
</head>
<body>
  <?php
    $testo= "Il romanzo storico è un particolare tipo di romanzo in cui l’ambientazione storica ha un valore documentaristico perché intende trasmettere lo spirito, i comportamenti e le condizioni sociali attraverso dettagli realistici e con un'aderenza, fittizia o meno, ai fatti documentati. Può contenere personaggi realmente esistiti oppure una mescolanza di personaggi storici e di invenzione. Nacque durante il Romanticismo perché forte era l’attrazione verso il passato, in particolare della propria nazione, interpretato come radice del presente; inoltre permetteva di evadere con la fantasia.";

    $word= $_GET['word'];
  ?>

  
  <p>
  
    <?php echo $testo ?>
    
  </p>


  <h4>
    la stringa é lunga:  
    <?php
      echo strlen($testo);
    ?>
  </h4>

  <p>
    testo modificato;
    <?php
     $testo_mod= "echo str_replace($word,'***', $testo)";
    ?>
  </p>

  <h4>
    la stringa MODIFICATA é lunga:  
    <?php
      echo strlen($testo_mod);
    ?>
  </h4>

  <!-- <?php
     var_dump(explode('*', $testo_mod));
  ?> -->
  
  
</body>
</html>