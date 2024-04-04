<?php

if (isset($_POST['delete_id']) && is_numeric($_POST['delete_id'])) {
    $ID = $_POST['delete_id'];

    include('db_connection.php');

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "DELETE FROM `mehfil` WHERE ID = ?";
    $stmt = mysqli_prepare($con, $sql);

    if ($stmt) {
        
        mysqli_stmt_bind_param($stmt, "i", $ID);

        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            header("Location: sama-mehfil.php?msg=Data deleted successfully");
            exit();
        } else {
            echo "Failed: " . mysqli_error($con);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Failed to prepare the statement";
    }

    mysqli_close($con);
} else {
    echo "Invalid ID provided";
}

?>


