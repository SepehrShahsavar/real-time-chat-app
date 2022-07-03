<?php
    session_start();
    include "config.php";

    $sql = mysqli_query($conn, "SELECT * FROM users");
    
    $output = "";

    if (mysqli_num_rows($sql) == 1) {
        $output .= "No users are available to chat.";
    } else {
        while ($row = mysqli_fetch_assoc($sql)) {
            $output .= '<a href="#">
                        <div class="content">
                            <img src="./php/images/'. $row["img"] .'" alt="">
                            <div class="details">
                                <span>' . $row["fname"] . " " . $row["lname"] .'</span>
                                <p>'. $row["status"] .'</p>
                            </div>
                        </div>
                        <div class="status-dot"><i class="fas fa-circle"></i></div>
                        </a>';
        }
    }

    echo $output
?>