<?php
    if ( isset( $_POST['id'] ) ) {
        $id = $_POST["id"];

        include_once("database.php");

        // sql to delete a record
        $sql = "DELETE FROM `car_info` WHERE id='$id'";

        if ($conn->query($sql) === TRUE) {
            echo "done";
        } else {
            echo "Error deleting record: " . $conn->error;
        }

        $conn->close();
    }
?>