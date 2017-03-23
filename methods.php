<?php

var_dump($_GET);
echo "<br>";
var_dump($_POST);
echo "<br>";

echo $_GET['nimi']."<br>";
echo $_POST['nimi']."<br>";

?>

<!doctype html>

    <html>
        <head>
        </head>
        
        <body>
            <h2>GET meetod</h2>
        <form action="" method="get">
            <ul>
            <li>
            <label for="nimi">Nimi</label>
                <input type="text" name="nimi">
            </li>
            <li>
            <label for="perenimi">Perenimi</label>
                <input type="text" name="perenimi">
            </li>
            <li>
            <input type="submit" name="Sisesta"
            </li>
            </ul>
        </body>
    
            <html>
        <head>
        </head>
        
        <body>
            <h2>POST meetod</h2>
        <form action="" method="post">
            <ul>
            <li>
            <label for="nimi">Nimi</label>
                <input type="text" name="nimi">
            </li>
            <li>
            <label for="perenimi">Perenimi</label>
                <input type="text" name="perenimi">
            </li>
            <li>
            <input type="submit" name="Sisesta"
            </li>
            </ul>
        </body>
    
    </html>
                <?php echo $_POST['nimi']."<br>"
    
    <?php if (isset ($_POST['nimi'])){
        echo $_POST['nimi']."<br>";
    }
    
    else {
        echo "Midagi ei ole veel sisestatud <br>";
    }
    
    ?>
    

    </html>