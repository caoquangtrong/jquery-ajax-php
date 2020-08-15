<?php
    // Nhập giá trị number bằng phương thức post
    $number = isset($_GET['number']) ? (int)$_GET['number'] : false;

    // Kiểm tra number có lớn hơn không hay không
    if (!$number){
        die ('<h1>Vui lòng nhập một số lớn hơn không (0)</h1>');
    }

    echo 'Số: '.$number;
    
?>