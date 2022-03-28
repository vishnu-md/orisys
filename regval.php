<html>
    <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>orisys-REGval</title>
        <style>
            body{
                background-image: url('images/bg1.jpg');
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  color:orange;
  margin:0;
            }
        </style>
    </head>
    <body>
        <h2>Go back to</h2>
        
<a href="home.html"><button>Home</button></a>
    </body>
    </html>
<?php
session_start();

$conn=mysqli_connect('localhost','root','','orisys');
if(isset($_POST['register'])){
$name = $_POST['name'];
    $email =$_POST['email'];
    $password= $_POST['password'];
    $cpassword = $_POST['Cpassword'];
    $sql="SELECT * from register where email='$email'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num==1){
    ?>

    <html>
    <script> alert('UserEmail already exist'); 
</script>
<?php
    }
    
    	else{
    		$reg="INSERT INTO register(name,email,password) 
 VALUES('$name','$email','$password')";
 mysqli_query($conn,$reg);
  echo ( "Registration successful");
  header('location:home.html');
      }
    }
      
    ?>