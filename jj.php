<html>
<body bgcolor="black">
<center>
<?php
$a=$_POST["mynum"];
$w=explode(".", $a);
$c=0;
$d=0;
foreach($w as $i){
    $e=$i;
    if(ctype_digit($e)){
        $s=(int)$e;
        if($s>=0&&$s<=255){
            $c++;
        }
    }
}
foreach(str_split($a)as$i){
    if ($i== ".") {
        $d++;
    }
}
if($c==4 && $d==3){
    echo "<h1> <font color='green'>It Is A Valid IP Address</font> </h1>";
 echo" <img src='https://th.bing.com/th/id/OIP.P_kHGqnuxOG8L5aBi6-PDAHaHZ?w=161&h=180&c=7&r=0&o=5&dpr=1.4&pid=1.7'>";
}
else {
    echo "<h1> <font color='red'>It Is A Not Valid IP Address</font> </h1>";
echo "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDZUY8NUEQBUTK3JPGctEsQ4ynJQT-Jkdtn_f_uG6rQVau41yUtW18QU0qjggqUj4bEvE&usqp=CAU'>";
}
?>
</center>
</body>
</html>
