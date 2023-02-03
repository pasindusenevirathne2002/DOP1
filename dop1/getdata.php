<?php
include "dbase.php";
    $str1="SELECT * from tbl6_9";
    $rs1=$bdd->query($str1) or die ("Error");

    while ($row1=$rs1->fetch()){
        $edit = "edit:$row1[0]";
        $del = "del:$row1[0]";

        echo "
        <tr>
            <td><center>$row1[0]</center></td>
            <td><center>$row1[1]</center></td>
            <td><center>$row1[2]</center></td>
            <td><center>$row1[3]</center></td>
            <td><center>$row1[4]</center></td>
            <td><center>$row1[5]</center></td>
            <td><center>$row1[6]</center></td>
            <td><center>$row1[7]</center></td>
        
            
            <td>
            <button class ='btn btn-warning btn-sm' id='$edit' onclick='editdel(this.id)'>EDIT</button>
                <button class ='btn btn-danger btn-sm' id='$del' onclick='editdel(this.id)'>DELETE</button>
                                
            </td>
            
        </tr>   
";

 } ?>
   