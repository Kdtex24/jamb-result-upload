               <?php 
               if(isset($_POST['proceed'])){
                $regcode = $_POST['regcode'];

                $query = "SELECT * FROM regcode WHERE code = '$code'";
                $result = mysqli_query($connection, $query);
                confirm_query($result);

                if(mysqli_num_rows($result) == 0){
                  echo "<script>alert('Invalid Pin Number, Kindly retry.')</script>";
                }else{

                  $found = mysqli_fetch_array($result);
                  $used = $found['used'];
                  $code = $found['code'];

                  if($used == 1){
                     echo "<script>alert('Pin Number has been used.')</script>";
                  }else{
                     
                      mysqli_query("UPDATE regcode SET used WHERE code = '$code'");

                      echo "<script>alert('Successfully! Close the dialog to  redirect.')</script>";

                      redirect_to('register.php?ref='.$code);
                  }
                }
               }

               ?>
               </div>	 
			</div>
      </div><!--close content-->  
    </div><!--close site_content-->  
 <?php //include 'includes/footer.php';?>