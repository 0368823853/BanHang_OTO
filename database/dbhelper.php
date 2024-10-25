<?php
    require_once('config.php');

    // insert, update, delete, select
    function execute($sql){
        //ket noi database
        $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
        mysqli_set_charset($conn, 'utf8');

        // xu ly cau query
        mysqli_query($conn,$sql);

        // dong ket noi database
        mysqli_close($conn);
    }

    function executeResult($sql){
        $data = [];
            //ket noi database
            $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
            mysqli_set_charset($conn, 'utf8');
    
            // xu ly cau query
            $resultset = mysqli_query($conn, $sql);
            while(($row = mysqli_fetch_array($resultset, 1)) != null){
                $data[] = $row;
            }
    
            // dong ket noi database
            mysqli_close($conn);
            return $data;
    }

?>