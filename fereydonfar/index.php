<?php

require_once 'function.php';


$a = 10;
$b = 5;
$c = 2;

$x;
$y;

$y = $a/$c-$b;
echo $y;
br();
hr();


echo 666;
echo 'ali';
br();


echo $a;
echo '<br>';


$x = $a + $c;
echo $x;


br();
hr();


if ($x <10)
echo 'low';
elseif ($x == 10)
echo 'tasavi';
else
echo 'high';


br();
hr();


echo add_1 (8, 4, 2, 3) + add_2 (5, 3);


br();
hr();
 

function add_1 ( $q, $w, $e, $r )
{
    return $q / $e + $w * $r;
}

function add_2 ($s, $d)
{
    return $s % $d;
}



echo '----------------------';


$text ='ali and reza is

students or techers';
echo strlen($text);
br();

echo str_word_count($text);
br();


echo strrev ($text);
br();

echo strpos($text, 'or');
br();

echo str_replace('is' ,'are' , $text);



echo'---------------------------------';



// $hour = date('h');

// if ($hour <= 9) :

//     echo 'good morning';

// elseif ($hour < 17) :

//     echo 'good afternoon';

// else :

//     echo 'َgood night';

// endif;

// echo $hour;

 

$ali = 'phd';
switch ($ali):

    case 'student':
        echo '7-18';
        break;

    case 'univercity' :
        echo '19-25';
        break;

    default:
        echo 'phd';
        break;

endswitch;

$x ++;
echo ++$x;

$r=5;
$p='5';
var_dump($r==$p);
var_dump($r===$p);



echo '<table>';
for ($i=1 ;$i<=10 ; $i++)
{ echo'<tr>';

for ($j=0 ; $j<=10 ; $j++)
{
    echo'<td>';
    echo '<hr>';
    $z=$i*$j;
echo ($z);


}
}

// echo'</table>';

// echo '<table border="1">';
// $group = array('A' => 120, 'B' => 125, 'C' => 83, 'D' => 154, 'E' => 123);
// foreach($group as $key => $value) {
//     echo '<th>' . $key . '</th>' . '<td>' . $value . '</td><tr></tr>';
// }
// echo '</table>';


// for($i=0;$i<=10;$i++){
// 	echo '<br/>';
// 	for($j=0;$j<=10;$j++){
// 		echo $i * $j,'    ';
// 	}
// }
echo'<hr>';
echo'<hr>';
echo'<hr>';


echo ("<table width=1000><tr>");
for ($i=1; $i <= 10; $i++) { 
	echo ("<td>");
	for ($a=1; $a <= 10; $a++) { 
		echo ("$i X $a = ");
		echo $a * $i."<br>";
	}
	echo ("</td>");
}



echo ("</tr></table>");
echo'<hr>';
echo'<hr>';
echo'<hr>';
$array = array( 1, 2, 3, 4, 5);
         
foreach( $array as $value ) {
   echo "Value is $value <br />";
}

// $i = true;
// $loop = 1;

// while(true) {
// if($i === false) {
// break;
// } else {
// echo 'Loop: ' . $loop . '<br>';
// }

// if($loop > 4) {
// $i = false;
// } else {
// $loop++;
// }
// }


$array=array("ali"=>17,"mani"=>19,"mahdi"=>18,"saeid"=>20);
$ali=["red","blue","green","black"];
$mani=["tehran","mashhad","shiraz","ahvaz"];
$mahdi=["php","html","css","sql","jason","java"];

var_dump($array);



?>