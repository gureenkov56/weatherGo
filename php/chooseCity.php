<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style/style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet" />
    <title>Choosing city</title>
</head>

<body>
    <div id="centercontent">
        <div id="weathercontent">
            <div id="headOfChoose">
                Choose your city
                <hr id="line" />
                <form method="GET" action="../index.php">
                    <input type="text" name="city" /> <br />
                    <input type="submit" value="Send" />
                </form>
            </div>
        </div>
    </div>
    <script src="..\js\choosingLoc.js"></script>
</body>

</html>