<head>
	<meta charset="UTF-8">
</head>
<h2>Calculator</h2>
<body>
<?
function add($arg1,$arg2)
{  
	return $arg1+$arg2;
}
function sub($arg1,$arg2)
{
   return $arg1-$arg2;
}

function div($arg1,$arg2)
{
	return $arg1/$arg2;
}
function mul($arg1,$arg2)
{
	return $arg1*$arg2;
}


function mathOperation($arg1,$arg2,$operation)
{
switch ($operation) {
 	case "+": $result=add($arg1,$arg2); 
 	break;
 	case "-": $result=sub($arg1,$arg2); 
 	break;
    case "*": $result=mul($arg1,$arg2); 
    break;
    case "/": $result=div($arg1,$arg2); 
    break;
     }
    return $result;
}

function power($arg1,$arg2)
{
	if ($arg2 != 0)
	{
		return $arg1 * power ($arg1, $arg2 - 1);
	}
		return 1;
}

switch ($_GET['opr']) {
	case "pow":
		 echo power($_GET['nb1'],$_GET['nb2']);
		break;
  default;
   echo mathOperation($_GET['nb1'],$_GET['nb2'],$_GET['opr']);
   break;
}

?>
<br>
<h2>Add or Subtract or Multiplication</h2>
<hr>
<?
$a=(int)$_GET['nb1'];
$b=(int)$_GET['nb2'];

if ($a>= 0 && $b>=0) echo $a-$b; 
elseif ($a< 0 && $b<0) echo $a*$b; else
 echo $a+$b;
?>
<br>
<h2>randrom 1-15</h2><hr>
<?
$a=0;
$b=15;

$a=rand(0,$b);
switch ($a) {
	case '0':
		echo " 0";
	case '1':
		echo " 1";
	case '2':
		echo " 2";
	case '3':
		echo " 3";
	case '4':
		echo " 4";
	case '5':
		echo " 5";
	case '6':
		echo " 6";
	case '7':
		echo " 7";
	case '8':
		echo " 8";
	case '9':
		echo " 9";
	case '10':
		echo " 10";
	case '11':
		echo " 11";
	case '12':
		echo " 12";
	case '13':
		echo " 13";
	case '14':
		echo " 14";
	case '15':
		echo " 15";

}
?>
<br>
<h2>Times</h2><hr>
<?
$a=0;
$b=0;
$a=date("G");                
echo $a;
if (($a%10)==1 && $a!=11) echo " час ";
elseif (($a%10)>=2 && ($a%10)<=4 && (($a>12 && $a>14) || ($a>=2 && $a<=4))) echo " часа "; else echo " часов ";
$b=date("i");
echo $b;
if (($b%10)==1 && $b!=11) echo " минута";
  else if (($b%10)>=2 && ($b%10)<=4 && (($b>12 && $b>14) || ($b>=2 && $b<=4))) echo " минуты"; else echo " минут";
?>
<br>
<h2>Times Test</h2><hr>
<?
for ($a=1; $a<=24; $a++)
{  
echo $a;	
if (($a%10)==1 && $a!=11) echo " час ";
elseif (($a%10)>=2 && ($a%10)<=4 && (($a>12 && $a>14) || ($a>=2 && $a<=4))) echo " часа "; else echo " часов ";
}
for ($b=1; $b<=59; $b++)
{  
echo $b;
if (($b%10)==1 && $b!=11) echo " минута ";
  else if (($b%10)>=2 && ($b%10)<=4 && (($b>12 && $b>14) || ($b>=2 && $b<=4))) echo " минуты "; else echo " минут ";
 }
?>
</body>

