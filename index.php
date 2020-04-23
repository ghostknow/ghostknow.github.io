<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon</title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://unpkg.com/popper.js@1.12.3"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .w3-btn {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <p id="demo"></p>

    <script>
       // if (window.location.hostname + window.location.pathname == 'hk-er.com/r/') { location.replace("http://urbtix.hk") }
        <?php
if (isset($_GET['email'])) {
    echo $_GET['email'];
    document.getElementById("demo").innerHTML =
    "The page url is 222: " + $_GET['email'];
}?>
      
    </script>

    </iframe>
</body>

</html>