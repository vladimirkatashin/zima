<?
function getCartCount(){
require "config.php";	
   $login=$_SESSION["login"];
                  $sql= "SELECT * FROM cart WHERE login=\"$login\"";
                  $res=mysqli_query($connect,$sql);
                   while ($data=mysqli_fetch_assoc($res))
                  {
                   $col=$data['col'];
                   if ($col=='1') {
                    $been=$been+1;
                   }
                  }
                  return $been;
}

function getCart(){
	              $i=0;
	               require "/lib/config.php";
                 $login=$_SESSION["login"];
                 $sql= "SELECT * FROM cart WHERE login=\"$login\"";
                 $res=mysqli_query($connect,$sql);
                while ($data=mysqli_fetch_assoc($res))
                  {
                   $name[$i]=$data['name'];
                   $price[$i]=$data['price'];
                   $id[$i]=$data['id'];
                   $i=$i+1;
                  }
            return array($name,$price,$id);
       }

function addCart($id)
{
$photo=$id;
require "config.php";
$sql= "SELECT * FROM shop WHERE id=$photo";
$res=mysqli_query($connect,$sql);
while ($data=mysqli_fetch_assoc($res))
                  {
                   $name=$data['name'];
                   $price=$data['price'];
                   $id=$data['id'];
                  }
$login=$_SESSION["login"];
$sql = "INSERT INTO `cart`(`id`,`name`,`login`,`price`,`col`) VALUES ('$id','$name','$login','$price','1')";
$res=mysqli_query($connect,$sql);
}


function buy()
{
$sql = "select * from buy order by number DESC ";
$res=mysqli_query($connect,$sql);
$data=mysqli_fetch_assoc($res);
$number=$data['number']+1;

$sql= "SELECT * FROM cart WHERE login=\"$login\"";
                 $res=mysqli_query($connect,$sql);
                while ($data=mysqli_fetch_assoc($res))
                {
                	$login=$_SESSION["login"];
                	$name=$data['name'];
                	$id=$data['id'];
                	$col=$data['col'];
                	$today = date("m.d.y"); 
                    $sql = "INSERT INTO `buy`(`number`,`login`,`name`,`id`,`col`,`first_name`,`last_name`,`email`,`phone`,`date`) VALUES ('$number','$login','$name','$id','$col','$fname','$lname','$email','$phone','$today')";
                    $re1=mysqli_query($connect,$sql);
                }

$sql= "DELETE FROM cart WHERE `login` = '$login' ";
$res=mysqli_query($connect,$sql);
}

