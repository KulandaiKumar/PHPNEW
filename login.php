<?php
$objLog= new Login();

if($_REQUEST['submit']!='')
{
  $retString=$objLog->checkLogin($_REQUEST);
}
?>

<html>
<body>
<h3 align="center" ><?=$retString?></h3>
  <form name="loginform" method="POST" action="/home/login">
	<label for="un">Username: </label>&nbsp;<input type="input" value=""></input>
	<label for="pw">Password: </label>&nbsp;<input type="password" value=""></input>
  </form>
</body>
</html>
