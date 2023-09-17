<?php

$conn=mysqli_connect('localhost','root','','easyvote');
if(!$conn)
{
    echo"connection failed::".mysqli_connect_error();
}
else{
    echo"";
}