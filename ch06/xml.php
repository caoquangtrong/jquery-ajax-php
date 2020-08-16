<?php
    $conn = mysqli_connect('localhost', 'root', '', 'test') or die('Cannot conect mysql');
    $sql = 'select * from member';
    $query = mysqli_query($conn, $sql);
    echo '<?xml version="1.0" encoding="UTF-8" ?>';
    echo '<root>';
        while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
            echo '<items>
                <username>'.$row['username'].'</username>
                <email>'.$row['email'].'</email>
            </items>
            ';
        }
    echo '</root>'
?>

