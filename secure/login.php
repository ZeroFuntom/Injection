<!DOCTYPE html>
<html>
    <head>
        <title>Warehouse Management</title>
        <link rel="stylesheet" href="style/styles.css">
    </head>
    <body>
        <h1>Login</h1>
        <form action="checklogin.php" method="post">
            <div class="container">
                <label><b>Username</b></label><br>
                <input type="text" placeholder="Username" name="username" maxlength="50" required><br>

                <label><b>Password</b></label><br>
                <input type="password" placeholder="Password" name="password" maxlength="128" required><br>

                <button type="submit">Login</button>
            </div>
          </form>
    </body>
</html>
