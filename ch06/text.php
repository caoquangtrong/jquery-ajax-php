<?php
    header('Content-Type: text/html; charset=utf-8');

    //ket noi mysql
    $conn = mysqli_connect('localhost', 'root', '', 'test') or die('Cannot connect to mysql');

    //cau truy van
    $sql = 'select * from member';

    //chay cau truy van
    $query = mysqli_query($conn, $sql);

    //kiem tra co du lieu khong
    if(mysqli_num_rows($query)>0){
        echo '
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <td>Username</td>
                <td>Email</td>
            </tr>
        ';
        while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
            $username = $row['username'];
            $email = $row['email'];
            echo '
            <tr>
                <td>'.$username.'</td>
                <td>'.$email.'</td>
            </tr>
            ';
        }
        echo '</table>';


    }

?>
<html>
    
</html>