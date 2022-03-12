<?php 
    require('header.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User list</title>
</head>
<body>
<fieldset><legend>USER LIST</legend>
    <a href="home.php">Back</a>
    <a href="../controllers/logout.php">logout</a>
    <br><br>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>PASSWORD</th>
            <th>EMAIL</th>
            <th>Actions</th>
        </tr>
        <tr>
            <td>1</td>
            <td>morshed</td>
            <td>123</td>
            <td>morshed@gmail.com</td>
            <td>
                <a href="edit.php?id=1">EDIT</a>
                <a href="delete.php">DELETE</a>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>monjur</td>
            <td>123</td>
            <td>monjur@gmail.com</td>
            <td>
                <a href="edit.php?id=2">EDIT</a>
                <a href="delete.php">DELETE</a>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>Mir</td>
            <td>123</td>
            <td>mir@gmail.com</td>
            <td>
                <a href="edit.php?id=3">EDIT</a>
                <a href="delete.php">DELETE</a>
            </td>
        </tr>
    </table>
    </fieldset>
</body>
</html>