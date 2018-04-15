<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <title>Login</title>
    <link rel="icon" href="./meta/favicon_64.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="./styles/main.css" media="screen">
    <script src="./js/main.js"></script>
</head>

<body>
    <center>
        <div class="login-box">
            <div class="login-box-title">
                Authentification
            </div>
            <hr>
            <form action="/action_page.php">
                <div class="field-header">
                    Login :
                </div>
                <input class="field login" type="text" name="login" value="">
                <br>
                <div class="field-header">
                    Password :
                </div>
                <!-- Password field -->
                <input class="field password" type="password" value="password" id="passwordInput"><br>
                <!-- An element to toggle between password visibility -->
                <input class="checkbox" type="checkbox" onclick="showPassword()">Show Password
                <br><br>
                <input class="submit-button" type="submit" value="Connect">
            </form>
        </div>
    </center>
</body>

</html>
