<!-- 
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
 -->

<?php
//creare variabile con paragrafo
$paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut odit omnis dolorem aliquam ad corporis consequatur hic repudiandae.
Quasi voluptatem natus illo praesentium quae, enim qui at facere. Voluptate, reiciendis?';

//lunghezza del paragrafo
$length = strlen($paragraph);

//stampa a schermo



//parola passata con GET
$word = $_GET["word"];

$new_paragraph = str_replace($word, "***", $paragraph);

$new_length = strlen($new_paragraph);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bad words</title>
</head>

<body>
    <div class="container" style="max-width: 1200px; margin: 0 auto;">
        <p style="color:blue ;"><?php echo $paragraph; ?></p>
        <p>Lunghezza: <?php echo $length; ?></p>
        <p style="color:red ;"><?php echo $new_paragraph; ?></p>
        <p>Lunghezza: <?php echo $new_length; ?></p>
    </div>
</body>

</html>