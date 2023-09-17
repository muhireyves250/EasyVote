<?php 
include_once('include/loginheader.php');
include('connection.php');
?>
                    <form action="">
                    <input type="email" name="email" placeholder="Enter Email Here">
                    <input type="password" name="" placeholder="Enter Password Here">
                    <button class="btnn" name='login'><a href="voterdashbord.php">Login</a></button>
                    </form>



                    <?php 
include_once('include/loginfooter.php');
?>
<?php
if(isset($_POST['login']))
{
    $checkindb="SELECT EMAIL FROM voter";
    
   $result= mysqli_query($conn,$checkindb);
if(mysqli_num_rows($result)>0)
{
    header("location:voterdashbord.php");

}
else{
    echo"Your email already used,try again";

}
}
?>