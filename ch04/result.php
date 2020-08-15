<?php
    //Nhap number bang phuong thuc pót
    $number = isset($_POST['number']) ? (int)$_POST['number'] : false;

    //kiem tra number co lon hon 0 khong
    if(!$number){
        die("<h1>Vui long nhap so lon hon 0</h1>");
    }

    //in ra man hinh
    echo 'So: '.$number;
?>