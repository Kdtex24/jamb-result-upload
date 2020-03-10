<?php
	/////////////// POST ACTION TO GENERATE PIN IF THE GENERATE BUTTTON IS CLICKED ///////////
	if(isset($_POST['generate'])){
		mt_srand((double)microtime()*1000000);
		
		$pin_no1 = mt_rand();
	}
?>
<?php
$query = " INSERT INTO `regcode`(`code`, `status`)
									VALUES('$code', '$status') ";
									
						
						$run_query = mysqli_query($connection, $query);
						if($run_query == true){
							
							$query = " SELECT * FROM regcode WHERE status = '{$unused}' ";
							$run_query = mysqli_query($connection, $query1);
							if(mysqli_num_rows($run_query) == 1){
								while($result = mysqli_fetch_assoc($run_query1)){
									//$candidates_id = $result['id'];
									
									//$_SESSION['candidates_id'] = $candidates_id;
									header("Location:token_generator.php");
								}
								
							}else{
								 $msg = "pin generating failed";
							}
							
						}else{
							$msg = "... Pin Generated!!! ...";
						}
					}
					
	}
?>