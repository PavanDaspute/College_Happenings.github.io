<?php
session_start();

// if(!isset($_SESSION['email'])){
//     echo "you are logged out";
//     header('location:login.html');
// }

$con=mysqli_connect("localhost","root","","college_happenings");
if(isset($_POST['login']))
{
$email=$_POST['Email'];
$password=$_POST['Pwd'];
$query="select * from signin where Email='$email' and Pwd='$password';";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)

{
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{

$_SESSION['id'] = $row['id'];
$_SESSION['name'] = $row['Name'];      
$_SESSION['email'] = $row['Email'];	      

}
header("Location:teacher_index.php");
}

else 
{
echo("<script>alert('Invalid Username or Password. Try Again!');
window.location.href = 'student_index.php';</script>");
}

}


?>