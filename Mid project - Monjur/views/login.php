
<html>
    <head>
        <title>login</title>
    </head>
    <body>
        <form method="POST" action = "../controllers/loginCheck.php">
        <fieldset><legend>Sign in</legend>
            <table>
                <tr>
                    <td>Username</td>
                    <td>
                        <input type="text" name="username" value="";>
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>
                        <input type="password" name="password" value="";>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="login">

                        <a href="reg.php">Create an Account</a>
                    </td>
                </tr>
            </table>
            </fieldset>
        </form>
    </body>
</html>
