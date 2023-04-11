<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form id="frmContact" action="export-excel-file.php" method="post" target="_blank">
        <p>
            <input type="text" name="name" id="name" placeholder="Name">
        </p>
        <p>
            <input type="email" name="email" id="email" placeholder="Email">
        </p>
        <p>
            <input type="submit" class="btnSend" value="Send">
        </p>
    </form>
</body>
</html>