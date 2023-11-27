<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <main class="container py-5">
        <form action="censored.php" method="GET">
            <div class="text-center">
                <div class="mb-3">
                    <textarea name="textarea" id="text" cols="30" rows="10"
                        placeholder="Inserisci un testo qui"></textarea>
                </div>
                <div class="mb-3"><input type="text" name="censured-word" placeholder="Parola da censurare"></div>
                <button class="btn btn-success" type="submit">Invia</button>
            </div>
        </form>
    </main>

</body>

</html>