<?php
$conn=mysqli_connect('localhost','root','','10rpl8');
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}else {
    echo "";
}
?>
