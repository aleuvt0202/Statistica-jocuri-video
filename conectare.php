<?php
$id_con = @mysqli_connect("localhost","root","","pidb");
if (!$id_con)
{
    die("conexiune imposibila ".mysqli_connect_error());
}
?> 