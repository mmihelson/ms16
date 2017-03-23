

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minu esimene leht!</title>
</head>

<body>
<?php

require_once('mysql.php');
require ('/functions/function.php');
require('menu.php');
    
greeting("hommikust");
aeg();
    
       
menu($menu_begin,$menu_arr,$menu_end);    

/*
connect($conn);
my_query($conn);
my_close($conn);
*/

    
counter();  
GetUserIp();
    

?> 
</body>
</html>

