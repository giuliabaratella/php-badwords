<?php
$paragraph = $_GET["textarea"];
$censuredWord = $_GET["censured-word"];
$paragraphLength = strlen($paragraph);
$paragraphCensored = str_replace($censuredWord, '***', $paragraph);
$censoredParagraphLength = strlen($paragraphCensored);
$paragraphWordsLength = str_word_count($paragraph);
$censoredParagraphWordsLength = str_word_count($paragraphCensored);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <main class="container py-5">
        <h4>Ecco il tuo paragrafo di
            <?php echo $paragraphLength; ?> caratteri.
            Il tuo paragrafo contiene
            <?php echo $paragraphWordsLength; ?> parole.
        </h4>
        <p>
            <?php echo $paragraph; ?>
        </p>
        <h4>Ed ecco il tuo paragrafo censurato</h4>
        <p>
            <?php echo $paragraphCensored; ?>
        </p>
        <p>Il tuo paragrafo adesso contiene
            <?php echo $censoredParagraphLength; ?> caratteri. Adesso contiene
            <?php echo $censoredParagraphWordsLength; ?> parole.
        </p>
    </main>

</body>

</html>