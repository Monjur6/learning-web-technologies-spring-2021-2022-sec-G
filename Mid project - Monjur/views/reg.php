<html>
<head>
    <title>Signup</title>
</head>
<body>
    <form method="POST" action = "../controllers/regCheck.php">
    <fieldset><legend>REGISTRATION FORM</legend>
    <a href="login.php">Back</a>
            <table>
                <tr>
                    <td>ID:</td>
                    <td>
                        <input type="number" name="id" value="01" placeholder="User ID">
                    </td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>
                        <input type="text" name="username" value="" placeholder="Username">
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>
                        <input type="password" name="password" value="" placeholder="enter password here">
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <input type="email" name="email" value="" placeholder="email">
                    </td>
                </tr>
                <tr>
                    <td>Date of Birth:</td>
                    <td><input type="date" name="dob" value="" placeholder="Date of Birth"></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td><input type="radio" name="gender" value="">Male
                        <input type="radio" name="gender" value="">Female
                        <input type="radio" name="gender" value="">Other</td>
                </tr>
                <tr>
                    <td>Degree:</td>
                    <td><input type="checkbox" name="degree" value="">SSC
                        <input type="checkbox" name="degree" value="">HSC
                        <input type="checkbox" name="degree" value="">Bsc
                        <input type="checkbox" name="degree" value="">Msc
                    </td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><textarea name="address">
			
                    </textarea></td>
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