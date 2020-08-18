<?php
    global $conn;
    function connect(){
        global $conn;
        $conn = mysqli_connect('localhost', 'root', '', 'test') or die('{error: "bad_request"}');
    }
    function disconnect(){
        global $conn;
        if($conn){
            mysqli_close(($conn));
        }
    }
    //ham dem tonh so thanh vien
    function count_all_member(){
        global $conn;
        $query = mysqli_query($conn, 'select count(*) as total from member');
        if($query){
            $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
            return $row['total'];
        }
        return 0;
    }
    //ham lay danh sach
    function get_all_member($limit, $start){
        global $conn;
        $sql = 'select * from member limit '.(int)$start . ',' . (int)$limit;
        $query = mysqli_query($conn, $sql);
        $result = array();
        if($query){
            while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
                $result[] = $row;
            }
        }
        return $result;
    }
?>