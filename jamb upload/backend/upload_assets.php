<?php
	/////////////// POST ACTION TO REGISTER STUDDENTS WHEN THE REGISTER BUTTON IS CLICKED //////////////////
	if(isset($_POST['submit'])){
		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$reg_no = $_POST['reg_no'];
		$profile_code = $_POST['profile_code'];
		//$file = $_POST['file'];
					////////////////// ERROR-CHECKING IF SPECIFIED FIELD IS EMPTY ////////////////////
					if(empty($fullname)){
						$error[] = "Error: fullname Required <br /><br />";
					}
					if(empty($email)){
						$error[] = "Error: email Required <br /><br />";
					}
					if(empty($phone)){
						$error[] = "Error: phone Required <br /><br />";
					}
					if(empty($reg_no)){
						$error[] = "Error:reg_no Required <br /><br />";
					}
					if(empty($profile_code)){
						$error[] = "Error: profile_code Required <br /><br />";
					}
					if(empty($error)){
						$query = " INSERT INTO `candidates`(`fullname`, `email`, `phone`, `reg_no`, `profile_code`)
									VALUES('$fullname', '$email', '$phone', '$reg_no', '$profile_code') ";
									
						
						$run_query = mysqli_query($connection, $query);
						if($run_query == true){
							
							$query = " SELECT * FROM candidates WHERE reg_no = '{$reg_no}' ";
							$run_query = mysqli_query($connection, $query1);
							if(mysqli_num_rows($run_query) == 1){
								while($result = mysqli_fetch_assoc($run_query1)){
									$candidates_id = $result['id'];
									
									$_SESSION['candidates_id'] = $candidates_id;
									header("Location:index");
								}
								
							}else{
								 $msg = "Registration Failed";
							}
							
						}else{
							$msg = "... Error: Registration not successfull ...";
						}
					}
					
	}
?>