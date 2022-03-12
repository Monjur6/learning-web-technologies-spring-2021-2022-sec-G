<?php 
    require('header.php');
?>
<html>
<head>
    <title>Signup</title>
</head>
<body>
    <form method="POST" action = "../controllers/regCheck.php">
        <a href="home.php">Back</a>
        <a href="../controllers/logout.php">logout</a>
        <fieldset>
            <legend>Create New User</legend>
            <table>
                <tr>
                    <td>Username</td>
                    <td>
                        <input type="text" name="username" value="">
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>
                        <input type="password" name="password" value="">
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <input type="email" name="email" value="">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="submit">
                    </td>
                </tr>
            </table>
            </fieldset>
        </form>
</body>
</html>