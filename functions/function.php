<?php

// tervitustekst ja muud head asjad
function greeting($input = "ebamäärast"){
    
    echo "Tere $input<br>"; 
    return $input;
}

// 
function home(){
echo '<meta charset = "UTF-8">';
echo '<li><a href="index.php">Tagasi koju</a></li>';
}

// aja kontroll
function aeg(){
date_default_timezone_set("Europe/Tallinn");
$time = date("H:i");
echo $time."<br>";
if ($time > 18){
    echo "Aeg on koju minna";
} else {
    echo "Kell on:".$time." Peab veel kannatama";
}
}

// loendur
function counter(){
    $file_name = "count.txt";
    if (!(file_exists($file_name))) {
        $file = fopen('count.txt',"w+") or die("Ei saanud avada");
        $tekst = 1;
        fwrite($file, $tekst);
        $count = file_get_contents('count.txt');
        echo "Seda lehte oleme juba ".$count." korda näinud<br>";
        fclose($file); 
    } 
    else {
        $file = fopen('count.txt',"r+") or die("Ei saanud avada");
        $count =file_get_contents('count.txt')+1;
        fwrite($file, $count);
        echo "Seda lehte oleme juba ".$count." korda näinud<br>";
        fclose($file);
    }
   
        
    }

// külastaja ip
function getUserIP()
{
   $ip = $_SERVER['REMOTE_ADDR'];
    
    $time = date("H:i:s");
    $visitor = $ip." ".$time."\n";
    $file = fopen('visitor.txt',"a+") or die("Ei saanud avada");
    fwrite($file, $visitor);
        echo "Külastate seda lehte aadressilt ".$ip;
        fclose($file);
}


?>