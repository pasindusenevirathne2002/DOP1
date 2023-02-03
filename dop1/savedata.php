<?php
 include "dbase.php";
$ds =$_POST["vals"];

$str2="DELETE FROM tbl6_9 WHERE gadivision='$un' AND subno =$ds[6] ";
$rs2 =$bdd->query($str2) or die("error on $str2");

if(!empty($ds[0]) && !empty($ds[1]) && !empty($ds[2]) && !empty($ds[3]) && !empty($ds[4]) && !empty($ds[5])){
        $str1 ="INSERT into tbl6_9 (gadivision,eduname,caddress,subject,totchild,totteach,inno)
         values('$un','$ds[0]','$ds[1]',$ds[2],$ds[3],$ds[4],'$ds[5]')" ;
        $rs1 =$bdd->query($str1) or die("error on $str1");
            if ($rs1){
                echo "success";
            } else {
                echo "not added";
            }
$str3="<script>window.location.reload()</script>";
echo $str3;
} else {
    echo "all fields required";
}


?>