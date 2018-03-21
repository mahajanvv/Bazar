<?php
//$error = '';
//if(isset($_POST["submit"]))
//{
//	//$error = 'failed';
//	if(empty($_POST['uname']) || empty($_POST['upassword']))
//	{
//		$error = 'UserName OR PassWord is Wrong';
//		
//	}
//	else
//	{
//		$user = $_POST['uname'];
//		$password = $_POST['upassword'];
//		
//		$conn = mysqli_connect("localhost","root","");
//		
//		$db = mysqli_select_db($conn,"Bazar");
//		
//		
//		
//		$rows = mysqli_num_rows($query);
//		if($rows == 1)
//		{
//			header("Location::welcome.php");
//			
//		}
//		else
//		{
//			$error = 'Invalid username or password re-enter';
//		}
//		mysqli_close($conn);
//	}
//	
//}
//else
//{
//	$error = 'failed';
//}

//		$query = mysqli_query($conn,"SELECT * FROM login WHERE uname LIKE '".$user."' and upassword LIKE '".$password."'");
        $query = mysqli_query($conn,"SELECT * FROM login WHERE uname = '$user' and upassword = '$password'");
        if(!$conn){
            echo "Error is ".mysqli_error($conn);
        }
		$result=mysqli_fetch_all($query,MYSQLI_ASSOC);
        var_dump($result);
//		$rows = mysqli_num_rows($query);
        $cnt=count($result);
		if($cnt == 1)
		{
			header("Location:welcome.php");
			
		}
		else
		{
			$error = 'Invalid username or password re-enter';
		}
		mysqli_close($conn);

?>