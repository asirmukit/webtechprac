<?php
include '../control/regcontrol.php';
?>
<html>
<head>Reg form
<title>Reg</title>
</head>
<body>
<form method="post">
    <fieldset>
    <legend> General Information </legend>
    <table>
        <tr><td><label for="name"> Name: </label></td>
        <td><input type="text" id="name" name="name"></tr></td>
        <tr><td><label for="email"> Email: </label></td>
        <td><input type="text" id="email" name="email"></tr></td>




</fieldset>
</table>
</form>
<input type="submit" name="submit" value="Proceed">
<input type="reset" value="Clear form">
</body>
</html>