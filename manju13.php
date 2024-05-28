<?php
if(!empty($_POST['name']))
$name=$_POST['name'];
else
$name="Not Entered";
echo<<<END
<html>
<head>
<title>Form Test</title>
</head>
<body>
<form method="post" action="manju13.php">
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