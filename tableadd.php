<?php

$DB_HOST='localhost' ;
$DB_USER ='root';
$DB_PASSWORD='';
$DB_NAME='food';
$conn=mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
 $keywords=$_POST['keywords'];
 $ins="select * from nutrition where Descrip = '$keywords'"; 
 $resu=mysqli_query($conn,$ins);
   if($resu)

  {
   $temp=array();
    while($row=mysqli_fetch_array($resu))

    {
//Descrip
      $temp[]=$row;

    }

    echo(json_encode($temp));

  }
  mysqli_close($conn); 

?>