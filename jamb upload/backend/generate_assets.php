<?php
if(isset($_POST['generate'])){
  $status = "unused";
}
  
for ( $code= 0; $code < 20; $code++ ) {



  do {

    // generate random figures
    $rand_pin1 = rand( 10599, 99999 );
    $rand_pin2 = rand( 22222, 89898 );
    $code = $rand_pin1 . $rand_pin2;

    $check = "SELECT code FROM regcode WHERE code = '$code'";
    $check_query = mysqli_query( $connection, $check );

  } while ( mysqli_num_rows( $check_query ) > 0 );

  //inserting a generated figure and pin column.
  $pin_serial_query = "INSERT INTO regcode ( code, status ) VALUES ( '$code', '$status' )";
  mysqli_query( $connection, $pin_serial_query );

}
?>