<?php
//my changes are there
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