

<?php

include './dbConfig.php';
if (isset($_POST['name'])) {
    $name = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $reg_no = htmlspecialchars($_POST['reg_no']);
    $profile_code = htmlspecialchars($_POST['profile_code']); 
    $file = htmlspecialchars($_POST['file']);
    
    $sql = "INSERT INTO candidates (fullname, email, phone, reg_no, profile_code, file) VALUES(?, ?, ?, ?, ?, ?)";
    $mysqli = db_connect();
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('ssssss', $name, $email, $phone, $reg_no, $profile_code, $file);
    if ($stmt->execute()) { 
        $mysqli->close();
        echo json_encode(array("success" => true)); 
    } else {
        $mysqli->close();
        echo json_encode(array("success" => false));
    }
} elseif (isset($_POST['delete'])) {
    $email = htmlspecialchars($_POST['email']);
    $sql = "DELETE FROM candidates WHERE email = ?";
    $mysqli = db_connect();
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('s', $email);
    if ($stmt->execute()) { 
        $mysqli->close();
        echo json_encode(array("success" => true)); 
    } else {
        $mysqli->close();
        echo json_encode(array("success" => false));
    }
} elseif (isset($_POST['approve'])) {
    $email = htmlspecialchars($_POST['email']);
    $sql = "UPDATE candidates SET status = ?  WHERE email = ?";
    $mysqli = db_connect();
    $stmt = $mysqli->prepare($sql);
    $status = "approved";
    $stmt->bind_param('ss', $status, $email);
    if ($stmt->execute()) { 
        $mysqli->close();
        echo json_encode(array("success" => true)); 
    } else {
        $mysqli->close();
        echo json_encode(array("success" => false));
    }
}


