<?php


require('/functions/function.php');

home();

$file_name = 'tekst.txt';

function file_write(){
    $file = fopen('tekst.txt',"a") or die("Ei saanud avada");
    $tekst = "Esimene tekst sisestuseks\n";
    fwrite($file, $tekst);
    $tekst = "Teine tekst sisestuseks\n";
    fwrite($file, $tekst);
    $tekst = "Kolmas tekst sisestuseks\n";
    fwrite($file, $tekst);    
    fclose($file);
    echo "Õnnestus!";
}

function file_read(){
    $file = fopen('tekst.txt',"r") or die("Ei saanud avada");
    echo fread($file, filesize("tekst.txt"));
    fclose($file);
    
} 

function counter(){
    $file_name = "count.txt";
    if (!(file_exists($file_name))) {
        $file = fopen('count.txt',"w+") or die("Ei saanud avada");
        $tekst = 1;
        fwrite($file, $tekst);
        $count = file_get_contents('count.txt');
        echo $count;
        fclose($file); 
    } 
    else {
        $file = fopen('count.txt',"r+") or die("Ei saanud avada");
        $count =file_get_contents('count.txt')+1;
        fwrite($file, $count);
        echo $count;    
        fclose($file);
    }
   
        
    }
    



// file_write();

// file_read();

counter();
?>