<?php 
define("COOKIE_NAME", MERRITT");
define("COOKIE_VALUE", "123456789");
?>
<HTML>
<HEAD><TITLE>Set Cookie Example</TITLE></HEAD>
<BODY>
<?php
if ($_COOKIE[COOKIE_NAME]){
print "User sent cookie.<BR>\n";
print "Cookie contains the following value:";
print $_COOKIE[COOKIE_NAME]. "<BR>\n";
print "Reload the page and try again.<BR>]n";
setcookie(COOKIE_Name, null, -1'/");
