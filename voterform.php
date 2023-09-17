<?php 
include('include/voterheader.php');
//include('votersuccess.php');

?>
    <form action="votersuccess.php" method='POST'>
    <input type="text" name="fname" placeholder="Enter firstname">
    <input type="text" name="lname" placeholder="Enter lastname">
    <input type="text" name="id" placeholder="Enter ID number">
    <input type="email" name="email" placeholder="Enter Email Here">
    <input type="password" name="password" placeholder="Create Password ">
    <input type="password" name="password_confirm" placeholder=" Comfrim Password ">
    <button class="btnn2" name="send"><a href="#">signup</a></button>
    </form>

    <?php 
include('include/voterfooter.php');
?>