<!DOCTYPE HTML>
<html>
<style type="text/css">
    .login {
        height: 180px;
        width: 230px;
        margin: 0;
        padding: 10px;
        border: 1px #CCC solid;
    }

    .login input {
        padding: 5px;
        margin: 5px
    }
</style>
<body>
<form method="get">
    <div class="login">
        <h2>Login</h2>
        <input type="text" name="username" size="30" placeholder="username"/>
        <input type="password" name="password" size="30" placeholder="password"/>
        <input type="submit" value="Sign in"/>
    </div>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $userName = $_GET["username"];
    $password = $_GET["password"];
    if ($userName == "admin" && $password == "admin") {
        echo "<h2>Welcome <span style='color:red'>" . $userName . "</span> to website</h2>";
    } else {
        echo "<h2><span style='color:red'>Login Error</span></h2>";
    }
} else {
    echo "ok";
}
