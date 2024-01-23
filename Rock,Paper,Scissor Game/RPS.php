<html>
<body bgcolor="black">
<center>
<br/><br/></br>
<h1><font color="orange">ROCK,PAPER,SCISSOR GAME RESULT</font></h1>
<br/><br/></br>
<br/><br/></br>
<?php
$a=$_POST["z"];
$b=$_POST["y"];
$a=strtolower($a);
$b=strtolower($b);
if((($a=="rock" or $a=="scissor" or $a=="paper")and($b=="scissor" or $b=="rock" or $b=="paper"))){
if($a=="rock" and $b=="scissor"){
	$w=strtoupper($a);
 	$q=strtoupper($b);
    echo "<h1> <font color='green'>👍 WON THE PLAYER(1) CHOICE ➤ (⚫) $w</font></h1>";
    echo "<h1> <font color='red'>👎 LOSS THE PLAYER(2) CHOICE ➤ (✂) $q</font></h1>";


}
else if($a=="scissor" and $b=="paper"){
	$w=strtoupper($a);
	$q=strtoupper($b);
echo "<h1> <font color='green'>👍 WON THE PLAYER(1) CHOICE ➤ (✂) $w</font></h1>";
    echo "<h1> <font color='red'>👎 LOSS THE PLAYER(2) CHOICE ➤ (☱) $q</font></h1>";

}
else if($a=="paper" and $b=="rock"){
	$w=strtoupper($a);
	$q=strtoupper($b);

echo "<h1> <font color='green'>👍 WON THE PLAYER(1) CHOICE ➤ (☱) $w</font></h1>";
    echo "<h1> <font color='red'>👎 LOSS THE PLAYER(2) CHOICE ➤ (⚫) $q</font></h1>";

}
elseif($a=="scissor" and $b=="rock"){
	$w=strtoupper($b);
	$q=strtoupper($a);

echo "<h1> <font color='green'>👍 WON THE PLAYER(2) CHOICE ➤ (⚫) $w</font></h1>";
    echo "<h1> <font color='red'>👎 LOSS THE PLAYER(1) CHOICE ➤ (✂) $q</font></h1>";

}
else if($a=="paper" and $b=="scissor"){
	$w=strtoupper($b);
	$q=strtoupper($a);

echo "<h1> <font color='green'>👍 WON THE PLAYER(2) CHOICE ➤ (✂) $w</font></h1>";
    echo "<h1> <font color='red'>👎 LOSS THE PLAYER(1) CHOICE ➤ (☱) $q</font></h1>";

}
else if($a=="rock" and $b=="paper"){
	$w=strtoupper($b);
	$q=strtoupper($a);

echo "<h1> <font color='green'>👍 WON THE PLAYER(2) CHOICE ➤ (☱) $w</font></h1>";
    echo "<h1> <font color='red'>👎 LOSS THE PLAYER(1) CHOICE ➤ (⚫) $q</font></h1>";

}
else if((strlen($a)==strlen($b) and strlen($a)>=1 and strlen($b)>=1)){
echo "<h1> <font color='red'>(DRAW)</font><font color='green'>👍 WON THE PLAYER(1) && PLAYER(2) 👍</font></h1>";
}
}


else if($a=="rock" or $a=="scissor" or $a=="paper"){
 echo "<h1> <font color='red'>WRONG CHOICE BY PLAYER(2)</font></h1>";
}
else if($b=="rock" or $b=="scissor" or $b=="paper"){
 echo "<h1> <font color='red'>WRONG CHOICE BY PLAYER(1)</font></h1>";
}
else{
echo "<h1> <font color='red'>WRONG CHOICE BY BOTH</font></h1>";
}
?>
	</center>
<br/>
<img src="https://static.vecteezy.com/system/resources/previews/000/691/497/original/rock-paper-scissors-neon-icons-vector.jpg" style="height:300px; width:600px"/>
</body>
</html>
