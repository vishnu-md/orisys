<html>
    <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>orisys-HOMEval</title>
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
  $email =$_POST['email'];
  $password= $_POST['password'];
 $sql="select * from register where email='$email' && password='$password'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num==1){
       if( mysqli_num_rows($result )>0){
      while($row=mysqli_fetch_assoc($result)){
         $_SESSION['username']=$row['name'];
         $_SESSION['useremail']=$row['email'];
         $_SESSION['userpassword']=$row['password'];
                  header('location:login.php');
    }}}
    	else{
    		?>
          <script>
             alert("Enter correct Email id and password/ Register your account");
             </script>
             <?php
      }
   ?>