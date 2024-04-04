<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");


include('db_connection.php'); 



if(isset($_POST['share_id']) && !empty($_POST['share_id'])) {
    
    $share_id = $_POST['share_id'];

    
    $query = "SELECT * FROM donation WHERE ID = $share_id";
    $result = mysqli_query($con, $query);

    if($result && mysqli_num_rows($result) > 0) {
        
        $row = mysqli_fetch_assoc($result);

        
        $filename = "donation_info_" . $row['ID'] . ".csv";

        
        $columns = array('ID','Fullname', 'Email', 'Address', 'Number', 'Donation Services', 'Other Amount');

        
        $data = implode(',', $columns) . "\n"; 

        
        foreach($row as $key => $value) {
            $data .= '"' . $value . '",'; 
        }
        $data = rtrim($data, ','); 

       
        header("Content-Disposition: attachment; filename=\"$filename\"");
        header("Content-Type: text/csv");

        
        echo $data;
        exit;
    } else {
        echo "No data found for download.";
    }
} else {
    echo "Invalid request.";
}

?>