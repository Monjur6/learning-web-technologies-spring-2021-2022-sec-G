<html>
<head>
	<title>Name</title>
</head>
<body>
	<form method="POST" action="handler.php">
        <fieldset><legend>Name</legend>
            <table>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" value="" placeholder="name"></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Submit"></td>
                </tr>
            </table>	
</fieldset>
</form>
<form method="GET" action="task1.php">
        <fieldset><legend>Name</legend>
            <table>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" value="" placeholder="name"></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Submit"></td>
                </tr>
            </table>	
</fieldset>
</form>

</body>
</html>
<?php
$uerror = "";
if(isset($_GET['submit']))
{
    if($_GET['name'] == null)
    {
        $uerror = "invalid name..";
    }
    else
    echo "done";
}
?>