<html>
<body>
    <?php
    	$fname=$_POST["name1"];
    	$lname=$_POST["name2"];
   	$uname=$_POST["name3"];
 	$pass1=$_POST["password1"];
 	$pass2=$_POST["password2"];
    
	if( (empty($fname)) && (empty($lname)) && (empty($uname))){
		echo "Please fill the name field";
		die();
	}
	else  if( (empty($pass1)) && (empty($pass2))){
		echo "Please fill tha password field";
		die();
    	}
	else{
	$host="localhost";
	$dbusername="root";
	$dbpassword="";
	$dbname=	"database1";
	
	$conn =new mysqli($host,$dbusername,$dbpassword,$dbname);
	if(mysqli_connect_error()){
		die('Connet Error('.mysqli_connect_error().')'.mysqli_connect_Error());
	}else{
		$sql="insert into detail(fname,lname,uname,pass1)values('$fname','$lname','$uname','$pass1')";
		if($conn->query($sql)){
			echo "Welcome <br>".$fname." ".$lname;
		}else{
			echo "error".$sql."<br>".$conn->error;
		}	
	}
}
	
	?>

</body>
</html>
