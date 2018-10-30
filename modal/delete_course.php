<?php
/**
 * Created by Tanvir.
 * User: HP
 * Date: 10/29/2018
 * Time: 1:58 AM
 */

require_once ('../class/config.php');
require_once ('../class/control_drop.php');
	
if(isset($_GET['id'])){

		 $sql = "DELETE FROM course_info WHERE id=".$_GET['id'];

		 $query = mysqli_query($conn, $sql) or mysqli_error();

		 echo 'Deleted successfully.';

	}

