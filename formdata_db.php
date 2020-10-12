<?php
 
			include ("config.php");
			session_start();
			$name=mysqli_real_escape_string($con,$_POST['name']);
			$city=mysqli_real_escape_string($con,$_POST['city']);
			$occupation = mysqli_real_escape_string($con,$_POST['occupation']);
			
				
				
				// This first query is just to get the total count of rows
				$sql = "SELECT id FROM formdata WHERE name = '$name' LIMIT 1" ;
				
				$query = mysqli_query($con, $sql);

				$row = mysqli_fetch_row($query);
				
				// Here we have the total row count
				
						$insertSQL ="INSERT INTO formdata VALUES ('','$name','$city','$occupation')";
							
						
						
						if(mysqli_query($con, $insertSQL))
						{
							echo "<script>alert('successfully Submit..!!')</script>";
							
							//echo "<script>alert('You Must login Now !!')</script>";
							
							echo "<script>window.location.href='index.php'</script>";
						}
						else
						{
							echo "<script>alert('An error occured while uploading the entry to database. Please try again later.')</script>";
								echo" Error:".$con->error;
						}
								// Close your database connection
			mysqli_close($con);
?>