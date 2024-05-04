<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
echo "<p>This content was requested using the POST method.</p>";
date_default_timezone_set('Asia/Kuala_Lumpur');
$now = date('d-F-Y h:i:s A');
echo "Requested at: $now by $lname $fname.";
?>