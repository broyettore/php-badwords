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

<fieldset>
    <form action="server.php" method="POST">
        <div class="msg-ctn">
            <label for="msg">Subject :</label>
            <textarea name="msg" id="msg" cols="30" rows="10"></textarea>
        </div>
        <div class="word-ctn">
            <label for="badword">Word/s to  censor :</label>
            <input type="text" name="badword" id="badword">
        </div>
        <button type="submit" class="send">Send</button>
    </form>
</fieldset>
</body>
</html>