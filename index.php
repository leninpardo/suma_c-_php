<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<form id="frm" action="index.php">
<div>
    <label>numero 1</label>
    <input type="text" name="num1" id="num1">
    <label>numero 2</label>
<input type="text" name="num2" id="num2">
<input type="submit"  name="" id="" value="sumar" />
</div>
</form>
</body>
</html>

<?php 
 $comando="./suma ".$_REQUEST['num1']." ".$_REQUEST['num2'];
//passthru("./mcd 7 14");
passthru($comando);
?>