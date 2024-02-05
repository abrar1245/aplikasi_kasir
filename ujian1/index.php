<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">    
</head>
<body>
    <div class="box">
        <form method="post" action="cek_login.php">
            <h2>LOGIN</h2>
            <div class="inputBox">
                <input type="text" name="username" required="required">
                <span>Username</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="password" required="required">
                <span>Password</span>
                <i></i>
            </div>
            <input type="submit" value="LOGIN">
        </form>
    </div>
</body>
</html>
