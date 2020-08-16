<?php
    $conn = mysqli_connect("localhost", 'root', '', 'test') or die("connect conect to mysql");
    $sql = 'select * from member';
    $query = mysqli_query($conn, $sql);

    $result = array();

    if(mysqli_num_rows($query)>0){
        while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
            $result[] = array(
                'username'=>$row['username'],
                'email'=>$row['email']
            );
        }
    }
    die(json_encode($result));
    //chuyen array ve json
?>