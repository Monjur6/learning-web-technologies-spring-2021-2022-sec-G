<?php 
    require('header.php');
?>
<html>
<head>
    <title>Signup</title>
</head>
<body style="background-color:#96ed53">
    <center><form method="POST" action = "../controllers/regCheck.php">
        
        
        <fieldset>
            <legend align="center"><b><h1>Create new user</h1></b></legend>
            <h5 align='right'><a href="../controllers/logout.php">logout</a></h5>
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
                        <a href="home.php">Back</a>
                    </td>
                </tr>
            </table>
            </fieldset>
        </form></center>
</body>
</html>