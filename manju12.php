<?php
if(!empty($_GET['name']))
$name=$_GET['name'];
else
$name="Not Entered";
echo<<<END
<html>
<head>
<title>Form Test</title>
</head>
<body>
<form method="get" action="manju12.php">
Enter your name:
<input type="text" name="name">
<br>
<input type="submit">
<br>
Name is:$name
</form>
</body>
</html>
END;
?>