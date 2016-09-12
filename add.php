<?php
include_once 'config.php';
// Start the session
session_start();
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
        <title>PHP | Add</title>
    </head>
    <body>
        <?php
        if (isset($_POST['submit'])) {
            // put your code here
            $name = $_POST['std_name'];
            $status = $_POST['status'];
            /*Add query*/
            $sql = "INSERT INTO `le_student`(`std_id`, `std_name`, `status`) VALUES ('NULL','$name','$status')";
            $query = mysql_query($sql);
            if ($query) {
                $_SESSION['msg'] = "Successfully data inserted";
                header('location:'.$_SERVER['PHP_SELF']); // successfull section
               // header('location:add.php?mms=11'); // successfull section
                die();
            } else {
                 $_SESSION['msg'] = "Some error occured,please try again!";
                 header('location:'.$_SERVER['PHP_SELF']);
//                header('location:add.php?mms=2');
                die();
            }
        }
        ?>
        <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        } else {
            echo "Form submit";
        }
        ?>
        <form name="add" id="add" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <table>
                <tr>
                    <th>Name</th>
                    <td><input type="text" name="std_name" id="std_name" value="" /></td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>
                        <select name="status" id="status">
                            <option value="Y">Active</option>
                            <option value="N">Inactive</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>&nbsp;</th>
                    <td><input type="submit" name="submit" id="submit" value="Add" /></td>
                </tr>
            </table>
        </form>
    </body>
</html>
