<?php
 include "dbase.php";
 $ds =$_POST["vals"];
 $vall =explode(":",$ds);
 if ($vall[0]=="edit"){

    $str1 ="SELECT * from tbl6_9  where subno= $vall[1]" ;
    $rs1 =$bdd->query($str1) or die("error on $str1");
    $row1=$rs1->fetch();
    $strdes ="<script type='text/javascript'> ";
    $strdes .="$('#eduname').val('$row1[2]') ;";
    $strdes .="$('#address').val('$row1[3]') ;";
    $strdes .="$('#all').val('$row1[4]') ;";
   //  $strdes .="$('#g5').val('$row1[5]') ;";
   //  $strdes .="$('#other').val('$row1[6]') ;";
    $strdes .="$('#totchild').val('$row1[5]') ;";
    $strdes .="$('#totteach').val('$row1[6]') ;";
    $strdes .="$('#inno').val('$row1[7]') ;";
    $strdes .="$('#subno').val('$row1[0]') ;";
    $strdes .="</script> ";

    echo $strdes;

 }
 if ($vall[0]=="del"){
   $str1="DELETE FROM tbl6_9 WHERE gadivision='$un' AND subno=$vall[1]";
   $rs1 =$bdd->query($str1) or die("error on $str1");
   $str3="<script>window.location.reload()</script>";
echo $str3;

 }
?>
