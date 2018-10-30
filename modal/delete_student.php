<?php
/**
 * Created by Tanvir.
 * User: HP
 * Date: 10/29/2018
 * Time: 1:58 AM
 */

require_once ('../class/config.php');
require_once ('../class/control_drop.php');

$id = $_POST['id'];

        $delete = drop_student_by_id($conn, $id);
        if($delete){
            return true;

        }else{
            return false;
        }

