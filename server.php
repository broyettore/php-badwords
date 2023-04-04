<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/style.css">
    <title>Php Intro</title>
</head>
<body>

    <h1>Il messagio che ci hai mandato è : <?php echo $_POST["msg"]; ?>, è lungo <?php echo strlen($_POST["msg"]); ?> lettere.</h1>
    <p>Questo è lo stesso messagio con la parola censurata : <?php echo str_replace($_POST["badword"], "***", $_POST["msg"]); ?>, è lungo  <?php echo strlen($_POST["msg"]); ?> lettere.</p>

</body>
</html>