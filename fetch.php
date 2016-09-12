<?php
include_once 'config.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP | FETCH</title>
    </head>
    <body>
        <table border="1" cellpadding="4">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            <?php
            // put your code here
            $sql = "SELECT * FROM `le_student` ORDER BY std_id  ";
            $query = mysql_query($sql);
            $num = mysql_num_rows($query);
           if($num>0){
            while ($row = mysql_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $row['std_id']; ?></td>
                    <td><?php echo $row['std_name']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td>&nbsp;</td>
                    
                </tr>

                <?php
           }}else{ ?>
                <tr>
                    <td colspan="3">No records found</td>
                </tr>   
            <?php }
            ?>
        </table>



    </body>
</html>
